<!DOCTYPE html>
  <html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data validation</title>
  </head>
  <body>
    <p>Take a guess between 1-5 through URL parameter</p>
    <p>
      <?php
        if (!isset($_GET['guess'])) {
          echo "Missing guess parameter";
        }
        else if (strlen($_GET['guess'] < 1)) {
          echo "Your guess was too short";
        }
        else if (!is_numeric($_GET['guess'])) {
          echo "Your guess is not a number";
        }
        else if ($_GET['guess'] < 3) {
          echo "Your guess is too low";
        }
        else if ($_GET['guess'] > 3) {
          echo "Your guess is too high";
        }
        else {
          echo "Congratulations - You are right";
        }
       ?>
    </p>
  </body>
</html>