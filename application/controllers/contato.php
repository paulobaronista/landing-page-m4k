<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'M4K Brasil';
        $data['description'] = 'Especializada em produtos e serviços que promovam melhoria da produtividade em operações de cozinhas profissionais';
        $data['keywords'] = 'rack lava louca restaurante; rack lava loucas industrial; rack lava loucas; produtividade restaurante; produtividade cozinha; produtividade lava louca';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if($this->input->post('enviar_email') == "enviar"){			
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('Contato enviado pelo site www.racklavaloucas.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@racklavaloucas.com.br","$nome"); //senha: rack@18LD
            $this->email->to('contato@racklavaloucas.com.br');
            $this->email->cc('leadsm4k@gmail.com, sac@m4kbr.com, diego.viriato@gmail.com, francisco@m4kbr.com, paulobaronista@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                E-mail:		{$email}<br/>
                    Telefone:	{$telefone}<br/>
                        Mensagem:	{$mensagem}<br/>
                            </body></html>");

            if($this->email->send()){				
                redirect('contato/obrigado');
            }else{
                redirect('contato/fail');
            }

            //            if($this->email->send()){				
            //                redirect('http://racklavaloucas.com.br/contato/obrigado');
            //            }else{
            //                redirect('http://racklavaloucas.com.br/contato/fail');
            //            }

        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado(){	
        $data['title'] = 'M4K Brasil';
        $data['description'] = 'Especializada em produtos e serviços que promovam melhoria da produtividade em operações de cozinhas profissionais';
        $data['keywords'] = 'rack lava louca restaurante; rack lava loucas industrial; rack lava loucas; produtividade restaurante; produtividade cozinha; produtividade lava louca';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail(){	
        $data['title'] = 'M4K Brasil';
        $data['description'] = 'Especializada em produtos e serviços que promovam melhoria da produtividade em operações de cozinhas profissionais';
        $data['keywords'] = 'rack lava louca restaurante; rack lava loucas industrial; rack lava loucas; produtividade restaurante; produtividade cozinha; produtividade lava louca';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/contato.php */