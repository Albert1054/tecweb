<?php

$tabela = $_POST;

unset($tabela["children"], $tabela["nome"], $tabela["idade"]);

$number= count($tabela)-(count($tabela) /2);
 $k=0;   
 $i=0;


?>
<DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="Viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie-edge"/>
        <title>Tabela</title>
        <link rel="stylesheet" href="assets/estilo/style.css"/>
        <link href="formulario.html"/>
    </head>
    <body>
        
        <div class="table-center">
            <table>
                <thead>
                    <tr>
                        <td class="row">Nome</td>
                        <td class="idade">Idade</td>
                        <td class="row">Filhos</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="row"><?php echo $_POST["nome"]?></td>
                        <td class="idade"><?php echo $_POST["idade"] ?></td>
                            <?php
                            while($k<$number){
                                if(count($tabela)!= 0){
                                    if(isset($tabela["name-$k"])){
                                    echo "<td>".$tabela["name-$k"]." - ".$tabela["idade-$k"]." anos";
                                    break;
                                    }
                                }else{
                                    echo "Não possui filhos";
                                }
                                $k++;
                            } $i=$k+1;
                        ?>
                    </tr>
                    <?php while($i<=$number){
                            if(isset($tabela["name-$i"])){
                                echo "<tr>";
                                echo "<td class='row'>&nbsp;</td>";
                                echo "<td class='idade'>&nbsp;</td>";
                                echo "<td class='row'>".$tabela["name-$i"]." - ".$tabela["idade-$i"]." anos";
                                echo "</tr>";
                            }
                            $i++;
                        } 
                    ?>
                </tbody>
            </table>
        </div>     
    </body>
</html>