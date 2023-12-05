<!DOCTYPE html>
<html>
<body>

<?php

$t=(date("h"));
echo $t; 

$time = match(true){
    $t >= 6 && $t <= 01 => "het is ochtend",
    $t >= 01 && $t <= 06  => "het is middag",
    $t >= 06 && $t <= 0  => "het is avond",
    $t >= 0 && $t <= 6 => "het is nacht",
    default => "dit werkt niet",
};

echo $time;



?>
</body>
</html>
