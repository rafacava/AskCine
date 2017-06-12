<?php

class Entrar extends CI_Controller
{

    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        redirect("Entrar/login", "refresh");
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        if ($this->form_validation->run() == TRUE) {

            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('username' => $username, 'password' => $password));
            $query = $this->db->get();

            $user = $query->row();
            // if user exists
            if ($user->email) {

 
                $this->session->set_flashdata("success", "Você esta logado");



                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username'] = $user->username;


                redirect("Pagina/home", "refresh");
            } else {
                $this->session->set_flashdata("error", "Não existe registro no banco");
                redirect("entrar/login", "refresh");
            }
        }
        $this->load->view('login');
    }

    public function registrar()
    {

        if (isset($_POST['register'])) {
            $this->form_validation->set_rules('username', 'Apelido', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Senha', 'required|min_length[5]');
            $this->form_validation->set_rules('password2', 'Senha repetida', 'required|min_length[5]|matches[password]');
            // if form validation true
            if ($this->form_validation->run() == TRUE) {
//                echo 'form validated';
                // add user no database

                $data = array(
                    'username' => $_POST['username'],
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password']),
                );
                $this->db->insert('users', $data);

                $this->session->set_flashdata("success", "A sua conta foi registrada, pode efetuar o login agora");
                redirect("entrar/cadastrar", "refresh");
            }
        }
        //load view
        $this->load->view('cadastrar');
    }
}