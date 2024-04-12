<?php


$pdo = new PDO(
    'mysql:host=localhost;dbname=e_commerce;charset=utf8',
    'root',
    ''
);

$req=$pdo->prepare("  SELECT COUNT(*) FROM produit_panier WHERE id_panier = 1");
$req->execute();
$result = $req->fetchAll();
foreach ($result as $n){
    $n_produit = $n[0];
}

if (isset($_GET['id'])){
    $id = $_GET['id'];
$action = "../panier/Ajouter_les_paniers.php?id={$id}";
$isEditMode = true;
$req=$pdo->prepare("select * from produit where id_produit={$id} ");
$req->execute();
$result = $req->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $res){
$nom = $res['N_produit'];
$prix = $res['prix_produit'];
$image=$res['imag'];
}
}
?>

<link rel="stylesheet" href="home.php">
<link href="../liste.php">
<html>
<body>
    <div class="container-fluid d-flex justify-content-center align-content-lg-around  bg-light">
        <div class="navbar1 col-3 ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars text-warning " viewBox="0 0 16 16">
                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
            </svg>
            <a class="navbar-brand" href="#" style="color: black"> <i>vendez sur e-commerce</i> </a>

        </div>
        <div class="navbar9 col-6 d-flex justify-content-center m-1">


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars text-warning   " viewBox="0 0 16 16">
                    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
                </svg>
                <h6> <i>Huiles Naturelles</i> </h6>


        </div>
        <div class="navbar3 col-3 btn-g container-fluid align-self-center text-end">
            <div class="btn-group" >
                <button class="btn btn-warning btn-sm dropdown-toggle  " type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                    Languges
                </button>
                <ul class="dropdown-menu ">
                    <li> <a class="dropdown-item" href="#"> Français</a></li>
                    <li> <a class="dropdown-item" href="#"> Arabe</a></li>
                </ul>
            </div>
        </div>

    </div>

<nav class="navbar navbar-expand-sm bg-body-tertiary shadow-sm p-3 mb-1 bg-body-tertiary rounded">
    <div class="container-fluid ">
        <div class="navbar2 col-3 d-flex gap-4">
            <div class="align-self-center" >
                <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>

                <div class="offcanvas offcanvas-start " data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <html>
                        <head>
                            <link
                                    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
                                    rel="stylesheet">
                            <link rel="stylesheet" href="../header.css">

                        </head>
                        <body>
                        <?php
                        include_once '../dbConnection.php';
                        $categories = $pdo->query('select * from categories')->fetchAll(PDO::FETCH_OBJ);
                        ?>
                        <ul class="list-group">
                            <?php
                            foreach ($categories as $categorie){
                                ?>
                                <li class="list-group-item " aria-current="true">
                                    <a   class="btn btn-warning"  href="../liste/liste2_categorie.php?id_categorie=<?php echo $categorie->id_categorie?>" >
                                        <?php echo $categorie->N_categorie?>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        </body>
                        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                        </html>
                    </div>
                </div>
            </div>
            <div>
                 <a class="text-dark " href=""><h4>Huiles Naturelles</h4></a>
            </div>

        </div>
        <div class="navbar2 col-5 d-flex g-5">
            <form class="d-flex gap-3 " role="search">
                <div class="d-flex border gap-1 w-100" style="border-radius: 25px;padding: 4px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    <input class="form-control me-0 w-100 h-100 border-0  "  type="search" placeholder="hhh" aria-label="search" style="border-radius:25px"  >
                </div>
                <button class="btn btn-warning  btn-sm text-black " type="submit">Recherche</button>
            </form>
        </div>


        <div class="collapse navbar-collapse navbar2 col-3 d-flex" id="navbarNavDarkDropdown" >
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill text-warning" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
            </svg>
            <ul class="navbar-nav ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark"  id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SE CONNECTER
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="../uesr/connexion.php" >votre compte </a></li>
                        <li><a class="dropdown-item" href="#">vos commandes</a></li>
                        <li><a class="dropdown-item" href="#">votre liste d'envies</a></li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-upside-down-fill text-warning" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM7 9.5C7 8.672 6.552 8 6 8s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5zM4.285 6.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 4.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 3.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM10 8c-.552 0-1 .672-1 1.5s.448 1.5 1 1.5 1-.672 1-1.5S10.552 8 10 8z"/>
                </svg>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Aide
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">centre d'assistance</a></li>
                            <li><a class="dropdown-item" href="#">Passer une commande</a></li>
                            <li><a class="dropdown-item" href="#">suivre votre colis</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="27" fill="currentColor" class="bi bi-cart3 text-warning" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <a class="navbar-brand text-dark" href="../panier/card_panier.php" id="Ajouter_les_paniers" >panier <?php echo $n_produit ?> </a>
            <?php
            if (isset($_GET['id'])){
                ?>
                <input name="id" value="<?php echo$_GET['id']  ?>" hidden>

                <?php
            }
            ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon" ></span>
            </button>
        </div>


    </div>

</nav>

</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
