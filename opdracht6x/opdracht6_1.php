<!DOCTYPE html>
<html>
<body> 
<?php

$telop = 0;


session_start();
// test of sessie werkt
if (isset($_SESSION['som']) == false ){
    $_SESSION['som'] = 0;
} else{
    $_SESSION['som']++;
}

echo 'je hebt deze pagina al ',$_SESSION['som'],' keer bekeken voordat de browser is afgesloten';


?>
</body>
</html>