<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

  $method="GET";

 if($_SERVER["REQUEST_METHOD"] ==="GET" ) {
    $nome=$_GET["name"]?? '';//value == null restituisce stringa vuota
    $cognome=$_GET["last_name"]?? '';
    $email=$_GET["email"]?? '';
  
} elseif($_SERVER["REQUEST_METHOD"]=== "POST"){
    $nome=$_POST["name"]?? '';
    $cognome=$_POST["last_name"]?? '';
    $email=$_POST["email"]?? '';
}

// function clean($valore) {
//   $valore = trim($valore);
//   $valore = stripslashes($valore);
//   $valore = htmlspecialchars($valore);
//   return $valore;
// }

?>


  <input type="submit" value="Submit"> 

</form>
</body>
</html>