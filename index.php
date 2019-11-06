<?php  include "topo.php"; ?>
<body>
    
    <center>
        <form action="cadastro.php" method="POST">

            <fieldset>

                <!-- Form Name -->
                <legend>Cadastro produto:</legend>
                        
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput"></label>  
                    <div class="col-md-6">
                        <input id="textinput" name="nomeProduto" type="text" placeholder="Digite seu nome" class="form-control input-md">
                            
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
                        <button id="button2id" name="button2id" class="btn btn-success"><a href="vendas.php">Vender</a></button>
                    </div>
                </div>

            </fieldset>


            <!-- <input type="submit"> -->
        </form>
    </center>


    <!-- JS from bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>