<?php
// cookie = information about a user stored in a user's web-browser
// targeted advertisements, browsing preferences, and other non-sensitive data
setcookie("fav_food", "pizza", time()+(86400*2), "/");
setcookie("fav_drink", "coffee", time()+(86400*3), "/");
setcookie("fav_dessert", "ice cream", time()+(86400*4), "/");

// foreach($_COOKIE as $key => $value) {
//   echo "{$key} = {$value} <br>";
// }

if(isset($_COOKIE["fav_food"])){
  echo"BUY SOME {$_COOKIE["fav_food"]}!!!";
} else {
  echo"I do not know your favourite food";
}
?>