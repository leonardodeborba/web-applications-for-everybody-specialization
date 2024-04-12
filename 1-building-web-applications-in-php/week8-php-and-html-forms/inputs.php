<!DOCTYPE html>
  <html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputs</title>
  </head>
  <body>
      <form action="" method="post">
      <label for="favorite-color"> Your favorite color </label> <br />
      <input type="color" id="favorite-color" name="favorite-color" value="#12ee55" /> <br /> <br />

      <label for="birthday">Your birthday</label> <br />
      <input type="date" id="birthday" name="birthday" /> <br /> <br />

      <label for="email">Your email</label> <br />
      <input type="email" id="email" name="email" /> <br /> <br />

      <label for="dog">How many dawgs?</label> <br />
      <input type="number" id="dog" name="dog" min="1" max="5" /> <br /> <br />

      <label for="website">Your website</label> <br />
      <input type="url" id="website" name="website" /> <br /> <br />

      <!-- Fallbacks to text input -->
      <label for="is-good">U good rn?</label> <br />
      <input type="froggy-pats" id="is-good" name="is-good" /> <br /> <br />

      <input type="submit" id="submit-form" name="submit-form" value="Submit" />
      <input type="reset" id="reset-form" name="reset-form" value="Cancel" />
    </form>
    
    <pre>
      <?php
        echo "POST: ";
        print_r($_POST);
      ?>
    </pre>
  </body>
</html>