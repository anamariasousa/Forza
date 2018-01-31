<?php
// Evita que o usuário deslogado acesse a pagina
if (!UsuarioLogado()):
    header('Location: ' . LINK_LOGIN);
endif;

require_once HEADER;
?>

<div class="row">
    <div class="text-center col-md-12">
        <h2>Fale com o desenvolvedor</h2>
    </div>
</div>

<form action="<?php echo LINK_CONTATO_ENVIAR ?>" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Seu Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="email">Seu Email</label>
                <input type="email" name="email" class="form-control" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea class="form-control" name="mensagem" rows="4" placeholder="Digite a mensagem" required></textarea>
            </div>
          
            <input type="submit" class="btn btn-success btn-block" value="Enviar">
        </div>
    </div>
</form>

<?php require_once FOOTER ?>
