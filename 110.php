
<?php
$age = 101;
if($age >=100) {
  echo "You are too old to enter this site";
}
elseif($age >=18) {
  echo "You may enter this site";
}
 elseif($age <=0) {echo "That was`t a valid age";
}
else {
  echo "You must be 18+ to enter";
}

?>
