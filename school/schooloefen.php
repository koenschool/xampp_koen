<!DOCTYPE html>
<html>
<body>

<?php


$cijfers = array(2,3,4);



$som = 0;



$tel = count($cijfers) - 1;

for ($i = 0; $i <= $tel; $i++) {
    $som = $som + $cijfers[$i];
  }


  $som2 = $som / count($cijfers);

  echo '<br>Het totaal is '.$som.' en het gemiddelde is '.$som2;


?>
</body>
</html>