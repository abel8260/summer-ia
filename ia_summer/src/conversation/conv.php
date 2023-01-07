<?php
session_start(); 
include('../con/conexao.php');
$nom_e = htmlspecialchars($_GET['nom_e']);
$con_teudoo = htmlspecialchars($_GET['con_teudoo']);
$t_g = htmlspecialchars($_GET['t_g']);
$sql=$pdo->prepare("INSERT INTO conv (id, nome, conteudo,  tag) VALUES ( NULL,?, ?, ?)");


$sql->bindParam(1, $nom_e, PDO::PARAM_STR);
$sql->bindParam(2, $con_teudoo, PDO::PARAM_STR);
$sql->bindParam(3, $t_g, PDO::PARAM_STR);
$sql->execute();

echo $sql ->rowCount();
  var_dump($sql); 
$row = $sql ->rowCount();


$str = $con_teudoo ;

$num = strlen($str); 


$y = 2;
$r = fmod($num, $y);


if($r == 0){
$sth0=$pdo->prepare("INSERT INTO conv (id, nome, conteudo, tag) VALUES (NULL,?, ?, ?)");

$str0 = 'SUmmer:R';
$str2 = 'Sim, Doutor';
$str3 = 'resposta';
$sth0->bindParam(1,  $str0, PDO::PARAM_STR);
$sth0->bindParam(2,  $str2, PDO::PARAM_STR);
$sth0->bindParam(3,  $str3, PDO::PARAM_STR);
echo $sth0 ->rowCount();

$row0 = $sth0 ->rowCount();

  echo $sth0 ->rowCount();
  var_dump($sth0);
$sth0->execute();
};

if($r == 1 ){
$sth9=$pdo->prepare("INSERT INTO conv (id, nome, conteudo, tag) VALUES (NULL,?, ?, ?)");
$str0 ='SUmmer:R';
$str2 = 'Nao, Doutor';
$str3 = 'resposta';
$sth9->bindParam(1,  $str0, PDO::PARAM_STR);
$sth9->bindParam(2,  $str2, PDO::PARAM_STR);
$sth9->bindParam(3,  $str3, PDO::PARAM_STR);
$sth9->execute();
echo $sth9 ->rowCount();

$row9 = $sth9 ->rowCount();

  echo $sth9 ->rowCount();
  var_dump($sth9);
};
echo "<hr/>";
echo $r;
header('location: index.php'); 
?>