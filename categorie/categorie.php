<html>
<head>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet">
    <link rel="stylesheet" href="../header.css">
</head>
<body>

<?php
include_once ('../home/header.php');

$pdo = new PDO(
    'mysql:host=localhost;dbname=e_commerce;charset=utf8',
    'root',
    ''
);

$action = './Ajouter_le_categorie.php';
$Nom_categorie = '';
$description = '';

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $action = "./Ajouter_le_categorie.php?id={$id}";
    $isEditMode = true;
    $req=$pdo->prepare("select * from categories where id_categorie={$id} ");
    $req->execute();
    $result = $req->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $res){
        $Nom_categorie = $res['Nom_categorie'];
        $description = $res['Description'];

    }



}

?>


<form method="post" action="<?php echo $action?>" class="d-flex flex-column align-items-center shadow-sm p-3 m-auto  gap-2 bg-body-tertiary rounded w-75">
    <div class="d-flex justify-content-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stars align-self-center text-warning" viewBox="0 0 16 16">
            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
        </svg>
        <h2 class="align-self-center m-3"> Ajouter le produit</h2>
    </div>
    <label class="form-label"></label>
    <input type="text" class="form-control  w-25" name="Nom_categorie" value="<?php echo $Nom_categorie?>" placeholder="Nom categorie" >

    <label class="form-label"> </label>
    <textarea class="form-control w-25" name="Description" placeholder="Description"></textarea>

    <input type="submit" value="Ajouter categorie" class="btn btn-warning m-2 w-50" name="Ajouter">

</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>