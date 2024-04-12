<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=e_commerce;charset=utf8',
    'root',
    ''
);
if (isset($_GET['id_produit'])) {
    $id = $_GET['id_produit'];
    $req = $pdo->prepare("insert  into produit_panier(id_produit, id_panier) VALUES (?,?)");
    $req->execute(array($id,1));

}

header('location:../home/home.php');
