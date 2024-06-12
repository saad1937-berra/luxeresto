<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
</head>

<body>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Se connecter</h2>
                    <p></p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <form class="text-center" action= "index.php" method="post">
                                <div class="mb-3"><input class="border rounded-pill border-2 border-dark form-control" type="email" name="email1" placeholder="Saisir votre e-mail" autofocus="" required=""></div>
                                <div class="mb-3"><input class="border rounded-pill border-2 border-dark form-control" type="password" name="password1" placeholder="Saisir votre mot de passe" autofocus="" required=""></div>
                                <div class="mb-3"><button class="btn btn-dark d-block w-100" type="submit" name=valider>Login</button></div>
                                <p class="text-muted">Vous n'avez de compte ?<a href="registration.php">Inscrivez-vous</a></p>
                                <?php

$user = "Saad Berra";
$psw = "saad2002B";
$conn="mysql:host=localhost; dbname=Clients;";
$db = new PDO($conn,$user,$psw);


if(isset($_POST['valider'])){

$L1 = $_POST['email1'];
$L2 = $_POST['password1'];


$req = " SELECT * FROM utilisateurs  WHERE  Email = '$L1' &&  passe = '$L2' ";
$resultat = $db->query($req);

if($resultat->rowcount()>0){
header("location:menu.php");
}else{
echo "<div class='text-danger h6'>Nom d'utilisateur ou Mot de passe incorrect</div>";
  
}
}
?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>