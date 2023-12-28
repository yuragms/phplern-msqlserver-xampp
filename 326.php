
 <?php
//  hashing = transforming sensiitive data (password) into letters, nambers, and/or symbols via a mathematical process. (similar to encryption) Hides the original data from 3rd parties.

$password = "pizza123";

$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;

if(password_verify("pizza123", $hash)) {
    echo "You are logged in!";
}
else {
    echo "Incorect password";
}
 ?>