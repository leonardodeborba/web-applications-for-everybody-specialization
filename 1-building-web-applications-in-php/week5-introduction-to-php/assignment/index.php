<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Leonardo de Borba PHP</title>
  </head>
  <body>
    <!-- 
    Web Applications for Everybody Specialization
    Course: Building Web Applications in PHP
    Week 5 - Assignment Specification: Our First PHP Application
    -->
    <h1>Leonardo de Borba PHP</h1>
    <!-- Generate hash -->
    <?php
      echo '<p>The SHA256 hash of "Leonardo de Borba" is ' . hash('sha256', 'Leonardo de Borba') . '</p>';
    ?>

    <!--
    My <pre> output looks diferent than Charles' because his code is unindented,
    I wanna make it pretty :(
    He also doesn't close the <html> tag for some reason...
    Check the source code of the sample solution page: 
    https://www.wa4e.com/solutions/php/
    view-source:https://www.wa4e.com/solutions/php/
    -->

    <pre>
      ASCII ART:

          *
          *
          *
          *
          *
          *          
          **********
    </pre>
    <!-- Links -->
    <a href="check.php">Click here to check the error setting</a>
    <br />
    <a href="fail.php">Click here to cause a traceback</a>
  </body>
</html>