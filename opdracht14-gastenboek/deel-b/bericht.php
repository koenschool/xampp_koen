<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bericht toevoegen</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>bericht toevoegen</h1>
</body>
</html>

<?php
session_start();
if(isset($_SESSION['username'])){
    echo "Ingelogt als " . $_SESSION['username'];
    echo "<br>";
    echo '<form action="insert.php" method="post">
      <input type="text" id="naam" name="naam" hidden value="'. $_SESSION['username'].'"><br>
    
      <label for="bericht">bericht</label><br>
      <input type="text" id="bericht" name="bericht" ><br>
    
      <input type="submit" name="opslaan" class="vulling" value="opslaan">
    </form>
    <hr>';
}
else{
    echo "U bent niet ingelogd.";
    echo "<br>";
    echo "<a href='login.php'>Inloggen</a>";
    echo "<br>";
    echo "<a href='register.php'>Registreren</a><br><br>";
}

?>