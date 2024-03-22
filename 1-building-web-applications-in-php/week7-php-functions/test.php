<?php
  
  /*
  
  To function or not to function:

  * Organize your code into "paragragraphs" - capture a complete thought and "name it".
  * DRY: Dont Repeat Yourself - make it work once and then reuse it.
  * If somethings gets too long or complex, break up logical chunks and put those in functions.
  * Make a library of common stuff you do over and over.
  
   */

  // Built-in functions

  // string reverse
  echo strrev("Hello world.");
  echo "<br />";

  // string repeat
  echo str_repeat("That's brazy ", 5);
  echo "<br />";

  // string to uppercase
  echo strtoupper("omaga");
  echo "<br />";

  // string length
  echo strlen("Dawg");
  echo "<br />";

  // Own Functions (case sensitive)

  function greet1() {
    print "Hey! <br />";
  }
  greet1();
  greet1();

  // return
  function greet2() {
    return "Hey, ";
  }
  print greet2() . "Leo";
  echo "<br />";
  
  // parameters and arguments
  function hi($lang) {
    if ($lang == "es") return "Hola, ";
    if ($lang == "br") return "Olá, ";
  }
  print hi("br") . "Leo <br />";
  print hi("es") . "Anne <br />";

  // default argument
  function hi2($lang="fr") {
    if ($lang == "fr") return "Bonjour, ";
    if ($lang == "br") return "Olá, ";
  }
  print hi2() . "Leo <br />";
  print hi2("br") . "Leo <br />"; 

  // call by value
  // creates a copy of the value of a variable passed as argument
  function to_double($alias) {
    $alias = $alias * 2;
    return $alias;
  }
  $val = 10;
  $dval = to_double($val);
  echo "Value = $val Doubled = $dval <br />";

  // call by reference (&)
  // changes the actual value of a variable passed as argument
  function to_triple(&$change_value) {
    $change_value = $change_value * 3; 
  }
  $change_value = 3;
  echo "Old value: $change_value <br />";
  to_triple($change_value);
  echo "New value: $change_value <br />";
  
  // Variable Scope

  /*
  * In general, variable names used inside of function do not mix with the variables outside of the function to prevent using the same variable name for different things.
  * Name Spacing: The function variables are in one "name space", whilst the main variables in another "name space".
  */
  
  // normal scope (isolated)
  // except for $_GET (superglobal)
  function isolatedScope() {
    $val_isolated = 100;
  }
  $val_isolated = 10;
  isolatedScope(); // doesn't change the value of the variable in another name space
  echo "The value from the variable outside of the function doesn't change: ", $val_isolated; 

  echo "<br />";

  // global scope (shared)
  // common to use uppercase and/or long names with unique prefixes
  function globalScope() {
    global $VAL_GLOBAL_UPPERCASE;
    $VAL_GLOBAL_UPPERCASE = 100;
  }
  $VAL_GLOBAL_UPPERCASE = 10;
  globalScope(); // changes the value of the variable in another name space
  echo "Changes the value of the variable even outside of the function: $VAL_GLOBAL_UPPERCASE <br />";
  
  // check if a function exists in the version of the PHP you're using
  var_dump(function_exists("array_combine"));
  var_dump(function_exists("session_is_registered"));
  var_dump(function_exists("strlen"));

  echo "<br />";
  
  // internal configuration of your php installation
  // phpinfo();

  // Modularity

  // including and requiring files
  include "break.php"; // pull the file
  // include_once - pull the file unless it has already been pulled before
  require "fatal.php"; // fatal error if file is missing
  // require_once - require the file unless it has already been required before
  b();
  echo "testing include";
  b();
  fatal();
  b();
  echo "testing include";
?>