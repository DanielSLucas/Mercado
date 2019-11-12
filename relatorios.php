<?php

    include 'conexao.php';
    include "./componentes/head.php";
    echo "<link rel='stylesheet' href='./componentes/estilo.css'>";

    include "./componentes/nav.php";

?>

<div class="container">

    <form action="mostraVendas.php?tab=4" method="POST">
        <div class="row">
            <div class="col-5 text">
                Informe a data da venda que deseja:
            </div>

            <div class="col-6">
                <input type="date" name="dataVenda" class="form-control">
            </div>
            
            <div class="col-1">
                <button type="submit" class="btn lupa"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>

</div>

<br/>
<hr/>

<?php

    include 'conexao.php';
    include "./componentes/head.php";
    echo "<link rel='stylesheet' href='./componentes/estilo.css'>";


    $sql        = "select * from tb_vendas";
    $tbVenda    = mysqli_query($link, $sql);

    echo "<div class='container relat'>";

        if (isset($tbVenda)){
            while ($linha = mysqli_fetch_array($tbVenda)) {
                echo "<div class='row'>";
                    echo "<div class='col-2'>";
                    
                        echo "<table class='table table-dark'>";
            
                            echo "<thead>";
                                echo "<td>ID:</td>";
                                echo "<td>Valor Total:</td>";
                            echo "</thead>";
            
                            
                                echo "<tr>";
                                    echo "<td>".$linha[0]."</td>";
                                    echo "<td>".$linha[1]."</td>";
                                echo "</tr>";    
                            
            
                        echo "</table>";

                    echo "</div>";
                
                    echo "<div class='col'>";
                        $sql2       = "select * from tb_itens_vendidos where fk_venda=$linha[0]";
                        $tbVendidos = mysqli_query($link, $sql2);
                        
                        echo "<table class='table table-dark'>";

                            echo "<thead>";
                                echo "<td>Produto:</td>";
                                echo "<td>Valor:</td>";
                            echo "</thead>";


                            while ($vendido = mysqli_fetch_array($tbVendidos)) {
                                $sql3       = "select * from tb_produtos where id_produto=$vendido[3]";
                                $tbProdutos = mysqli_query($link, $sql3);
                                $produto = mysqli_fetch_array($tbProdutos);

                                echo "<tr>";
                                    echo "<td>".$produto[1]."</td>";
                                    echo "<td>".$produto[2]."</td>";
                                echo "</tr>";
                            }

                        echo "</table>";
                    
                    echo "</div>";

                echo "</div>";
            }
        } else {
            echo "<h1>Não há vendas nesta data</h1>";
        }     
            
        
    echo "</div>";

    


?>