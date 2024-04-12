
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

if (isset($_POST['login'])){
    $login = $_POST['login'];
    $psw = $_POST['password'];
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $sql = $pdo->prepare("  insert into  uesrs( login, password,Nom,Prenom) values (?,?,?,?)");
    $sql->execute(array($login,$psw,$Nom,$Prenom));

}




?>

<div class="bg-light align-self-center">
    <form action="" method="post" class="d-flex justify-content-center h-75 m-4 p-5  ">
        <div class="d-flex">
        </div>
        <div  class="shadow-sm p-3 mb-5 bg-body-tertiary rounded w-50  p-3 flex-column" style="height: 24rem">
            <h1> s'inscrire </h1>
            <hr>
            <div class="w-75 d-flex flex-row gap-5">
                <div class="w-75">
            <label for="Nom" class="form-label" ></label>
            <input type="text" class="form-control" id="Nom" name="Nom"  aria-describedby="Nom" value="" placeholder="Nom" >
            </div>
               <div class="w-75">
                <label for="Prenom" class="form-label" ></label>
                <input type="text" class="form-control" id="Prenom" name="Prenom"  aria-describedby="Prenom" value="" placeholder="Prénom" required>
            </div>
        </div>

            <div class="mb-3 w-75">
                <label for="email" class="form-label" ></label>
                <input type="email" class="form-control" id="login" name="login"  aria-describedby="email" value="" placeholder="Email" required>

                <div class="form-text">Saisissez votre address e-mail  pour vous connecter ou créer un compte  .</div>
            </div>



            <div class="mb-3 w-75">
                <label for="password" class="form-label"> </label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" >
            </div>

            <div class="d-flex justify-content-center flex-column w-75 ">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-warning w-75  ">S'inscrire</button>

                </div>
                <div class="d-flex justify-content-center ">
                </div>
            </div>
        </div>
    </form>
</div>
</body>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
