<!DOCTYPE html>
<html>
<body>

<?php

$t=(date("h"));


$time2=12;
    if($t > 6){
        echo "het is nacht";
        }
else if($t < 12){
echo "het is ochtend";
}
else if($t < 18){
echo "het is middag";
}
else if($t < 24){
    echo "het is avond";
    }



?>
</body>
</html>
