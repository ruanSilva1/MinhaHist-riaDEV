<?php
    include("conexao.php");
    $cmt = $_GET["id_multa"];

    try{
        $query = $dbh->prepare("DELETE FROM cd_multa WHERE id_multa = :id_multa;");
        $query->execute(array(
            ":id_multa" => $cmt
        ));

        echo "Dados Excluidos";
    }catch(PDOException $e){
        echo $e;
    }
?>