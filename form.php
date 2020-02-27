<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="post">
    <input placeholder="voer je e-mail adres in" type="text" name="email">
    <input type="submit" value="Verstuur" name="submit">
</form>

<?php

$email = $_POST["email"];

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "dit is een echt email";
}else{
    echo "dit is geen email";
}


?>

</body>
</html>

