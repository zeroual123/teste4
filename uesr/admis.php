<?php
session_start();
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
if (!isset($_SESSION['uesr'])){
    header('location:./Ajouter_produit_categorie.php');

}
?>
<h3> Bonjour :<?php  echo $_SESSION['uesr']['password']?></h3>


</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
