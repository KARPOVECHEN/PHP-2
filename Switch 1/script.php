
  <link rel="stylesheet" href="style.css">

  <?php
  $number=$_GET['inp'];
  switch($number)
  {
    case 1:
        echo("one ");
    case 2:case 3:
        echo("three ");
    case 4:case 5:
        echo("five ");
    case 6:case 7:
        echo("seven ");
    case 8:case 9:
        echo("nine ");
    break;
    default:
    echo("Ці номери не потрапляють у заданий діапазон >9 or <1");
  }
  ?>