<!-- Розглянемо приклад – магазин надає знижки при замовленні великої
кількості автопокришок. Схема знижок виглядає таким чином:
- придбання менше 10 автопокришок – без знижки;
- придбання 10-49 автопокришок – знижка 5%;
- придбання 50-99 автопокришок – знижка 10%;
- придбання 100 і більше автопокришок – знижка 15%. -->
<link rel="stylesheet" href="./style.css">

<?php
$z="Знижка дорівнює :";
$n="Без знижки";
$tireqty=$_GET['value_wheels'];
if($tireqty>=10 && $tireqty<=49) {

    $discount=5;
  echo"<span>$z $discount %</span>";
}
elseif($tireqty>=50&&$tireqty<=99){
    $discount=10;
    echo"<span>$z $discount %</span>";
}
elseif($tireqty>=100){
$discount=15;
echo"<span>$z $discount %</span>";
}
else
echo "<span>$n</span>"
?>


