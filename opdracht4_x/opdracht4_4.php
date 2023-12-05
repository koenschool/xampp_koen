<!DOCTYPE html>
<html>
<body>

<?php

$oude=100;

if($oude > 150){
    $nieuwe = $oude * 1.19;
    $pro = 19;
}
else if($oude < 55){
    $nieuwe = $oude * 1.11;
    $pro = 11;
}

else{
    $nieuwe = $oude * 1.16;
    $pro = 16;
}

echo "Oude Prijs:$oude.Na verhoging van $pro % is de nieuwe prijs:$nieuwe";

?>
</body>
</html>
