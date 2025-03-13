<?php
  require_once('../config.php');
?>

<?php

  // si l'email ou le message ne peuvent pas être récupérés dans l'url
  // c'est que l'utilisateur n'est pas passé par le formulaire pour afficher 
  // cette page
  // donc on le redirige vers le formulaire avec la fonction header
  if (!array_key_exists("email", $_GET) || !array_key_exists("message", $_GET)) {
    header("Location: contact.php", true, 301);
    exit();
  }

  $emailSent = $_GET["email"];
  $messageSent = $_GET["message"];

  require_once('partial/header.php');

?>


<main>

  <h1>Merci <?php echo $emailSent; ?> !</h1>
  
  <p>Votre message : </p>
  <p>"<?php echo $messageSent; ?> "</p>
  <p>a bien été envoyé à un administrateur.</p>

</main>

</body>
</html>