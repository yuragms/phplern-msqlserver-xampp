
<?php
// switch = replacement to using many elseif statements more efficient, less code to write

// $grade = "A";

// switch($grade) {
//   case "A":
//     echo "You did great";
//     break;
//      case "B":
//     echo "You did good";
//     break;
//          case "C":
//     echo "You did okay";
//     break;
//              case "D":
//     echo "You did poorly";
//     break;
//              case "F":
//     echo "You failed";
//     break;
//     default:
//     echo "{$grade} is not valid";
// }
$date = date("1");

$date = "Pizza";

switch($date){
  case "Monday":
    echo "I hate Mondays";
    break;
    case "Tuesday":
      echo "It is Taco Tuesday";
      case "Wednesday":
        echo "The work week is half over!";
        break;
           case "Thursday":
        echo "It is almost the weekend!";
        break;
        default:
        echo "{$date } is not a day";

}

?>