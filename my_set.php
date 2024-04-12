<html>
<head>

    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet">
    <link rel="stylesheet" href="header.css">

</head>
<body>
<?php
     include_once ('home/header.php');

$pdo = new PDO(
    'mysql:host=localhost;dbname=e_commerce;charset=utf8',
    'root',
    ''
);




    $reqCat=$pdo->prepare("select * from categories");
    $reqCat->execute();
    $resultCat = $reqCat->fetchAll(PDO::FETCH_ASSOC);


     $action = 'crudProduct/Ajouter_les_produit.php';
     $image='';
     $nom='';
     $prix='';

     if (isset($_GET['id_Produit'])){
         $id = $_GET['id_Produit'];
         $action = "crudProduct/modifier_produit.php?id={$id}";
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

<div class="shadow p-3 mb-5 bg-body-tertiary rounded m-auto w-75 d-flex justify-content-center flex-column ">
    <div class="d-flex justify-content-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stars align-self-center text-warning" viewBox="0 0 16 16">
            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
        </svg>
        <h2 class="align-self-center m-3"> Ajouter le produit</h2>
    </div>
 <form method="post" action="<?php echo $action ?>"  enctype="multipart/form-data" class="d-flex flex-column align-items-center ">
        <div class="input-group mb-3 d-flex justify-content-center gap-2">
            <div>
                <input type="file" class="form-control " name="upload" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload" required >
            </div>
            <div style="width: 3rem;margin-top: -0.5rem ">
                <?php echo '<img src="data:imag/jpeg;base64,' . base64_encode($image) . '"  class="card-img-top" alt=".eror.." style="cursor: pointer" ' ?>
            </div>

        </div>


        <div  class="d-flex flex-column align-items-center w-100 p-0 m-0  ">
            <label for="nom_produit" class=""></label>
            <input type="text" class="form-control w-25"  id="nom_produit" name="nom_produit" aria-describedby="Nom_produit-help" placeholder="Nom de produit" required minlength="5" value="<?php echo $nom ?>">
        </div>
        <div class="d-flex flex-column align-items-center w-100 p-2 ">
            <label for="price_produit" class=""></label>
            <input type="number" class="form-control w-25" id="price_produit" name="prix_produit" aria-describedby="price_produit-help" placeholder="prix de produit" required min="0" value="<?php echo $prix ?>">

                <div class="d-flex flex-column align-items-center w-100 p-3" >
                    <select class="form-select  form-control w-25" name="idCat" id="floatingSelect" aria-label="Floating label select example" >
                        <?php
                        foreach ($resultCat as $cat){
                            ?>
                            <option value="<?php echo $cat['id_categorie']?>"><?php echo $cat['N_categorie']?></option>
                            <option value="<?php echo $cat['id_Produit']?>"><?php echo $cat['nom']?></option>

                            <?php
                        }
                        ?>
                    </select>
                </div>

        </div>



        <label for="Ajouter_les_produit" class="p-2 "></label>
        <button type="submit" class=" w-50 btn-warning" id="Ajouter_les_produit" name="Ajouter_les_produit" aria-describedby="Ajouter_les_produit" > Ajouter les produits </button>
        <?php
          if (isset($_GET['id'])){
        ?>
        <input name="id" value="<?php echo$_GET['id']  ?>" hidden>

        <?php
              }
        ?>
</form>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
