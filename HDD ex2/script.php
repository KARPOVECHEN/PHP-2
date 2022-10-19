
<link rel="stylesheet" href="./style.css">

<?php
$HDD=$_GET['input_'];
if($HDD=='Maxtor')
{
    $CDROM='TEC';
    echo "<span>$CDROM</span>";
}
else
{
    $CDROM='NEC';
     echo "<span>$CDROM</span>";
}
?>

