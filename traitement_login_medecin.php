<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rendezvous";

$conn = new mysqli($servername, $username, $password, $dbname);


$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];




$sql = "SELECT * FROM medecins WHERE email = '$email' AND MotDePasse = '$mot_de_passe'";
$result = $conn->query($sql);

//if ($result->num_rows > 0) {
//
//
//
//    echo '<script>alert("authentifcation succedded   avec l \'email $email");</script>';
//
//    header("Location: rendezvous_medecin.php");
//    exit();
//
//
//} else {
//    echo '<script>alert("Erreur: Email ou mot de passe incorrect.");</script>';
//    echo '<script>setTimeout(function(){ window.location.href = "loginmedecin.html"; }, 1000);</script>';
//}



session_start();


if ($result->num_rows > 0) {
    $escapedEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $_SESSION['message'] = "Authentication succeeded for doctor  " . $escapedEmail;

    header("Location: rendezvous_medecin.php");
    exit();
} else {
    $_SESSION['message'] = " Please try again";

    header("Location: logindoctor.php");
    exit();
}




$conn->close();
?>
