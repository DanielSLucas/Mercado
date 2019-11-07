<?php  include "./componentes/head.php"; ?>

<link rel='stylesheet' href='./componentes/estilo.css'>

<form action="cadastro.php" method="POST">

<fieldset>

    <!-- Form Name -->
    <legend>Cadastro produto:</legend>
            

    <div class="form-group">

        <!-- NOME -->
        <label class="col-md-4 control-label" for="textinput"></label>  
        <div class="col-md-6">
            <input id="textinput" name="nomeProduto" type="text" placeholder="Digite seu nome" class="form-control input-md">
                
        </div>

        <!-- PREÇO -->
        <label class="col-md-4 control-label" for="textinput"></label>  
        <div class="col-md-6">
            <input id="textinput" name="preco" type="text" placeholder="Preço do produto" class="form-control input-md">          
        </div>

        <!-- VALIDADE -->
        <label class="col-md-4 control-label" for="textinput"></label>  
        <div class="col-md-6">
            <input id="textinput" name="validade" type="date" placeholder="Validade do produto" class="form-control input-md">          
        </div>

        <!-- QUANTIDADE EM ESTOQUE -->
        <label class="col-md-4 control-label" for="textinput"></label>              
        <div class="col-md-6">
            <input id="textinput" name="estoque" type="text" placeholder="Quantidade em estoque" class="form-control input-md">          
        </div>

        <!-- QUANTIDADE MÍNIMA EM ESTOQUE -->
        <label class="col-md-4 control-label" for="textinput"></label>              
        <div class="col-md-6">
            <input id="textinput" name="min" type="text" placeholder="Quantidade min em estoque" class="form-control input-md">          
        </div>

        <br/>

        <!-- BOTÃO CADASTRAR  -->
        <div class="col-md-8 float-right" >
            <button  type="submit" id="singlebutton" name="singlebutton" class="btn btn-default">Cadastrar</button>
        </div>

    </div>

</fieldset>


<!-- <input type="submit"> -->
</form>