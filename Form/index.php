<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style3.css">

    <title>Form</title>
</head>

<body>

<?php
function print_form($name,$surname,$email,$zip_code,$favorite_subject)
{
?>
    <form action="index.php" method="post">

        <div class="conteiner">
            <h2>Будь-ласка, введіть інформацію про себе</h2>
            <p>Поля з * обов'язкові для заповнння</p>

            <input class="input_" type="text" value="<?php echo $name?>" name="name" placeholder="Ім'я">
            <input class="input_" type="text" value="<?php echo $surname?>" name="surname" placeholder="Прізвище*">
            <input class="input_" type="text" value="<?php echo $email?>" name="email" placeholder="Email*">
            <input class="input_" type="text" value="<?php echo $zip_code?>" name="zip_code" placeholder="Поштовий індекс*">
            <input class="input_" type="text" value="<?php echo $favorite_subject?>" name="favorite_subject" placeholder="Улюблений предмет">
            <div class="btns">
                <input class="btn"  name="submit" type="submit" value="Відправити">
                <input class="btn"  name="reset" type="reset" value="Відмінити">
            
            </div>
        </div>
    </form>



<!------------------------------------------------------------------------------
----------------------------------------------------------------------------
------------------------------------------------------------------------------->
<?php
    }

function check_form($name,$surname,$email,$zip_code,$favorite_subject)
{
    if(!$surname||!$email||!$zip_code): echo"<h3>Помилка у заповненні</h3>";
    if(!$surname){echo"<h3>Ви не заповнили поле прізвище</h3>";}
    if(!$email){echo"<h3>Ви не заповнили поле еmail</h3>";}
    if(!$zip_code){echo"<h3>Ви не заповнили поле поштовий індекс</h3>";}

    print_form($name,$surname,$email,$zip_code,$favorite_subject);

else: confirm_form($name,$surname,$email,$zip_code,$favorite_subject);
    endif;
}


// -----------------------------------------------------------------------------
// -----------------------------------------------------------------------------
// -----------------------------------------------------------------------------
function confirm_form($name,$surname,$email,$zip_code,$favorite_subject)
{
    ?>
    <div class="him">
<h2>Дякуємо! Наступна інформація була успішно надіслана</h2>
<h5 >Контактна інформація :</h5>

<?php
    echo"<span>$name $surname<span>$email</span></span><span>Поштовий індекс: $zip_code</span><span>Улюблений предмет:$favorite_subject</span>\n";
}
$submit=$_POST['submit'];
$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$zip_code=$_POST['zip_code'];
$favorite_subject=$_POST['favorite_subject'];
if(!$submit):
?>
</div>

<?php
print_form("","","","",""   );
else:
    check_form($name,$surname,$email,$zip_code,$favorite_subject);
endif;
?>

</body>

</html>