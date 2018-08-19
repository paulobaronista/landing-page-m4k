<div class="container-fluid home padding-off-mobile">
    <div class="hidden-xs col-xs-12 col-sm-7 col-md-8"></div>
    <div class="logo-mobile">
        <img class="img-responsive visible-xs" src="<?= base_url(); ?>assets/images/logo-mobile.jpg" alt="">
    </div>
    <p class="txt-01 hidden-xs">Produtividade </p>
    <div class="col-xs-12 col-sm-5 col-md-4 form">
        <!--<form method="post" role="form" action="<?php echo base_url("contato")?>">-->
        <form method="post" role="form" action="http://trevisanservice.com.br/formEmail/m4k/contato">
            <span class="tt-form text-center">
                <p>Envie uma mensagem <br/> pelo formulário abaixo</p>
            </span>
            <div class="group-form">
                <div class="form-group">
                    <label for="nome">Nome*</label>
                    <input id="nome" type="text" class="nome form-control" name="nome" required="required" />
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input id="email" type="email" class="email form-control" name="email" required="required"/>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input id="telefone" class="phone form-control" type="tel" name="phone"/>
                </div>
                <div class="form-group">
                    <label for="form-mensagem">Mensagem</label>
                    <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss"></textarea>
                </div>
                <button type="submit" class="btn_enviar enviar btn center-block" title="enviar" name="enviar_email" value="enviar">Enviar</button>
            </div>  
        </form>
    </div>
</div> 
<p class="txt-01 visible-xs">Produtividade </p>
<div class="container-fluid frase">
    <p>no processo de <strong>lavagem</strong>,</p>
    <p><strong>armazenagem</strong> e  <strong>transporte</strong></p>
</div>
<div class="container-fluid box-servicos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 padding-off">
                <div class="col-xs-12 col-sm-4 col-md-4 text-center servicos">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/icon-1.png" alt="">
                    <p><strong>Lavagem</strong></p>
                    <p>Evita a manipulação dos utensílios, 
                        mantendo-os sempre limpos e prontos 
                        para uma higienização 
                        rápida e eficiente.</p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 text-center servicos">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/icon-2.png" alt="">
                    <p><strong>Armazenagem</strong></p> 
                    <p>Proporciona 
                        melhor controle
                        de inventário</p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 text-center servicos">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/icon-3.png" alt="">
                    <p><strong>Transporte</strong></p>
                    <p>Facilitam a logística e evitam que se choquem 
                        e se quebrem, mantendo-as protegidas e limpas até o destino.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid faixa">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 padding-off text-center">
                <p><strong>Racks</strong> (Gavetas Plásticas) para <strong>Máquinas de Lavar Louças Industrial</strong>,<br/>
                    compatível com máquinas nacionais e importadas e com <strong>certificação NSF</strong>.</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid box-produtos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 padding-off">
                <div class="col-xs-12 col-sm-4 col-md-4 produtos">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/produto-1.jpg" alt="">
                    <hr/>
                    <p><span>&#8226;</span> Rack apropriado para pratos, tigelas e bandejas</p>
                    <p><span>&#8226;</span> Possui recortes laterais facilitando o manuseio com encaixes perfeitos, e possibilita empilhamento quando necessário.</p>
                    <p><span>&#8226;</span> Cor Azul</p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 produtos">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/produto-2.jpg" alt="">
                    <hr/>
                    <p><span>&#8226;</span> Rack apropriado para lavagem de copos, taças e tulipas, disponíveis em diversos diâmetros e alturas</p>
                    <p><span>&#8226;</span> Garante de forma segura que todos os copos, taças e tulipas se mantenham íntegros desde a lavagem atéa armazenagem e transporte.</p>
                    <p><span>&#8226;</span> Cor Bege</p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 produtos">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/produto-3.jpg" alt="">
                    <hr/>
                    <p><span>&#8226;</span> Cesto sem alça com 8 compartimentos para lavagem de talheres, utilizado sempre com a Gaveta Lisa Malha Grossa</p>
                    <p><span>&#8226;</span> Alta flexibilidade na operação, possibilitando utilizar dois cestos em um só rack.</p>
                    <p><span>&#8226;</span> Cor Bege</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
if(isset($email_enviado))
    echo $email_enviado;
?>