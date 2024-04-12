<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=e_commerce;charset=utf8',
    'root',
    ''
);


$req=$pdo->prepare("select * from produit");
$req->execute();
$result = $req->fetchAll(PDO::FETCH_ASSOC);


?>

<link rel="stylesheet" href="body.css">
<html>
<body>

 <div class="container-fluid d-flex bg-danger ">

     <div class="navbar1 col-3 d-flex flex-md-row gap-2 " >
         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bag-heart-fill text-warning m-1" viewBox="0 0 16 16">
             <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5ZM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1Zm0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
         </svg>
         <h5> Ventes Flash</h5>
     </div>
     <div class="navbar1 col-6 d-flex" style="justify-content: center">
        <h1 id="current-time" style="color: black;font-size: 20px">02:00:00</h1>
         <script >
             let time = document.getElementById("current-time");
             let d = 7200000;
             setInterval(() =>{
                 do{
                     let hours = Math.floor((d % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                     let minutes = Math.floor((d % (1000 * 60 * 60)) / (1000 * 60));
                     let seconds = Math.floor((d % (1000 * 60)) / 1000);
                     time.innerHTML= `Termine dans : 0${hours}h:${minutes}min:${seconds}s`;
                  //   time.innerHTML= "Termine dans : "+hours+"h:"+minutes+"min:"+seconds+"s";
                     d=d-1000;
                     break;
                 } while(d>0)
             },1000)
         </script>
     </div>

     <div class="col-3 d-flex justify-content-end container-fluid">
         <a class="text-dark" href="#" id="button "> Voir Plus</a>
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right m-2 text-warning" viewBox="0 0 16 16">
             <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
             <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
         </svg>
     </div>

 </div>
 <div class="p-2 d-flex">
    <?php
        foreach ($result as $res){
    ?>
     <div class="card shadow p-1 mb-3 bg-body-tertiary rounded position-relative  " style="width: 13rem">
         <p class="position-absolute top-0 end-0 border-dark bg-warning rounded-circle p-1 m-1">50%</p>
         <a href="../Acheter_le_produit.php?idProduit=<?php echo $res['id_produit'] ?>">
             <?php echo '<img src="data:imag/jpeg;base64,'.base64_encode($res['imag']).'"  class="card-img-top w-75" alt=".eror.." style="cursor: pointer" />' ?>
         </a>
         <div class="card-body" style="display: contents">
             <h5 class="card-title"><?php echo $res['N_produit'] ?> </h5>
             <h6 class="prix "><?php echo $res['prix_produit'] ?></h6>
             <p class="card-text " style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;width: 12rem">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <div class="d-flex">
                     <a href="../panier/Ajouter_les_paniers.php?id_produit= <?php echo $res['id_produit'] ?>"><button  class="btn btn-warning w-100" type="submit" value="">AJOUTER AU PANIER</button></a>

             </div>
         </div>

     </div>

     <?php
            }
     ?>

 </div>
</body>

</html>
