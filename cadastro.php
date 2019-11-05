<?php
    include 'conexao.php';


    //Pegando as informações do formulário e armazenando em váriaveis
    $nome           = $_POST['nomeProduto'];
    $preco          = $_POST['preco'];
    $validade       = $_POST['validade'];
    $qtdEstoque     = $_POST['estoque'];
    $qtdMin         = $_POST['min'];

    //Inserir informações no banco
    mysqli_query($link, "insert into tb_produtos (nome_p, preco, validade, qtd_em_estoque, qtd_min) values ('$nome','$preco', '$validade', '$qtdEstoque', '$qtdMin')");

    echo"inserido com sucesso";

    //Redireciona p/ pagina mostrar.php
    header("Location: index.html");
?>