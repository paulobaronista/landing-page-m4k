
<form method="post" role="form" action="http://trevisanservice.com.br/formEmail/m4k/contato">
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
<?php 
if(isset($email_enviado))
    echo $email_enviado;
?>