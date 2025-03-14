<?php
  require_once('../config.php');
?>

<?php
  require_once('partial/header.php');
?>


<main>

<p>Achat du super livre de recettes</p>


<!-- je créé un formulaire avec en action le fichier payment-confirmation.php 
 (donc au submit l'utilisateur sera envoyé sur cette page) 
 et en method post : donc les données du formulaire ne seront pas envoyées dans l'url
 comme avec le get, mais elles seront envoyées
 -->
<form method="post" action="payment-confirmation.php">

	<div>
	<label>CB Number
		<input type="text" name="number">
	</label>
	</div>

	<div>
	<label>CCV
		<input type="text" name="ccv">
	</label>
	</div>

	<input type="submit">

</form>

</main>

</body>
</html>