<?php
include_once ('dbConnection.php');

var_dump($_POST);
$file = $_FILES['upload'];
$id =$_POST['id_produit'];
$nom  = $_POST['N_produit'];
$prix = $_POST['prix_produit'];

$req=$pdo->prepare("insert into produit(N_produit, prix_produit, id_categorie, image) values (?,?,?,?)");
$fileContent = file_get_contents($file['tmp_name']);
$req->execute(array($nom,$prix,$id,$fileContent));

if (!empty($id) && !empty($nom) && !empty($prix)){


}
header('location:../home/home.php?id=$id');
