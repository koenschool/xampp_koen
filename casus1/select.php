<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="allcss.css?<?php echo time(); ?>">
</head>
<body>
    
 
<?php
// gemaakt door Koen Polfliet
// functie selecteer data

// connect data base
include "connect.php";
session_start();
if(!isset($_SESSION['mode'])){
$_SESSION['mode'] = 'leerling';
}

// maak een query
$sql="SELECT * FROM ziekmelding";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result =$stmt->fetchALL(PDO::FETCH_ASSOC);


  function modeverander($mode) {
    $_SESSION['mode'] = $mode;
  }

  if (isset($_GET['leerling'])) {
    modeverander('leerling');
  }
  if (isset($_GET['admin'])) {
    modeverander('admin');
  }

  echo "website voor ziekmelding docenten (".$_SESSION['mode']." versie)";
?>

<ul>
  <li><a href='select.php?leerling=true'>Leerling versie</a></li>
  <li><a href='select.php?admin=true'>Admin versie</a></li>
</ul>  
<?php

if($_SESSION['mode'] == 'admin'){
    echo "<h2>admin paneel</h2>
<a href='insert.php'>ziekmelding toevoegen</a>
<br>";
}



?>
<h2>tabel ziekmelding docenten</h2>
<?php
if($_SESSION['mode'] == 'admin'){
echo "<p>Klik op het kruis om een record te verwijderen</p>";
}
?>
<table border='1px'>
    <tr>
<th>docent naam</th>
<th>datum</th>
<?php
if($_SESSION['mode'] == 'admin'){
echo "<th colspan='2'>acties</th>";
}
?>
</tr>

    <?php
foreach ($result as $row) {
    echo "<tr>";
    echo "<td>". $row['docent_naam'] . "";
    echo "<td>". $row['datum']. "";
    if($_SESSION['mode'] == 'admin'){
        echo "<td><a href='edit.php?id=" . $row['id'] ."'>" . "wijzigen</a></td>";
        echo "<td><a href='delete.php?id=" . $row['id'] ."'>" . "verwijder</a></td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>