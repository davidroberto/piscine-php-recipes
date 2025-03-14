<?php
  require_once('../config.php');
  require_once('../model/recipes-repository.php');
?>

<?php
  require_once('partial/header.php');
?>

	<main>

	<h2 class="main-title">Les recettes de la piscine</h2>


	<section class="recipes-container">

		<!-- je fais une boucle en récupérant l'élément de la boucle (recipe) et l'index de la boucle pour chaque tour -->
		<?php foreach($recipes as $index => $recipe) { ?>

			<?php if ($recipe["isPublished"] === true) { ?>

				<article class="recipe">
					<h2 class="recipe-title"><?php echo $recipe["title"]; ?></h2>
					<img  class="recipe-image" src="<?php echo $recipe['image']; ?>" alt="<?php echo $recipe['title']; ?>" />
					<p class="recipe-description" ><?php echo $recipe["description"]; ?></p>
					<p  class="recipe-date">Publié le : <?php echo $recipe["publishedDate"]->format('Y-m-d H:i:s'); ?></s>

					<!-- je créé un lien vers index.php en rajoutant dans l'url l'info de l'index de l'élément
					 	ce qui permet de savoir, sur la page show-recipe.php, l'index de la recette qui a été cliqué
						On appelle ça un parametre d'url
					 -->
					<a  class="recipe-show-link" href="show-recipe.php?index=<?php echo $index; ?>">Voir la recette</a>
				</article>

			<?php } ?>

		<?php } ?>

	</section>


	</main>

  </body>
</html>