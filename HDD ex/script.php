
<link rel="stylesheet" href="./style2.css">

<?php
$HDD=$_GET['input_hdd'];

if($HDD=='Maxtor'):
?>
<table>
    <caption><p>Maxtor</p></caption>
</table>
<?
elseif($HDD=='Seagate'):
    ?>
    <table>
        <caption><p>Seagate</p></caption>
    </table>
    <?
    endif;
    ?>

