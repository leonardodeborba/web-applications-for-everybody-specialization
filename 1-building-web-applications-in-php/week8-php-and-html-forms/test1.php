<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guessing Game</title>
</head>
<body>
  <p>Guessing Game</p>
  <form>
    <p>
      <label for="guess">Input Guess</label>
      <input type="text" name="guess" id="guess" />
    </p>
    <input type="submit" />
  </form>
  <pre>
    <?php
      print_r($_GET);
    ?>
  </pre>
</body>
</html>