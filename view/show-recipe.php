<?php
  require_once('../config.php');
  require_once('../recipes-repository.php');

  // je récupère l'info de l'index de la recette cliquée
  // grâce à la variable $_GET de PHP.
  // cette variable est fournie par PHP et nous permet de récupérer des infos dans l'url

  // $_GET est une variable super globales permettant de récupérer un parametre dans l'url.
  // le parametre dans l'url doit avoir une clé et une valeur et être précédé de "?" pour pouvoir être récupéré.

  // les parametres d'url sont une façon d'envoyer des données d'une page PHP à une autre
  $index = $_GET["index"];
  
?>

<?php
  require_once('partial/header.php');
?>

	<main>

		<?php if (!array_key_exists($index, $recipes)) { ?>

			<h2>404 : recette non trouvée</h2>
			<?php http_response_code(404); ?>

		<?php } else { ?>

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

		<?php } ?>

	</main>

  </body>
</html>