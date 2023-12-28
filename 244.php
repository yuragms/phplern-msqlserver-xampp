
<?php
$username = "Bro Code";
$username1 = array("Bro", "The", "Code");
$phone = "123-456-7890";

// $username = strtolower($username);
// $username = strtoupper($username);
// $username = trim($username);
// $username = str_pad($username, 20, "0");
// $username = strrev($username);
// $username = str_shuffle($username);
// $equals = strcmp($username, "Bro Code");
// $count = strlen($username);
$index = strpos($username, " ");
$firstname = substr($username, 0, 3);
$lastname = substr($username, 4);
$fullname = explode(" ", $username);


// foreach($fullname as $name){
//   echo $name . "<br>";
// };
$username1 = implode(" ", $username1);
echo $username1;

// echo $equals;
// echo $username;
// echo $count;
// echo $index;
// echo $firstname;
// echo $lastname;

// echo $username;



// $phone = str_replace("-", "", $phone);

// echo $phone;

?>