<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=e_commerce;charset=utf8',
    'root',
    ''
);


if (isset($_POST['id'])){
    $id = $_POST['id'];
    $nom =$_POST['nom_produit'];
    $prix = $_POST['prix_produit'];
    $file = $_FILES['upload'];
    $image = file_get_contents($file['tmp_name']);
    $req = $pdo->prepare("UPDATE produit SET prix_produit=?,N_produit=?,imag=? WHERE id_produit=?");
    $req->execute([$nom,$prix,$image,$id]);
    header('location:../home/home.php');
}




