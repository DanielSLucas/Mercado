<?php
    include 'conexao.php';

    $idProd         = $_GET['id'];
    $nome           = $_POST['nomeProduto'];
    $preco          = $_POST['preco'];
    $validade       = $_POST['validade'];
    $qtdEstoque     = $_POST['estoque'];
    $qtdMin         = $_POST['min'];

    $sql = "update tb_produtos set nome_p='$nome', preco='$preco', validade='$validade', qtd_em_estoque='$qtdEstoque', qtd_min='$qtdMin' where id_produto=$idProd";


    mysqli_query($link, $sql);


    header("Location: mostra.php");

?>