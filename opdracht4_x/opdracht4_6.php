<!DOCTYPE html>
<html>
<body>

<?php

$tijd=12;
$graden=21;
$lucht=88 ;

if( $tijd > 17 || $graden < 20 && $lucht < 85 ){
    $airco = "de airco is aan";
}

else if( $tijd < 17 || $graden > 20 && $lucht > 85 ){
    $airco ="de airco is uit";
}

echo "$airco";

?>
</body>
</html>
