<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST</title>
</head>
<body>
  <!--
  Forms GET vs. POST
  * GET - Parameters are placed on the URL which is retrieved.
  * POST - The URL is retrieved and parameters are appendend to the request in the HTTP connection.
  -->
  <p>Post method</p>
  <form method="POST">
    <p>
      <label for="guess">Input Guess</label>
      <input type="text" name="guess" size="40" id="guess" />
    </p>
    <input type="submit" />
  </form>
    <?php
      echo "<pre>";

      echo "POST: <br />";
      print_r($_POST);

      echo "<br />";

      echo "GET: <br />";
      print_r($_GET);

      echo "</pre>";
    ?>
</body>
</html>