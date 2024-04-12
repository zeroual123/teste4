
<html>
<head>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<?php include_once ('test2.php')?>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary m-3 shadow"style="display:contents ">
    <div class="container">

        <a class="navbar-brand text-dark" href="test.php">Accueil</a>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right align-self-center text-danger" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link active text-dark" aria-current="page" href="./footer/A_propos.php">A propos</a>
                </li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right align-self-center text-danger " viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                    <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>



            </ul>
        </div>
    </div>

</nav>


<div class="col-10  border-2 p-2 shadow p-3 mb-5 bg-body-tertiary rounded m-2  ">
    <div class="d-flex justify-content-end">
        <a class="btn flex-row align-items-baseline" href="#"><button class="btn  btn-outline-danger p-1 m-0"> supprime</button></a>
        <a class="btn flex-row align-items-baseline"  href="#"><button class="btn small btn-outline-danger p-1 m-0" name="id"> modifier</button></a>
    </div>
    <div class="d-flex flex-row gap-3 " style="width: 77rem">
        <a  style="width: 300px">
            <img src="image%20ali/download.jpg">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image%20ali/images.jpg" class="d-block w-25" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image%20ali/download.jpg" class="d-block w-25" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image%20al/download.jpg" class="d-block w-25" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </a>

        <div class="card-body d-flex flex-column  " style="display: contents">
            <a href="#" class="text-dark "style="width: 9rem"  > Boutique Officielle</a>
            <br>
            <p class="card-text ">liquides dégraissants pour la vaisselle, les détartrants et produits d'entretien, eau de javel, lessives, </p>

            <h5 class="card-title"> </h5>
            <p>Disponible</p>
            <br>
            <h6 class="prix"> 100DH</h6>
            <br>
            <div class="bg-danger w-25">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="27" fill="currentColor" class="bi bi-cart3 text-dark bg-danger " viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <a href="test8.php" class=""> <button type="submit" class="bg-danger border-0 w-50"> J'achéte</button></a>
            </div>


        </div>
    </div>

</div>
<div class="col-4 border-2"></div>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php include_once ('teste1.php')?>

</html>






