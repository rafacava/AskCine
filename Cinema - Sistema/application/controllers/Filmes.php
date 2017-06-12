<?php

class Filmes extends CI_Controller{
    
    public function add(){
        if(isset($_POST['add'])){
            $this->load->model('Filmes_model');
           if ($this->Filmes_model->add_filme()) {
               $this->session->set_flashdata('success','adicionado ao banco');
               redirect('filmes/add');
           }
            else{
                $this->session->set_flashdata('success','Filme adicionado ao banco');
            }
        }
        
        $this->load->view('add_filmes');
        
        
        
    }
    public function all()
    {
        $this->load->model('Filmes_model');
        $filmes =  $this->Filmes_model->get_all_filmes();
        $data['filmes'] = $filmes;
        $this->load->view('all_filmes',$data);
    }
    
    public function pesquisar(){
        $this->load->model('Filmes_model');
        $dados['titulos'] = $this->Filmes_model->get_titulos();
        $this->load->view('all_filmes',$dados);
    }
    
    
    
    
    public function edit($id)
    {
        
        $this->load->model('Filmes_model');
        
        if (isset($_POST['update'])){
            if ($this->Filmes_model->updateFilme($id)){
                $this->session->set_flashdata('error','filme nao foi atualizado');
                redirect('filmes/edit/'.$id,'refresh');
            }else{
                    $this->session->set_flashdata('success','filme  foi atualizado');
                redirect('filmes/edit/'.$id,'refresh');
                }
        }
        $data['filme'] = $this->Filmes_model->getFilme($id);
        $this->load->view('edit_filmes',$data);
        return $id;
        
    }
}