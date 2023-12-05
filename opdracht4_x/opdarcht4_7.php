<!DOCTYPE html>
<html>
<body>

<?php

//gemaakt door koen Polfliet

$spaargeld = 1010;

if($spaargeld < 850){
   $geld = 1000 - $spaargeld;
    echo"je komt $geld te kort je kunt beter een bijbaantje zoeken";
}

else if($spaargeld > 850 && $spaargeld < 1000 ){
    $geld = 1000 - $spaargeld;
    echo"je komt $geld te kort";
}

else if($spaargeld > 1000){
    $geld = $spaargeld - 1000;
    echo"je hebt genoeg en nog $geld over om een hoesje te kopen";
}


?>
</body>
</html>
