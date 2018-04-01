<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?=base_url('css/bootstrap.css')?>">
    </head>
    <body>
        <div class="container">
            <h1>Cadastrar Produto</h1>
            
            <?php
            echo form_open("produtos/novo");

            echo form_label("Nome", "nome");
            echo form_input(array(
                "name" => "nome",
                "class" => "form-control",
                "id" => "nome",
                "maxlength" => "255"
            ));

            echo form_label("Preço", "preco");
            echo form_input(array(
                "name" => "preco",
                "class" => "form-control",
                "id" => "preco",
                "maxlength" => "255"
            ));

            echo form_label("Descrição", "descricao");
            echo form_textarea(array(
                "name" => "descricao",
                "class" => "form-control",
                "id" => "descricao"
            ));

            echo form_button(array(
                "class" => "btn btn-primary",
                "type" => "submit",
                "content" => "Cadastrar"
            ));

            echo form_close();

            ?>
        </div>
    </body>
</html>