<?php
  require_once('../config.php');
  require_once('../recipes-repository.php');
?>

<?php
  require_once('partial/header.php');
?>

	<main>

		<?php if (array_key_exists("index", $_GET)) {

			$index = $_GET["index"];

			if (array_key_exists($index, $recipes)) { ?>

				<h2 class="main-title">Détails de la recette</h2>

				<article>
					<!-- je récupère dans la liste des recettes, uniquement la recette
					qui correspond à l'index de la recette cliquée
					-->
					<h2><?php echo $recipes[$index]["title"]; ?></h2>
					<img class="recipe-show-image" src="<?php echo $recipes[$index]['image']; ?>" alt="<?php echo $recipe['title']; ?>" />
					<p><?php echo $recipes[$index]["description"]; ?></p>
					<p>Publié le : <?php echo $recipes[$index]["publishedDate"]->format('Y-m-d H:i:s'); ?></p>
				</article>

			<?php } else { ?>

				<h2>404 : recette non trouvée</h2>

			<?php } ?>

		<?php } else { ?>

			<h2>404 : recette non trouvée</h2>

		<?php } ?>		

	</main>

  </body>
</html>