<?php

require_once 'config.php';

if (isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["valor"]) && isset($_POST["fornecedor"]))
    createProdutoAction($conn, $_POST["nome"], $_POST["descricao"], $_POST["valor"], $_POST["descricao"]);

?>
<div class="container">
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="create.php" method="POST">
                <h1>Cadastro de Produto</h1>
                <h4>Inclua as informações do produto abaixo</h4>
                <label>Nome do produto</label><br>
                <input type="text" name="nome" required/><br>
                <label>Descrição do produto</label><br>
                <input type="text" name="descricao" required/><br>
                <label>Valor do Produto</label><br>
                <input type="number" name="valor" required/><br>
                <label>Fornecedor</label><br>
                <input type="text" name="fornecedor" required/><br>
                <button class="btn btn-success text-white" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
