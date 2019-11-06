<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center>
<?php 
    include 'conexao.php';
    echo "<link rel='stylesheet' href='./estilo.css'>";

    $idProd = $_GET['id'];

    //Comando sql + armazenar em array o resultado
    $sql = "select * from tb_produtos where id_produto=$idProd";
    $tabela = mysqli_query($link, $sql);
    $linha = mysqli_fetch_array($tabela);

    echo "<form action='alterar.php?id=$idProd' method='POST'>";

        echo "<fieldset>";
            
            //FORM NAME
            echo "<legend>Cadastro produto:</legend>";

            //GRUPO DE INPUTS
            echo "<div class='form-group'>";

                // NOME
                echo "<div class='col-md-4'>";
                    echo "<input id='textinput' name='nomeProduto' type='text' placeholder='Digite seu nome' value='$linha[1]'' class='form-control input-md'>";
                echo "</div>";

                echo "<br/>";

                //PREÇO
                echo "<div class='col-md-4'>";
                    echo "<input id='textinput' name='preco' type='text' placeholder='Preço do produto' value='$linha[2]'' class='form-control input-md'>";
                echo "</div>";

                echo "<br/>";

                //VALIDADE
                echo "<div class='col-md-4'>";
                    echo "<input id='textinput' name='validade' type='date' placeholder='Validade do produto' value='$linha[3]'' class='form-control input-md'>";
                echo "</div>";

                echo "<br/>";

                //QTD EM ESTOQUE
                echo "<div class='col-md-4'>";
                    echo "<input id='textinput' name='estoque' type='number' placeholder='Quantidade em estoque' value='$linha[4]'' class='form-control input-md'>";
                echo "</div>";

                echo "<br/>";

                //QTD MIN EM ESTOQUE
                echo "<div class='col-md-4'>";
                    echo "<input id='textinput' name='min' type='number' placeholder='Quantidade min em estoque' value='$linha[5]'' class='form-control input-md'>";
                echo "</div>";

                echo "<br/>";

                // SUBMIT
                echo "<div class='col-md-4'>";
                    echo "<button  type='submit' id='singlebutton' name='singlebutton' class='btn btn-default'>Alterar</button>";
                echo "</div>";

            echo "</div>";

        echo "</fieldset>";

    echo "</form>";

?>
</center>