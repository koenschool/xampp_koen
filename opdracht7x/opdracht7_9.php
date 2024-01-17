<!DOCTYPE html>
<html>
<body>

<form method="post">

<label for="text">Tekst:</label>
  <input type="text" id="text" name="text"><br>

  
  
  <input type="radio" id="hoofd" value="hoofd" name="sel" >
<label for="hoofd">In hoofdletters</label><br>
  
  <input type="radio" id="klein" value="klein" name="sel" >
  <label for="klein">In kleine letters</label><br>
  
  <input type="radio" id="zin" value="zin" name="sel" >
  <label for="zin">Eerste letter van zin hoofdletter</label><br>
  
  <input type="radio" id="ieder" value="ieder" name="sel" >
<label for="ieder">Eerste letter van ieder word hoofdletter</label><br><br>

  <input type="submit" name="weergeven" value="Weergeven">

</form>


<?php

$sel=$_POST["sel"];
$tek=$_POST["text"];


if($_POST['sel'] == 'hoofd'){
       echo strtoupper($tek);
}

else if($_POST['sel'] == 'klein'){
    echo strtolower($tek);
}

else if($_POST['sel'] == 'zin'){
    echo ucfirst($tek);
}

else if($_POST['sel'] == 'ieder'){
    echo ucwords($tek);
}


?>
</body>
</html>