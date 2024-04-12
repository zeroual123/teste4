<?php
include_once '../dbConnection.php';
$id_categorie = $_GET['id_categorie'];
$sql = $pdo->prepare('select * from categories where id_categorie = ?');
$sql->execute([$id_categorie]);
$categorie = $sql->fetch(PDO::FETCH_ASSOC);
?>
<?php

$sql = $pdo->prepare('select * from produit where id_categorie = ?');
$sql->execute([$id_categorie]);
$produits = $sql->fetchAll(PDO::FETCH_OBJ);
var_dump($categorie);
?>

<html>
<head>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="../header.css">

</head>
<body>
<div class="container py-2">
    <h1><?php echo $categorie['N_categorie']?></h1>
    <div class="container">
        <div class="row">
            <?php
            foreach ($produits as $produit){
                ?>
                <div class="card bg-dark text-white">
                    <img class="card-img" src="..." alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title"><?php echo $produit->N_produit?></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>

                <?php

            }
            ?>



        </div>

    </div>
</div>



</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

