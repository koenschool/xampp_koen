<!DOCTYPE html>
<html>
<body> 
<?php

session_start();
// test of sessie werkt
if (isset($_SESSION['som']) == false ){
    $_SESSION['som'] = 0;
} else{
    $_SESSION['som']++;
}

echo 'je hebt deze pagina al ',$_SESSION['som'],' keer bekeken voordat de browser is afgesloten';


if (isset($_COOKIE['tel']) == false ){
    setcookie('tel', 0);
} else{
    $_COOKIE['tel']++;
    //verander de waarde van de cookie
    setcookie('tel', $_COOKIE['tel']);
}

echo ' je hebt deze pagina al ',$_COOKIE['tel'],' keer bekeken';

?>
</body>
</html>