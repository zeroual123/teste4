<html>
<head>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="../header.css">
</head>
<body>

<div class="bg-light align-self-center">
    <form action="PHP_mail.php" method="post" class="d-flex justify-content-center h-75 m-4 p-5  ">
        <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-stars text-warning align-self-center   " viewBox="0 0 16 16">
                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
            </svg>
            <h1 class="align-self-center p-5 text-warning">Huiles Naturelles</h1>
        </div>
        <div  class="shadow-sm p-3 mb-5 bg-body-tertiary rounded w-50 p-3 flex-column ">

            <div class="mb-3 w-75">
                <h2 class="text-dark">réinitialisez votre mot de passe</h2>

                <h6 class="p-2">Si le compte existe, nous vous enverrons par e-mail des instructions pour réinitialiser le mot de passe.</h6>

                <label for="email" class="form-label" ></label>
                <input type="email" class="form-control" id="login" name="login"  aria-describedby="email" placeholder="Email" required>

                <label for="password" class="form-label" ></label>
                <input type="password" class="form-control" id="password" name="password"  aria-describedby="password" placeholder="password" required>
                <textarea name="message" ></textarea>
                <div class="d-flex justify-content-center ">
                <input type="submit" value="Réinitialiser le mot de passe" class="btn btn-warning m-3  w-75">
            </div>


</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
