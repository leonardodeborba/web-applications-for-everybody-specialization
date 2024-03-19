<?php

$age = 21;
$x = 13;
$myStr = "10";
$myStr2 = "Lmao";

/* 
  Multiline
  Comment
*/

// Single line comment
# Single line comment

echo "What?\n";
echo "Brazy\n";
echo "Having embedded newlines,
thats very cool";

echo "His age is $age <br>";

echo $age, "<br>";
echo ($age + $x), "<br>";

print ($x + $age) . "<br>";

// Converts string "10" to number
echo $myStr + 21 . "<br>";

echo "Incrementing: <br>";
// Post increment = gets the value as it is and then increments, but the increment doesnt takes effect on the increment1 because it uses the old copy
$increment1 = $x++;
echo $increment1 . "<br>";

// now its incremented
echo $x . "<br>";

// assigns to the variable the already incremented x (which is now incremented by 1 because of the previous expression)
$increment2 = ++$x;
echo $increment2 . "<br>";

echo "Ternary: <br>";

$num1 = 1;
$ternary = $num1 > 0 ? "Greater than 0" : "Lesser than 0";
echo $ternary . "<br>";
$num2 = 24;
$isOdd = ($num2 % 2 == 0) ? "$num2 is an odd number" : "$num2 is an even number";
echo $isOdd . "<br>";
$hello = "Hello, my name is ";
$leonardo = "Leonardo. Nice to meet you!";
echo $hello .= $leonardo . "<br>";

$greeting = "Hello, ";
echo $greeting . "<br>";
$greeting .= "Leonardo!";
echo $greeting . "<br>";

// Conversion crazy

$d = "100" + 36.25 + TRUE;
// "100" converts to int; TRUE converts to int 1; 
echo $d . "<br>";

// can convert data to a certain (type)
$e = (int)9.9 - 1;
echo $e . "<br>";

// converts 25 to a string
// cannot convert string to number like that. cannot use "sam" + 25 = error
$f = "sam" . 25;
echo $f . "<br>";

// TRUE converts to INT 1 then to STR 1
echo "X" . TRUE . "Y" . "<br>";
// FALSE is "not there", smaller than "0" = DOES NOTHING
echo "A" . FALSE . "B" . "<br>";

// 5 < 6 is TRUE so it converts to 1, then the strings convert to numbers because of the - sign so it becomes 1 and so it is 1 == 1
$bruh = ((5 < 6) == "2" - "1") ? "Bruh this equals to true" : "Nahh";
echo $bruh . "<br>";


// strpos

$vv = "Hello World!";

echo "First: " . strpos($vv, "Wo") . "<br>";
echo "Second:" . strpos($vv, "He") . "<br>";

// == converts the position "0" to FALSE
// $found = strpos($vv, "He") == FALSE ? "Not found <br>" : "Found <br>";
$found = strpos($vv, "He") === FALSE ? "Not found <br>" : "Found <br>";
echo $found;

echo "if statement" . "<br>";

$country = "BR";

if ($country === "BR") {
  echo "Hey, you're from Brazil! <br>";
} else {
  echo "Uh, you're from somewhere else... <br>";
}


echo "do while <br>";

$count = 0;

do {
  $count = $count + 3;
  echo "$count + 3 = $count";
} while ($count <= 23);








?>