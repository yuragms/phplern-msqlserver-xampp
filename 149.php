

<?php
// array = "variable" which can hold more than one value at a time

$foods = array("apple", "orange", "banana", "coconut");

// echo $foods[0];
// $foods[0] = "pinaple";
// array_push($foods, "pineapple", "kiwi");
// array_pop($foods);
// array_shift($foods);
// array_reverse($foods);  
// array_reverse - create new array

echo count($foods);

foreach($foods as $food) {
  echo $food . "<br>";
};

?>
