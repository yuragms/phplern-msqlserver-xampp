
<?php
// function = write some code once, reuse when you need it type () after function name to invoke ex. add() subtract() multiply() divide()


// function happy_birthday($first_name, $age) {
//   echo"Happy Birthday dear {$first_name} <br>";
//   echo"Happy Birthday to you <br>";
//   echo"Happy Birthday dear {$first_name} <br>";
//   echo"You are {$age} years old <br><br>";
// }

// happy_birthday("Spongebob", 30);
// happy_birthday("patrik", 35);

function is_even($number) {
  // $result = $number % 2;
  // return $result;
  return $number % 2;
}

echo is_even(11);
echo "<br>";


function hypotenuse($a, $b) {
  $c = sqrt($a**2 + $b**2);
  return $c;
};

echo hypotenuse(3,4)





?>