<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=produits;charset=utf8',
    'root',
    ''
);

//$req=$pdo->prepare("select (produit.image) from  produit");
//$req->execute();
//$req->setFetchMode(PDO::FETCH_ASSOC);
//$res = $req->fetchAll();

//echo '<img src="data:image/jpeg;base64,'.base64_encode($res[0]['image']).'"/>';


if (isset($_POST['upload'])){

    $req=$pdo->prepare("insert into produit(n_produit, prix_produit, id_categorie, image) values (?,?,?,?)");
      $fileContent = file_get_contents($_FILES['image']['tmp_name']);
    $req->execute(array('kora',120,null,$fileContent));
}
?>
<body>
<form name="fo" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="upload" value="charger">

</form>
</body>