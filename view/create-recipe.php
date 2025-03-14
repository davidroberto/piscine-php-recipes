<?php
  require_once('../config.php');
?>

<?php
  require_once('partial/header.php');
?>

<?php

	if (isset($_POST["title"]) &&
		isset($_POST["description"]) &&
		isset($_POST["image"]) &&
		strlen($_POST["title"]) > 3 &&
		strlen($_POST["description"]) > 10 &&
		strlen($_POST["image"]) > 5
	) {
		$message = "Recette créée";
	} else {
		$message = "Veuillez créer une recette en renseignant tous les champs";
	}

?>

<main>

<h1>Nouvelle recette</h1>

<h2><?php echo $message; ?></h2>


<form method="POST" action="create-recipe.php">

	<div>
		<label>
			Titre
			<input type="text" name="title" />
		</label>
	</div>

	<div>
		<label>
			Description
			<input type="text" name="description" />
		</label>
	</div>

	<div>
		<label>
			Image
			<input type="text" name="image" />
		</label>
	</div>

	<button type="submit">Créer</button>


</form>

</main>

</body>
</html>