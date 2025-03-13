<?php
  require_once('../config.php');
  
  $number = $_POST["number"];
  $ccv = $_POST["ccv"];

  if ($number === "123" && $ccv === "321") {
	  $message = "Achat confirmé";
  } else {
	  $message = "Carte refusée. Faut faire de la maille";
  }
?>

<?php
  require_once('partial/header.php');
?>


<main>

<p><?php echo $message; ?></p>



</main>

</body>
</html>