<?php

    include 'conexao.php';
    include "./componentes/head.php";
    echo "<link rel='stylesheet' href='./componentes/estilo.css'>";

    include "./componentes/nav.php";
    $sql = "select * from tb_produtos";
    
    $tabela = mysqli_query($link, $sql);

    echo "<div class='container'>";
        echo "<table class='table table-dark'>";

            echo "<thead>";
                echo "<td scope='col'>ID:</td>";
                echo "<td scope='col'>Nome:</td>";
                echo "<td scope='col'>Preço:</td>";
                echo "<td scope='col'>Validade:</td>";
                echo "<td scope='col'>Quantidade em estoque:</td>";
                echo "<td scope='col'>Quantidade mínima:</td>";
                echo "<td scope='col'></td>";
                echo "<td scope='col'></td>";
            echo "</thead>";
        //Lopping para montar lista
        while ($linha = mysqli_fetch_array($tabela)) {
        

            echo "<tr>";
                echo "<td scope='row'>".$linha[0]."</td>"; //ID
                echo "<td>".$linha[1]."</td>"; //NOME
                echo "<td>".$linha[2]."</td>"; //PREÇO
                echo "<td>".$linha[3]."</td>"; //VALIDADE
                echo "<td>".$linha[4]."</td>"; //QUANTIDADE ME ESTOQUE
                echo "<td>".$linha[5]."</td>"; //QUANTIDADE MIN
                echo "<td><a href='delete.php?id=$linha[0]'>Excluir</a></td>";
                echo "<td><a href='mostraalterar.php?id=$linha[0]'>Alterar</a></td>";
            echo "</tr>";

        }

        echo "</table>";
    echo "</div>";



?>
