
<?php


$pdo = new PDO(
    'mysql:host=localhost;dbname=e_commerce;charset=utf8',
    'root',
    ''
);

if (isset($_GET['id'])){
    $id =$_GET['id'];
    $req = $pdo->prepare("DELETE FROM produit WHERE id_produit = {$id}");
    $req->execute();
    header('location:../home/home.php');
}

?>

