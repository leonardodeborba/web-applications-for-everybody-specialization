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