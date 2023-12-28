<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>Enter a number to count to:</label>
    <input tupe="text" name="counter">
    <input type="submit" value="start">
  </form>
  
</body>
</html>


<?php
// for loop = repeat some code a certain # of times

$counter = $_POST["counter"];

for ($i = 0; $i <= $counter; $i++) {
  echo $i . "<br>";
// for ($i = 0; $i < 5; $i++) {
//   echo $i . "<br>";
}



?>