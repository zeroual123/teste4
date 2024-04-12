<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=e_commerce;charset=utf8',
    'root',
    ''
);

$file = $_FILES['upload'];
$nom = $_POST['nom_produit'];
$prix = $_POST['prix_produit'];
$id = $_POST['id_Produit'];


    $req=$pdo->prepare("insert into produit(N_produit, prix_produit, id_categorie, imag) values (?,?,?,?)");
    $fileContent = file_get_contents($file['tmp_name']);
    $req->execute(array($nom,$prix,$id,$fileContent));

header('location:../home/home.php');
