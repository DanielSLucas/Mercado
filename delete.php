<?php

    include 'conexao.php';

    $idDel = $_GET['id'];

    $sql = "delete from tb_produtos where id_produto=$idDel";

    mysqli_query($link, $sql);

    header("Location: mostra.php");

?>