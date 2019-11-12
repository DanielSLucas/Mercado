<?php  include "./componentes/head.php"; ?>
<body>

    <header>
        <?php include "./componentes/nav.php"; ?>
    </header>

    <div class="container">    
        <div class="row">
            <div class="col-6">
                <form action="vendas.php?tab=3" method="POST">

                    <fieldset>

                        <!-- Form Name -->
                        <legend>Venda</legend>
                                
                        <div class="form-group">
                            <!-- SELECT-->
                            
                            <label class="col-md-4 control-label" for="selectbasic">Produto:</label>
                            <div class="col-md-8">
                                <select id="listaProdutos" name="selectProdutos" class="form-control">
                                    <?php 
                                        include 'conexao.php';

                                        echo "<link rel='stylesheet' href='./estilo.css'>";
                                        $selectProd = "select * from tb_produtos";
                                        
                                        $tabelProd = mysqli_query($link, $selectProd);

                                        while ($produto = mysqli_fetch_array($tabelProd)) {
                                            
                                            echo "<option value='$produto[0]'>".$produto[1]."</option>";
                
                                        }
                                    ?>
                                    
                                </select> 
                            </div>
                            
                            <br/>
                            <!-- Quantidade de produtos -->                             
                            <div class="col-md-8">
                                <label class="control-label" for="textinput">Quantidade:</label> 
                                <input id="textinput" name="qtd" type="number" value='1' class="form-control input-md">          
                            </div>

                            <br/>

                            <!-- BOTÃO CADASTRAR  -->
                            <div class="col-md-4" >
                                <button  type="submit" id="singlebutton" name="singlebutton" class="btn btn-default">Add Produto</button>
                            </div>
                        </div>

                    </fieldset>


                    <!-- <input type="submit"> -->
                </form>
            </div>

            <div class="col-6">
                <?php

                    include 'conexao.php';
                    
                    $idProduto  = "";
                    $qtd        = "";
                    $valTotal   = 0;

                    if (isset($_POST['selectProdutos']) && isset($_POST['qtd'])) {
                        $idProduto  = $_POST['selectProdutos'];
                        $qtd        = $_POST['qtd'];

                        //BUSCA O PRODUTO E SUAS INFO
                        $sqlProduto = "select * from tb_produtos where id_produto = $idProduto";
                        $tabProduto = mysqli_query($link, $sqlProduto);
                        $linhaProduto = mysqli_fetch_array($tabProduto);

                        //ATUALIZA A QUANTIDADE DO PRODUTO EM ESTOQUE
                        $updateEstoque = "update tb_produtos set qtd_em_estoque=$linhaProduto[4]-$qtd where id_produto = $idProduto";
                        mysqli_query($link, $updateEstoque);
                    
                        if ($linhaProduto[4] < $linhaProduto[5]) {
                            echo "<script language=javascript>alert( 'Baixa quantidade em estoque. Repor estoque!!' );</script>";
                        }

                        // BUSCA A ULTIMA LINHA DA TABELA "TB_VENDAS"
                        $lastLine       = "select * from tb_vendas order by id_venda desc";
                        $tabVenda       = mysqli_query($link, $lastLine);
                        $linhaVenda     = mysqli_fetch_array($tabVenda);

                        //INSERÇÃO DE PRODUTO NA TABELA "tb_itens_vendidos"
                        $inserirItem = "insert into tb_itens_vendidos (valor_p, qtd, fk_produto, fk_venda) values ($linhaProduto[2], $qtd, $idProduto, $linhaVenda[0]) ";
                        $tabVendidos = mysqli_query($link, $inserirItem);
                        
                        //SELECT NA tb_itens_vendidos
                        $sql = "select * from tb_itens_vendidos where fk_venda = $linhaVenda[0] ";
                        $tabela = mysqli_query($link, $sql);
                        
                        echo "<table class='table table-dark'>";

                            echo "<thead>";
                                echo "<td scope='col'>Produto:</td>";
                                echo "<td scope='col'>Quantidade</td>";
                                echo "<td scope='col'>Preço:</td>";
                                echo "<td scope='col'>Total:</td>";
                            echo "</thead>";

                        //Lopping para montar tabela
                        while ($linha = mysqli_fetch_array($tabela)) {
                        
                            //BUSCA O PRODUTO E SUAS INFO
                            $sqlProduto = "select * from tb_produtos where id_produto = $linha[3]";
                            $tabProduto = mysqli_query($link, $sqlProduto);
                            $linhaProduto = mysqli_fetch_array($tabProduto);

                            echo "<tr>";
                                echo "<td>".$linhaProduto[1]."</td>"; //Produto
                                echo "<td>".$linha[2]."</td>"; //QUANTIDADE
                                echo "<td>".$linha[1]."</td>"; //PREÇO
                                echo "<td>".$linha[1] * $linha[2]."</td>"; //PREÇO TOTAL
                            echo "</tr>";

                            $valTotal = $valTotal + $linha[1] * $linha[2];
                        }
                            echo "<tr>";
                                echo "<td>Total:</td>"; 
                                echo "<td></td>"; 
                                echo "<td></td>"; 
                                echo "<td>".$valTotal."</td>"; 
                            echo "</tr>";
                        echo "</table>";

                        $attVenda = "update tb_vendas set valor_total='$valTotal' where id_venda= $linhaVenda[0]";
                        $queryAtt = mysqli_query($link, $attVenda);
                    }
                ?>
            </div>
        </div>
    </div>


    <!-- JS from bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>