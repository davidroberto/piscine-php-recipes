<?php
  require_once('../config.php');
  require_once('../recipes-repository.php');

  // je récupère l'info de l'index de la recette cliquée
  // grâce à la variable $_GET de PHP.
  // cette variable est fournie par PHP et nous permet de récupérer des infos dans l'url
  $index = $_GET["index"];
?>

<?php
  require_once('partial/header.php');
?>

	<main >

		<h2 class="main-title">Détails de la recette</h2>
			<!-- je récupère dans la liste des recettes, uniquement la recette
			 qui correspond à l'index de la recette cliquée
			  -->
			<h2><?php echo $recipes[$index]["title"]; ?></h2>
			<img class="recipe-show-image" src="<?php echo $recipes[$index]['image']; ?>" alt="<?php echo $recipe['title']; ?>" />
			<p><?php echo $recipes[$index]["description"]; ?></p>
			<p>Publié le : <?php echo $recipes[$index]["publishedDate"]->format('Y-m-d H:i:s'); ?></p>
		</article>

	</main>

  </body>
</html>