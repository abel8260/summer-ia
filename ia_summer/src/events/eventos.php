<?php
session_start(); 
include('../con/conexao.php');
$btn = filter_input(INPUT_GET, 'namebtn', FILTER_SANITIZE_STRING);
 

    //Recebe os dados do form
    $date_str = filter_input(INPUT_GET, 'date_str', FILTER_SANITIZE_STRING);
    $prazo_ini = filter_input(INPUT_GET, 'prazo_ini', FILTER_SANITIZE_STRING);
    $prazo_fim = filter_input(INPUT_GET, 'prazo_fim', FILTER_SANITIZE_STRING);
    $tag_date = filter_input(INPUT_GET, 'tag_date', FILTER_SANITIZE_STRING);
    $log_date = filter_input(INPUT_GET, 'log_date', FILTER_SANITIZE_STRING);
    //Insere os dados no banco
    $get_data = "INSERT INTO datas(id, pro_str, prazo_ini, prazo_fim, tag_date, log_date) VALUES ( NULL,:date_str, :prazo_ini, :prazo_fim, :tag_date, :log_date)";
 
    $insert_data = $pdo->prepare($get_data);
    $insert_data->bindParam(':date_str', $date_str);
    $insert_data->bindParam(':prazo_ini', $prazo_ini);
    $insert_data->bindParam(':prazo_fim', $prazo_fim);
    $insert_data->bindParam(':tag_date', $tag_date);
    $insert_data->bindParam(':log_date', $log_date);


$insert_data->execute();

  var_dump($get_data); 

echo $prazo_fim;
header('location: index.php'); 
?>