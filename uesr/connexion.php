
<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=e_commerce;charset=utf8',
    'root',
    ''
);
?>

<html>

<head>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="../header.css">

</head>
<body>
<?php
if (isset($_POST['login'])){
    $login = $_POST['login'];
    $psw = $_POST['password'];

    if (!empty($login) and !empty($psw)){
        require_once "../dbConnection.php";
        $sql = $pdo->prepare('select * from uesrs where login=? and password=?');
        $sql->execute(array($login,$psw));
        if ($sql->rowcount()>=1){
          session_start();
          $_SESSION['uesrs']=$sql->fetch();
          header('location:admis.php');
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
                login , password sont  obligatoires
            </div>
            <?php
        }
    }else{
?>
        <div class="alert alert-danger" role="alert">
            login , password sont  obligatoires
        </div>
<?php
    }

    }
?>



<div class="bg-light align-self-center">

<form action="" method="post" class="d-flex justify-content-center h-75 m-4 p-5  ">
    <div class="d-flex">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-stars text-warning align-self-center   " viewBox="0 0 16 16">
        <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
    </svg>
    <h1 class="align-self-center p-5 text-warning"><a href="../home/home.php" class="text-warning"> Huiles Naturelles</a> </h1>
</div>

    <div  class="shadow-sm p-3 mb-5 bg-body-tertiary rounded w-50 p-3 flex-column ">

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
                <button type="submit" class="btn btn-warning w-75 " name="connexion">Se connecter</button>

            </div>
            <div class="d-flex justify-content-center ">
            <a class="flex-row align-items-baseline justify-content-center text-dark" href="mot_de_passe_oublie.php">Mot de passe oublié ?</a>
            </div>

            <div class="align-self-center gap-4 m-2 " >
                <a class="flex-row align-items-baseline justify-content-center text-dark" href="creer_nouveau_compt.php"> Créer nouveau compt </a>

            </div>

        </div>
    </div>

</form>

</div>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
