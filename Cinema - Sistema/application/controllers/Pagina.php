<?php

class Pagina extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($_SESSION['user_logged'] == FALSE) {
            $this->session->set_flashdata("error", "Please login first to view this page!! ");
            redirect("entrar/login");
        }
    }

    public function home()
    {
        if ($_SESSION['user_logged'] == FALSE) {
            $this->session->set_flashdata("error", "Please login first to view this page!! ");
            redirect("auth/login");
        }
        $this->load->view('home');
    }
}