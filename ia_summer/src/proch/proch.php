<?php
session_start(); 
include('../con/conexao.php');
$pro_str = htmlspecialchars($_GET['pro_str']);
$tech = htmlspecialchars($_GET['tech']);
$custo = $_GET['custo'];
$folder_pro = htmlspecialchars($_GET['folder_pro']);
$log_pro = htmlspecialchars($_GET['log_pro']);


$sql8=$pdo->prepare("INSERT INTO pills(id, pro_str, tech, custo, folder_pro, log_pro) VALUES ( NULL,?, ?, ?,?,?)");


$sql8->bindParam(1, $pro_str, PDO::PARAM_STR);
$sql8->bindParam(2, $tech, PDO::PARAM_STR);
$sql8->bindParam(3, $custo, PDO::PARAM_INT);
$sql8->bindParam(4, $folder_pro, PDO::PARAM_STR);
$sql8->bindParam(5, $log_pro, PDO::PARAM_STR);
$sql8->execute();

echo $sql8 ->rowCount();
  var_dump($sql8); 
$row8 = $sql8 ->rowCount();


echo "<hr/>";
echo $row8;
header('location: index.php'); 
?>