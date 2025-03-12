<?php
  require_once('../config.php');
  require_once('../recipes-repository.php');
?>

<?php
  require_once('partial/header.php');
?>

	<main>

	<h2>Les recettes de la piscine</h2>

	<?php foreach($recipes as $recipe) { ?>


		<?php if ($recipe["isPublished"] === true) { ?>

			<article>
				<h2><?php echo $recipe["title"]; ?></h2>
				<img src="<?php echo $recipe['image']; ?>" alt="<?php echo $recipe['title']; ?>" />
				<p><?php echo $recipe["description"]; ?></p>
        <p>Publié le : <?php echo $recipe["publishedDate"]->format('Y-m-d H:i:s'); ?></p>


        <a href="show-recipe.php">Voir la recette</a>
			</article>

		<?php } ?>

	<?php } ?>


	</main>

  </body>
</html>