<?php
  require_once('config.php');
  require_once('recipes-repository.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recette affichage</title>

  </head>
  <body>

  <header>
	<nav>
		<ul>
			<li><a href="index.php">Toutes les recettes</a></li>
		</ul>
	</nav>
  </header>

	<main>

	<h2>Détails de la recette</h2>

		<article>
			<h2><?php echo $recipes[0]["title"]; ?></h2>
			<img src="<?php echo $recipes[0]['image']; ?>" alt="<?php echo $recipe['title']; ?>" />
			<p><?php echo $recipes[0]["description"]; ?></p>
			<p>Publié le : <?php echo $recipes[0]["publishedDate"]->format('Y-m-d H:i:s'); ?></p>
		</article>

	</main>

  </body>
</html>