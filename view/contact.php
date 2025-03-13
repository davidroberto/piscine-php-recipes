<?php
  require_once('../config.php');
  require_once('../recipes-repository.php');
?>

<?php
  require_once('partial/header.php');
?>


<main>

  <h1>Contactez nous !</h1>


  <form method="get" action="contact-confirmation.php">

    <div>
      <label>Email
        <input type="text" name="email">
      </label>
    </div>

    <div>
      <label>Message
        <input type="text" name="message">
      </label>
    </div>

    <input type="submit">

  </form>

</main>

</body>
</html>