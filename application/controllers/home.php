<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['title'] = 'M4K Brasil';
        $data['description'] = 'Especializada em produtos e serviços que promovam melhoria da produtividade em operações de cozinhas profissionais';
        $data['keywords'] = 'rack lava louca restaurante; rack lava loucas industrial; rack lava loucas; produtividade restaurante; produtividade cozinha; produtividade lava louca';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }

}

/* Location: ./application/controllers/home.php */
