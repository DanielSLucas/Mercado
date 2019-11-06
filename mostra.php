<?php

    include 'conexao.php';

    echo "<link rel='stylesheet' href='./estilo.css'>";
    $sql = "select * from tb_produtos";
    
    $tabela = mysqli_query($link, $sql);

    echo "<table>";

        echo "<thead>";
            echo "<td>ID:</td>";
            echo "<td>Nome:</td>";
            echo "<td>Preço:</td>";
            echo "<td>Validade:</td>";
            echo "<td>Quantidade em estoque:</td>";
            echo "<td>Quantidade mínima:</td>";
            echo "<td></td>";
            echo "<td></td>";
        echo "</thead>";
    //Lopping para montar lista
    while ($linha = mysqli_fetch_array($tabela)) {
       

        echo "<tr>";
            echo "<td>".$linha[0]."</td>"; //ID
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

    // SUBMIT
    echo "<div class='col-md-4'>";
        echo "<button id='singlebutton' name='singlebutton' class='btn btn-default'><a href='index.php'>home</a></button>";
    echo "</div>";



?>