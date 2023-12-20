<?php
    include("conexao.php");
    $query = $dbh->prepare("SELECT * FROM cd_multa");
    $query->execute();
    $mt = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System._</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            width: 100%;
            background-color: orange;
        }
        .main{
            width: 100%;
            /*background-color: orangered;*/
            background-image: url("pexels-king-ho-18464638.jpg");
        }
        .title{
            width: 20%;
            height: 0vh;
            background-color: whitesmoke;
            border-radius: 20px 10px;
            margin: 10% 35%;
            padding: 30px 80px;
            transform: translate(0, -40px);
            box-shadow: 0 0 10px 5px gray;
        }
        .th_table{
            width: 60%;
            height: 8vh;
            background-color: whitesmoke;
            margin: -10% 20%;
            border-radius: 20px;
            box-shadow: 0 0 10px 5px gray;
        }
        .the{
            transform: translate(0, 20px);
            padding-left: 70px;
        }
        .td_table{
            width: 60%;
            height: 40vh;
            background-color: whitesmoke;
            border-radius: 20px;
            margin: 10.5% 20%;
            max-height: 40vh;
            max-width: 60%;
            overflow-y: scroll;
            box-shadow: 0 0 10px 5px gray;
        }
        .tde{
            width: 310px;
            transform: translate(60px, 20px);
            
        }
        .btn_cad{
            display: flex;
            width: 25%;
            position: relative;
            left: 37%;
            bottom: 90px;
            border-radius: 7px;
            border-color: whitesmoke;
            border-style: solid;
            padding: 10px 110px;
            font-size: 19px;
            filter: drop-shadow(0px 0px 10px gray);
        }
        .btn_cad:hover{
            background-color: transparent;
            border-color: gray;
            color: whitesmoke;
        }
        .tema{
            width: 70px;
            height: 4vh;
            background-color: whitesmoke;
            position: relative;
            left: 90%;
            margin-top: -55%;
            box-shadow: 3px 2px 2px 4px rgb(120, 120, 120);
            border-radius: 20px;
        }
    </style>
</head>
<body id="bd">
    <div class="main">
        <div>
            <img id="dkicon" style="transform: translate(715px, 115px);" src="luz-de-emergencia-ligada (3).png" alt="">
            <img id="lkicon" style="transform: translate(646px, 115px); z-index: 3; display: none;" src="luz-de-emergencia-ligada (1).png" alt="">
        </div>
        <div class="title">
            <h2 style="color: black;text-align: center;transform: translate(0, -10px);">
                RADAR DE MULTAS
            </h2>
        </div>
        <div class="th_table">
            <table>
                <tr>
                <th class="the" >Cód</th>
                    <th class="the" >Nome Via</th>
                    <th class="the">Velocidade Permitida</th>
                    <th class="the">Velocidade Ultrapassada</th>
                    <th class="the">Dia Ocorrido</th>
                    <th class="the">Excluir</th>
                </tr>
            </table>
        </div>
        <div class="td_table">
            <table>
                <tbody>
                <?php
                foreach($mt as $mt){
                    echo '<tr>';
                    echo '<td class="tde">'.$mt['id_multa'].'</td>';
                    echo '<td class="tde">'.$mt['nome_via'].'</td>';
                    echo '<td class="tde">'.$mt['v_permitida'].'</td>';
                    echo '<td class="tde">'.$mt['v_ultrapassada'].'</td>';
                    echo '<td class="tde">'.$mt['dia'].'</td>';
                    echo '<td><a href="delete.php?id_multa='.$mt['id_multa'].'">Excluir</a></td>';
                    echo '</tr>';
                    
                }
                ?>
                </tbody>
            </table>
            <div class="result"></div>
        </div>
        <div class="bt">
            <button class="btn_cad" id="multa_b" onclick="acess()">
                Cadastrar Multa
            </button>
        </div>
    </div>

    <script>
        function acess() {
            var mt = document.getElementById('multa_b')
            mt = document.location.href = "cad_multa.html"
        }
    </script>
</body>
</html>