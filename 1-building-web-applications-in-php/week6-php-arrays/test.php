<?php

  // Arrays
  // linear array = indexed by integers
  $arr1 = array("Hi", "there");
  echo $arr1[0], "<br />";
  echo $arr1[1], "<br />";

  // associative array = key / value array
  $arr2 = array(
    "name" => "Leonardo",
    "course" => "WA4E", 
  );

  echo $arr2["course"], "<br />";

  $arr3 = array(
    "country" => "Brazil",
    "age" => "21",  
  );

  echo $arr1[0] . " " . $arr1[1] . ". " . "My name is " . $arr2["name"] . ". " . "I'm from " . $arr3["country"] . " and I'm " . $arr3["age"] . " years old. :)" . "<br />" ; 

  // Dumping an array
  echo "<pre>\n";
  print_r($arr2); // print_r
  echo "</pre>\n";

  echo "<pre>\n";
  var_dump($arr2); // var_dump
  echo "</pre>\n";

  // var_dump vs print_r
  $thing = FALSE;
  echo "print_r: ";
  print_r($thing); // doesn't display booleans
  echo "<br /> var_dump: ";
  var_dump($thing);
  echo "<br />";

  // building up an array
  $va = array();
  $va[] = "Hello";
  $va[] = "World";
  print_r($va);
  echo "<br />";

  $va2 = array();
  $va2["name"] = "Leonardo";
  $va2["age"] = 21;
  var_dump($va2);
  echo "<br />";

  // Looping through an array
  foreach($va2 as $k => $v) {
    echo "<br /> Key = $k, Value = $v";
  }
  echo "<br />";
  
  $numbers = array();
  $numbers[] = 10;
  $numbers[] = 50;
  $i = 1;
  foreach($numbers as $num) {
    echo "<br /> Number $i: $num";
    $i++;
  }

  echo "<br />";
  echo "<br />";
 
  echo "Adding numbers in an array:";
  $addArray = array();
  $addArray[] = 10;
  $addArray[] = 20;
  $addArray[] = 3;
  $operation = 0;
  $sum = 0;
  foreach($addArray as $index) {
    ++$operation;
    echo "<br /> Operation $operation: $sum + $index";
    $sum = $sum + $index;
  }
  echo "<br /> Total: $sum";

  echo "<br />";

  // Nested arrays (NOT 2D arrays)
  $employees = array(
    "leonardo" => array(
      "id" => 123,
      "age" => 21,
      "country" => "Brazil",
    ),
    "mike" => array(
      "id" => 888,
      "age" => 24,
      "country" => "United States",
    ),
  );

  echo "<pre>\n";
  print_r($employees);
  echo "</pre>\n";

  echo "<br />";

  echo "Mike's ID: ", $employees['mike']['id'], "<br />";
  echo "Mike's Country: ", $employees["mike"]["country"], "<br />";

  // Counted loop through an array
  $people = array("Leonardo", "Mike",);
  echo "People in the company:<br />";
  for($i = 0; $i < count($people); $i++) {
    echo $people[$i], "<br ;>";
  }

  // Array Functions

  // array_key_exists()
  $people2 = array();
  $people2["age"] = 21;
  $people2["name"] = "Leonardo";
  $people2["country"] = "BR";
  if (array_key_exists("age", $people2)) {
    echo "The key Age exists. Value: ", $people2["age"];
  } else {
    echo "The key doesn't exist.";
  }
  
  echo "<br />";

  // isset()
  echo isset($people2["name"]) ? "Yes, the key name exists. The value is: " . $people2["name"]  : "The key name doesn't exist.";

  echo "<br />";

  echo isset($people2["id"]) ? "Yes, the key id exists. The value is ". $people2["id"] : "The key id doesn't exist. <br />";

  echo "<br />";

  echo isset($people2["nop"]); // no output
  
  echo "<br />";

  // null coalescing
  echo "The key exists. The value is: " . $people2["country"] . "<br />" ?? "The key country doesn't exist. <br />";

  // is_array()
  if (is_array($people2)) {
    echo "Yep, this is an array. The array is: <br />";
    echo "<pre>";
    print_r($people2);
    echo "</pre>";
  } else {
    echo "Nop. $people2 is not an array.";
  }

  echo "<br />";
  $not_an_array = 13;
  if (is_array($not_an_array)) {
    echo "Yep. This is an array.";
  } else {
    echo "This is not an array. The value is ", var_dump($not_an_array), "<br />";
  }

  echo "<br />";

  // sort()
  $sort_array1 = array();
  $sort_array1["name"] = "Leonardo";
  $sort_array1["name2"] = "Anne";
  $sort_array1["age"] = 21;
  $sort_array1["id"] = 785;
  echo "<pre>";
  print_r($sort_array1);
  sort($sort_array1); // throw away the keys and sorts by values
  echo "<br />";
  print_r($sort_array1);

  echo "<br />";
  // ksort
  $sort_array2 = array();
  $sort_array2["name"] = "Leonardo";
  $sort_array2["name2"] = "Anne";
  $sort_array2["age"] = 21;
  $sort_array2["id"] = 785;
  ksort($sort_array2); // sorts by keys in alphabetical order
  print_r($sort_array2);

  echo "<br />";
  
  // asort
  $sort_array3 = array();
  $sort_array3["name"] = "Leonardo";
  $sort_array3["name2"] = "Anne";
  $sort_array3["age"] = 21;
  $sort_array3["id"] = 785;
  asort($sort_array3); // sorts the values and keep the keys intact
  print_r($sort_array3);
  echo "</pre>", "<br />";

  // shuffle
  $shuffle_array = array();
  $shuffle_array["name"] = "Leonardo";
  $shuffle_array["name2"] = "Anne";
  $shuffle_array["age"] = 21;
  $shuffle_array["id"] = 785;
  shuffle($shuffle_array);
  echo "<pre>";
  print_r($shuffle_array);
  echo "</pre>";
  

  // exploding arrays

  $long_string = "A damn long string that I wanna slice into each word";
  echo $long_string, "<br />";
  $exploded_string = explode(" ", $long_string);
  echo "<pre>";
  print_r($exploded_string);
  echo "<pre>";

  echo "<br />";

  $data = "Pencil, Bottle, Box, Pen, Towel, Charger";
  echo $data;  
  $parsed_data = explode(", ", $data);
  echo "<pre>";
  print_r($parsed_data);
  echo "</pre>";
?>