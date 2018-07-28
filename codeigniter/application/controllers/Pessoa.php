<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {

    public function __construct( )
    {
        parent::__construct( ); 
        $this->load->library('session');  
    }

	public function index()
	{
                $data["pagina"]="pessoa";
		$view = $this->load->view('Principal', $data);
	}
        public function salvar () {
            $documento= $this->input->post ('documento', TRUE);
            $nome= $this->input->post ('nome', TRUE);
            $endereco= $this->input->post ('endereco', TRUE);
            $numero= $this->input->post ('numero', TRUE);
            $pais= $this->input->post ('pais', TRUE);
            $ibgecidade= $this->input->post ('ibgecidade', TRUE);
            $uf= $this->input->post ('uf', TRUE);
            $telefone= $this->input->post ('telefone', TRUE);
            $email= $this->input->post ('email', TRUE);
            $dataNasc= $this->input->post ('dataNasc', TRUE);
            
            
            echo $documento. " " . $nome. " " . $endereco. " " . $numero. " " . $pais. " " . $ibgecidade. " " . $uf. " " . $telefone. " " . $email. " " . $dataNasc. " " ;
            
        }
}
