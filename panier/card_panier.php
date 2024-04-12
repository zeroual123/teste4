
<html>
<head>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="../header.css">
</head>
<body>

<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=e_commerce;charset=utf8',
    'root',
    ''
);
include_once('../home/header.php');


    $req=$pdo->prepare("  SELECT * FROM produit LEFT JOIN produit_panier ON  id_panier = 1");
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $produit){
        $nom = $produit['N_produit'];
        $prix = $produit['prix_produit'];
        $image=$produit['imag'];
    }


?>

<div class="col-10 p-5 ">
    <div class="shadow p-3 mb-5 bg-body-tertiary rounded m-auto w-75 d-flex justify-content-end flex-column ">
        <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stars align-self-center text-warning" viewBox="0 0 16 16">
                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
            </svg>
            <h2 class="align-self-center m-3">  panier</h2>

        </div>
<div class="d-flex">

        <nav class="navbar navbar-">
            <div class="container-fluid">
                <div class="navbar1  d-flex  " style="width: 6rem ;margin:-0.2rem ">
                    <?php echo '<img src="data:imag/jpeg;base64,' . base64_encode($image) . '"  class="card-img-top" alt=".eror.." style="cursor: pointer" ' ?>


            </div>

        </nav>

    <div class="col-10 ">
        <p class="card-text ">Some quick example .</p>
        <h6 class="nom  d-flex justify-content-end"><?php echo $produit['N_produit'] ?></h6>
        <h6 class="prix  d-flex justify-content-end"><?php echo $produit['prix_produit'] ?></h6>
    </div>
</div>



    <div class="d-flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash text-warning align-self-center" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
        </svg>
    <div class="">
        <a  onclick="return confirm('voulez vous vraiment vider le panier')" class="btn flex-row align-items-baseline" href="supprime_panier.php?id=<?php echo $produit['id_produit']?>"><button class="btn text-warning   p-1 m-0"> supprime</button></a>

    </div>
</div>

</body>

<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>





