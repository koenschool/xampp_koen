<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>controleer getal</h1>

<form action="" method="post">
    <input type="text" name="getal" id="" placeholder="voer getal in">

    <input type="submit" value="check" name="check">

</form>


<?php




if(isset($_POST['check']) == true){
    echo 'De knop is in gedrukt! ';
    echo $_POST['getal'];
}

else{
    echo "niks ingevuld";
}

?>
</body>
</html>