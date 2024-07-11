<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_site extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');

        $this->load->model('home_model');
    }

	
	public function index()
	{
        
		$this->load->view('home');
	}

    public function categorias()
	{
        $data['categorias']=$this->home_model->listar();
		$this->load->view('categorias',$data);
	}

    public function imovel()
	{
        $data['imovel']=$this->home_model->listar();
		$this->load->view('imovel',$data);
	}

    public function sobre()
	{
        $data['sobre']=$this->home_model->listar();
		$this->load->view('sobre',$data);
	}
    public function contato()
	{
        $data['contato']=$this->home_model->listar();
		$this->load->view('contato',$data);
	}
    public function novidades()
	{
        $data['contato']=$this->home_model->listar();
		$this->load->view('novidades',$data);
	}

    public function listar()
	{
        $data['categorias']=$this->home_model->listar();
		$this->load->view('crud/listar',$data);
	}

    public function cadastrar()
    {
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            if (!empty($_FILES["userfile"])) {
                
                $config['upload_path'] = 'assets/img';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 1000000000000000;
    
                $this->load->library('upload', $config);
    
                
                if ($this->upload->do_upload('userfile')) {
                   
                    $upload_data = $this->upload->data();
                    $nome = $upload_data['file_name']; 
    
                    
                    $params = array(
                        'titulo_primario' => $this->input->post('titulo_primario'),
                        'titulo_secundario' => $this->input->post('titulo_secundario'),
                        'qtd_quartos' => $this->input->post('qtd_quartos'),
                        'qtd_banheiros' => $this->input->post('qtd_banheiros'),
                        'opcionais' => $this->input->post('opcionais'),
                        'qtd_hospedes' => $this->input->post('qtd_hospedes'),
                        'valor_diaria' => $this->input->post('valor_diaria'),
                        'link_img' => $nome
                    );
    
                   
                    $this->home_model->salvar($params);
                    redirect('home_site/listar');
                } else {
                    
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error); 
                }
            } else {
                
                echo "Nenhum arquivo enviado.";
            }
        }
    
        
        $this->load->view('crud/cadastrar');
    }
    public function editar($id)
	{
           
           if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            if (!empty($_FILES["userfile"])) {
                
                $config['upload_path'] = 'assets/img'; 
                $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
                $config['max_size'] = 1000000000000000; 
    
                
                $this->load->library('upload', $config);
    
                
                if ($this->upload->do_upload('userfile')) {
                    
                    $upload_data = $this->upload->data();
                    $nome = $upload_data['file_name']; // Nome do arquivo salvo
    
                    
                    $params = array(
                        'titulo_primario' => $this->input->post('titulo_primario'),
                        'titulo_secundario' => $this->input->post('titulo_secundario'),
                        'qtd_quartos' => $this->input->post('qtd_quartos'),
                        'qtd_banheiros' => $this->input->post('qtd_banheiros'),
                        'opcionais' => $this->input->post('opcionais'),
                        'qtd_hospedes' => $this->input->post('qtd_hospedes'),
                        'valor_diaria' => $this->input->post('valor_diaria'),
                        'link_img' => $nome
                    );
    
                    
                    $this->home_model->update($id,$params);
                    redirect('home_site/listar');
                } else {
                    
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error); 
                }
            } else {
                
                echo "Nenhum arquivo enviado.";
            }
        }
        $data['categoria']=$this->home_model->listar_id($id);
		$this->load->view('crud/editar',$data);
	}
    public function delete($id)
	{
        $this->home_model->delete($id);
		redirect('home_site/listar');
	}







	
}
