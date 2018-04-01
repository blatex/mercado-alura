<html lang="en">
    <head>
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    </head>
    <body>
        <div class="container">
            
            <?php if($this->session->flashdata("success")): ?>
            <p class="alert alert-success"><?= $this->session->flashdata("success"); ?></p>
            <?php endif ?>
            
            <?php if($this->session->flashdata("danger")): ?>
            <p class="alert alert-danger"><?= $this->session->flashdata("danger"); ?></p>
            <?php endif ?>
            
            <h1>Produtos</h1>

            <table class="table">
                <?php foreach($produtos as $produto): ?>
                <tr>
                    <td><?= $produto["nome"] ?></td>
                    <td><?= numeroEmReais($produto["preco"]) ?></td>
                </tr>
                <?php endforeach ?>
            </table>
            
            <?php if($this->session->userdata("usuario_logado")): ?>
                <?= anchor('produtos/formulario', 'Novo produto', array("class" => "btn btn-primary")); ?>
                <?= anchor('login/logout', 'Logout', array("class" => "btn btn-primary")); ?>
            <?php else: ?>
                <h1>Login</h1>

                <?php

                echo form_open("login/autenticar");

                echo form_label("Email", "email");
                echo form_input(array(
                    "name" => "email",
                    "class" => "form-control",
                    "id" => "email",
                    "maxlength" => "255"
                ));

                echo form_label("Senha", "senha");
                echo form_password(array(
                    "name" => "senha",
                    "class" => "form-control",
                    "id" => "senha",
                    "maxlength" => "255"
                ));

                echo form_button(array(
                    "class" => "btn btn-primary",
                    "type" => "submit",
                    "content" => "Login"
                ));

                echo form_close();

                ?>

                <h1>Cadastro de Usuários</h1>

                <?php

                echo form_open("usuarios/novo");

                echo form_label("Nome", "nome");
                echo form_input(array(
                    "name" => "nome",
                    "class" => "form-control",
                    "id" => "nome",
                    "maxlength" => "255"
                ));

                echo form_label("Email", "email");
                echo form_input(array(
                    "name" => "email",
                    "class" => "form-control",
                    "id" => "email",
                    "maxlength" => "255"
                ));

                echo form_label("Senha", "senha");
                echo form_password(array(
                    "name" => "senha",
                    "class" => "form-control",
                    "id" => "senha",
                    "maxlength" => "255"
                ));

                echo form_button(array(
                    "class" => "btn btn-primary",
                    "type" => "submit",
                    "content" => "Cadastrar"
                ));

                echo form_close();

                ?>
            <?php endif ?>
        </div>
    </body>
</html>