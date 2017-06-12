<?php
class Filmes_model extends CI_Model{
    
    public function add_filme(){
        $data = array(
            'titulo'=>$this->input->post('titulo'),
            'genero'=>$this->input->post('genero'),
            'legenda'=>$this->input->post('legenda'),
            'audio'=>$this->input->post('audio'),
            'video'=>$this->input->post('video'),
            'origem'=>$this->input->post('origem'),
            'ator'=>$this->input->post('ator'),
            'diretor'=>$this->input->post('diretor'),
            'imagem'=>$this->input->post('imagem'),
            'youtube'=>$this->input->post('youtube'),
            );
        $this->db->insert('filmes',$data);
        $id = $this->db->insert_id();
        return $id;
    }
    public function get_all_filmes()
    {
        $this->db->select('*');
        $this->db->from('filmes');
        $query = $this->db->get();
        return $query->result();
        
    }
    
        public function getfilme($id)
    {
        $this->db->select('*');
        $this->db->where('id_filmes',$id);
        $this->db->from('filmes');
        $query = $this->db->get();
        return $query->row();
        
    }
    
        public function get_titulos(){
            $termo = $this->input->post('pesquisar');
            $this->db->select('*');
            $this->db->like('titulo',$termo);
            return $this->db->get('filmes')->result();

        }

    public function updateFilme($id){
        
        $data = array(
            'titulo'=>$this->input->post('titulo'),
            'genero'=>$this->input->post('genero'),
            'legenda'=>$this->input->post('legenda'),
            'audio'=>$this->input->post('audio'),
            'video'=>$this->input->post('video'),
            'origem'=>$this->input->post('origem'),
            'ator'=>$this->input->post('ator'),
            'diretor'=>$this->input->post('diretor'),
            'imagem'=>$this->input->post('imagem'),
            'youtube'=>$this->input->post('youtube'),
        );
        $this->db->where('id_filmes',$id);
        $this->db->update('filmes',$data);
    }
}