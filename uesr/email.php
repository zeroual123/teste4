<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=e_commerce;charset=utf8',
    'root',
    ''
);


if (isset($_POST['login'])){
    $login = $_POST['login'];
    $psw = $_POST['password'];
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $sql = $pdo->prepare("  insert into  uesrs( login, password,Nom,Prenom) values (?,?,?,?)");
        $sql->execute(array($login,$psw,$Nom,$Prenom));

}
header('location:../home/home.php');

?>