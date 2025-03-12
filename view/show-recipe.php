<?php
  require_once('../config.php');
  require_once('../recipes-repository.php');
?>

<?php
  require_once('partial/header.php');
?>

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