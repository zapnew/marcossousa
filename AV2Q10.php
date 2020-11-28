<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>AV2-Q10-MarcosSousa_202003261262</title>

    <style>
        #botao{ 
            text-align: center 
        }
        button {
            width: 350px;
            text-align: center;
            padding: 15px 20px;
            border: 1px solid #eee;
            border-radius: 6px;
            background-color: #FCC302;
            font-size: 18px;            font-style: inherit;
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            left: 430px;
            bottom:650px;
            width: 425px;

        }
        #titulo{
            background-color: darksalmon;
            height: 140px;
            width: 400px;
            margin: auto;
            padding: 10px 10px;
            text-align: center;
            box-shadow: 3px 5px 4px gray;
            border-radius: 10px 30px;
       
        }
        h2{
            color: white;
            text-shadow: 1px 1px 4px black;
        }
        h3{
            color: black;    
            }
        .dias{
            color: gray;
            text-align: center;
            font-size: 60px;
            position: absolute;
            left: 430px;
            bottom:430px;
            width: 425px;
        }
        .hoje{
            color: black;
            text-align: center;
            font-size: 40px;
            position: absolute;
            left: 430px;
            bottom:580px;
            width: 425px;
        }
        .rodape{
            color: black;
            font-size:20px;
            position: absolute;
            height: 40px;
            width: 300px;
            left: 450px;
            bottom:350px;
            width: 100%;
        }
    </style>
</head>
<body>

<form action="AV2Q10.php" method="post" target="_self">

    <div id="titulo">
        <h2>CALCULAR DIAS VIVIDOS</h2>
        <h3>DATA DE NASCIMENTO</h3>
          
        <input type="date" name=data id="idata">

    </div>
       <div id="botao">
        <button id="btnenviar" name="btnenviar" type="submit" value="CALCULAR">CALCULAR</button>
        </div>
       
</form>
<div>
    <?php
        date_default_timezone_set('America/fortaleza');

              $data_nascimento =  $_REQUEST['data'];
 
            $data_atual = date('d-m-Y');
        
            // Calcula a diferença em segundos entre as datas
            $diferenca = strtotime($data_atual) - strtotime($data_nascimento);

            //Calcula a diferença em dias
            
            if (empty($data_nascimento)){
                echo "<div class=\"msg\">Digite a Data de Nascimento</div>";
            }
            else{
            $dias = floor($diferenca / (60 * 60 * 24));
            $hoje = date('d/m/Y');
            $dtnasc = date("d/m/Y", strtotime($data_nascimento));
           
            echo "<div class=\"hoje\"> Hoje é $hoje</div>";
            echo "<div class=\"dias\"> Você já Viveu $dias dia(s)</div>";
        }
            
            
    ?>
    <div class="rodape">
    <p>Marcos Sousa Ferreira - Matr. 202003261262</p>
    </div>
</div>
</body>
</html>