<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=e_commerce;charset=utf8',
    'root',
    ''
);

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $pnr = $pdo->prepare("delete from  produit_panier where id_produit= ? and id_panier=?");
    $pnr->execute(array($id,1));

}
header('location:../home/home.php');

?>