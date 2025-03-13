<?php
  require_once('../config.php');
  require_once('../recipes-repository.php');
?>

<?php
  require_once('partial/header.php');

  $emailSent = $_GET["email"];
  $messageSent = $_GET["message"];
?>


<main>

  <h1>Merci <?php echo $emailSent; ?> !</h1>
  
  <p>Votre message : </p>
  <p>"<?php echo $messageSent; ?> "</p>
  <p>a bien été envoyé à un administrateur.</p>

</main>

</body>
</html>