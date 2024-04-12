
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>
<?php include_once ('test2.php')?>
<body>
<div class="row w-50 p-4">
    <div class="col ">
        <input type="text" class="form-control" placeholder="Nom"First name">
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="Prenom" aria-label="Last name">
    </div>
</div>
<div class="d-flex p-4">


<form class="row g-3 w-50">
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label ">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>


</form>
<div class="d-flex justify-content-center p-5 ">
    <div class="shadow p-3 mb-5 bg-body-tertiary rounded h-50">
        <h5>Résumé du panier</h5>
        <hr>
        <div class="d-flex gap-5">
            <p>sous-total </p>
            <P class="justify-content-end">200DH</P>
        </div>
        <a href="test7.php"><button type="submit " class="bg-danger border-0">CONFIRMER LA COMMANDE(200DH)</button></a>
    </div>
</div>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

