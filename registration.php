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
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5">
                        <div class="card-body p-sm-5">
                            <h2 class="text-center mb-4">Créer un compte</h2>
                            <form action= "registration.php" method=post>
                                <div class="mb-3"><input class="border rounded-pill border-2 border-dark form-control" type="text" id="name-2" name="nom1" placeholder="Saisir votre nom" autofocus="" required=""></div>
                                <div class="mb-3"><input class="border rounded-pill border-2 border-dark form-control" type="email" id="email-2" name="email1" placeholder="Saisir votre e-mail" autofocus="" required=""></div><input class="border rounded-pill border-2 border-dark form-control" type="password" name="passe1" placeholder="Saisir votre mot de passe" required="">
                                <div class="mb-3"></div>
                                <div><button class="btn btn-primary d-block w-100" type="submit" name=ok>Valider</button></div>
                                <?php
$user = "Saad Berra";
$psw = "saad2002B";
$conn="mysql:host=localhost; dbname=clients;";
$db = new PDO($conn,$user,$psw);
if(isset($_POST['ok'])){
$C1 = $_POST['nom1'];
$C2 = $_POST['email1'];
$C3 = $_POST['passe1'];
$req = " SELECT * FROM utilisateurs  WHERE Nom = '$C1' &&  Email = '$C2' &&  passe = '$C3' ";
$resultat = $db->query($req);
if($resultat->rowcount()>0){
echo "<div class='text-danger h5'>utilisateur existe déjà!</div>";
}else{
$ajout=$db->prepare("INSERT INTO utilisateurs values('$C1','$C2','$C3')");
$ajout->execute();
header('location:index.php');
}
}
 ?>

                            </form><label class="form-label">Vous avez déjà un compte?&nbsp;</label><a href="index.php">Connexion</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>