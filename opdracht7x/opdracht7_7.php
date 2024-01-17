<!DOCTYPE html>
<html>
<body>

<form method="post">

<label for="sta">Startkapitaal</label>
  <input type="number" id="sta" name="sta" value="100000"><br>

  <label for="ren">Rentepercentage</label>
  <input type="number" id="ren" name="ren" value="4"><br>
  
  <label for="ja">Jaarlekse opname</label>
  <input type="number" id="ja" name="ja" value="5000"><br>

  <input type="submit" name="Bereken de looptijd" value="Bereken de looptijd">

</form>

<?php

$sta=$_POST["sta"];
$ren=$_POST["ren"];
$ja=$_POST["ja"];

$ren=$ren/100+1;

$i=0;

while ($sta > $ja) {
    $sta=$sta*$ren;
    $sta=$sta-$ja;

  $i++;
}

echo 'U kunt '.$i.' jaar lang €'.$ja.' opnemen';




?>
</body>
</html>