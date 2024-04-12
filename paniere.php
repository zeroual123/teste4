<html>
<head>

</head>
<body>
 <form method="post" action="../panier/card_panier.php">
<h5 class="card-title"><?php echo $res['N_produit'] ?> </h5>
<h6 class="prix "><?php echo $res['prix_produit'] ?></h6>
<a href="../panier/card_panier.php?idProduit=<?php echo $res['id_produit'] ?>">
    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($res['image']).'"  class="card-img-top w-75" alt=".eror.." style="cursor: pointer" />' ?>
</a>
<input type="hidden" name="id" value="<?php echo $res?>">
</form>

</body>
</html>
