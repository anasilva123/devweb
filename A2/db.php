<?php



function createProdutoDb($conn, $nome, $descricao, $valor, $fornecedor) {
    $nome = mysqli_real_escape_string($conn, $nome);
    $descricao = mysqli_real_escape_string($conn,  $descricao);
    $valor = mysqli_real_escape_string($conn,  $valor);
    $fornecedor = mysqli_real_escape_string($conn,  $fornecedor);

    if($nome && $descricao && $valor && $fornecedor) {
        $sql = "INSERT INTO produto (nome, descricao, valor, fornecedor) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql))
            exit('SQL error');

        mysqli_stmt_bind_param($stmt, 'sss', $nome, $descricao, $valor, $fornecedor);
        mysqli_stmt_execute($stmt);
        mysqli_close($conn);
        return true;
    }
}

?>
