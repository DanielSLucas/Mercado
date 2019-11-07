<?php  include "./componentes/head.php"; ?>
<body>

    <header>
        <?php include "./componentes/nav.php"; ?>
    </header>

    <?php 
        include 'conexao.php';

        //CRIA UMA VENDA NA TABELA VENDA
        $sql = "insert into tb_vendas (valor_total, data_vend) values (0, NOW())";
        mysqli_query($link, $sql);

        // BUSCA A ULTIMA LINHA DA TABELA "TB_VENDAS"
        $lastLine = "select * from tb_vendas order by id_venda desc";
        $linha = mysqli_query($link, $lastLine);

        //CRIAÇÃO DE UMA ARRAY COM A LINHA
        $venda = mysqli_fetch_array($linha);

        //TRAZ O ID DA VENDA 
        $venda['id_venda'];
    ?>
<div class="container">    
<div class="row">
    <div class="col-8">
        <form action="cadastro.php" method="POST">

            <fieldset>

                <!-- Form Name -->
                <legend>Venda</legend>
                        
                <div class="form-group">
                    <!-- SELECT-->
                    
                <label class="col-md-4 control-label" for="selectbasic"></label>
                <div class="col-md-4">
                    <select id="listaProdutos" name="selectProdutos" class="form-control">
                        <?php 
                               
                            echo "<link rel='stylesheet' href='./estilo.css'>";
                            $sql = "select * from tb_produtos";
                               
                            $tabela = mysqli_query($link, $sql);
                        
                            $cont = 1;

                            while ($produto = mysqli_fetch_array($tabela)) {
                                
                                echo "<option value='$cont'>".$produto[1]."</option>";

                                $cont++;
                            }
                        ?>
                        
                    </select> 
                </div>

                    <label class="col-md-4 control-label" for="textinput"></label>  
                    
                    <div class="col-md-6">
                        <input id="textinput" name="preco" type="text" placeholder="Preço do produto" class="form-control input-md">          
                    </div>

                    <label class="col-md-4 control-label" for="textinput"></label>  
                        
                    <div class="col-md-6">
                        <input id="textinput" name="validade" type="date" placeholder="Validade do produto" class="form-control input-md">          
                    </div>

                    <label class="col-md-4 control-label" for="textinput"></label>  
                        
                    <div class="col-md-6">
                        <input id="textinput" name="estoque" type="text" placeholder="Quantidade em estoque" class="form-control input-md">          
                    </div>

                    <label class="col-md-4 control-label" for="textinput"></label>  
                        
                    <div class="col-md-6">
                        <input id="textinput" name="min" type="text" placeholder="Quantidade min em estoque" class="form-control input-md">          
                    </div>

                    <br/>

                    <!-- <div class="col-md-4">
                        <button  type="submit" id="singlebutton" name="singlebutton" class="btn btn-default">Cadastrar</button>
                    </div> -->

                    <div class="col-md-8">
                        <button  type="submit" id="singlebutton" name="singlebutton" class="btn btn-default">Cadastrar</button>
                        <button id="button2id" name="button2id" class="btn btn-success"><a href="mostra.php">Produtos</a></button>
                    </div>
                </div>

            </fieldset>


            <!-- <input type="submit"> -->
        </form>
    </div>

    <div class="col-4">
        sdaçfksaçdfklj
    </div>
</div>
</div>


    <!-- JS from bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>