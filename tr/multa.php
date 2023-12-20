<?php
    include("conexao.php");

    //Desenvolvimento do CRUD
    if(isset($_POST['nome_via'],$_POST['v_permitida'],$_POST['v_ultrapassada'],$_POST['dia']) && ($_POST['nome_via'] != '') && ($_POST['v_permitida'] != '') && ($_POST['v_ultrapassada'] != '') && ($_POST['dia'] != '')){
        $vianome = $_POST['nome_via'];
        $vp = $_POST['v_permitida'];
        $vu = $_POST['v_ultrapassada'];
        $dia = $_POST['dia'];
    }else{
        echo 'error';
    }

    try{
        $query = $dbh->prepare("INSERT INTO cd_multa (nome_via, v_permitida, v_ultrapassada, dia) VALUES (:nome_via, :v_permitida, :v_ultrapassada, :dia);");
        $query->execute(array(
            ":nome_via" => $vianome,
            ":v_permitida" => $vp,
            ":v_ultrapassada" => $vu,
            ":dia" => $dia
        ));

        header('Location: MultsSystems.php');
    }catch(PDOException $e){
        echo $e;
    }
?>