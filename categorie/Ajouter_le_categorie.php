<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=e_commerce;charset=utf8',
    'root',
    ''
);


    $Nom_categorie = $_POST['Nom_categorie'];
    $Description = $_POST['Description'];
        $sql = $pdo->prepare('insert into categories(N_categorie ,description) values (?,?)');
        $sql->execute(array($Nom_categorie,$Description));

header('location:../home/home.php');
?>
