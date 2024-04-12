<?php
  $html_injection = isset($_POST['bad-input']) ? $_POST['bad-input'] : '';

  $no_html_injection = isset($_POST['better-input']) ? $_POST['better-input'] : '';
?>

  <!DOCTYPE html>
    <html lang="en-US">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HTML Injection</title>
    </head>
    <body>
      <p>HTML Injection</p>
      <form action="" method="post">
        <p>
          <label for="bad-input">Bad Input: </label>
          <!-- Shorter syntax for php echo -->
          <!-- Hygiene Alert: This code can cause HTML injection with malicious code -->
          <input type="text" name="bad-input" id="bad-input" value="<?= $html_injection ?>" />
        </p>

        <p>
          <label for="better-input">Better Input: </label>
          <!-- htmlentities need to be called twice for the browser to display it properly -->
          <input type="text" id="better-input" name="better-input" value="<?= htmlentities(htmlentities($no_html_injection)) ?>" />
        </p>

        <input type="submit" />
      </form>
      
      <?php
        // htmlentities IS working! the browser is simply making my life harder
        echo "<pre>";
        echo "POST: <br />";
        print_r($_POST);
        echo "</pre>";
      ?>

      <?php
        var_dump(function_exists('htmlentities'));
    
        echo "<br /> <br />";
        echo "MAN I WAS GOING CRAZY... I thought it wasn't working but it's just the browser doing a little trolling.";
        echo "<br /> <br />";

        echo "This is actually working (see source code): <br />";
        $str = "A 'quote' is <b>bold</b>";
        echo htmlentities($str);

        echo "<br /> <br />";
        echo "Needs to be called twice for the browser to display it correctly: <br />";
        $str = "A 'quote' is <b>bold</b>";
        echo htmlentities(htmlentities($str));
      ?>
    </body>
  </html>