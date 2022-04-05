<?php

require_once 'db.php';

function createProdutoAction($conn, $nome, $descricao, $valor, $fornecedor) {
    $createProdutoDb = createProdutoDb($conn, $nome, $descricao, $valor, $fornecedor);
    $message = $createProdutoDb == 1 ? 'success-create' : 'error-create';
    return header("Location: ./sucesso.php?message=$message");
}
