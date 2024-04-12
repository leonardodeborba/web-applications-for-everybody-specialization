<?php

// Model-View-Controller (MVC)
// Model - handles data / the brains 
// View - produces output / the looks
// Controller - orchestration / routing


// Model
$oldguess = '';
$message = false;

if (isset($_POST['guess'])) {
  // Trick for integer / numeric parameters
  $oldguess = $_POST['guess'] + 0;
  if ($oldguess == 42) {
    $message = "You got it!";
  }
  else if ($oldguess < 42) {
    $message = "Too low";
  }
  else {
    $message = "Too high...";
  }
}

?>

<!DOCTYPE html>
<!-- View -->
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC - Guessing Game</title>
  </head>
  <body>
    <p>Guessing Game</p>
    <?php
      if ($message !== false) {
        echo "<p>$message</p>";
      }
    ?>
  <form action="" method="post">
    <p>
      <label for="guess">Input Guess</label>
      <input type="text" name="guess" id="guess" size="40" value="<?= htmlentities($oldguess) ?>" />
    </p>
    <input type="submit" />
  </form>
  </body>
</html>