<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news</title>
    <link rel="stylesheet" href="allcss.css?<?php echo time(); ?>">
    <script defer src="code.js?v=<?php echo time();?>"></script>
</head>
<body>
  


<div class="center">
<?php
// gemaakt door Koen Polfliet
// functie selecteer data

// connect data base
include "connect.php";
session_start();
if(!isset($_SESSION['mode'])){
    $_SESSION['mode'] = 'bezoeker';
    }
// maak een query

function data($code, $jaja){
    global $conn;
    $sql=$code;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result =$stmt->fetchALL(PDO::FETCH_ASSOC);
    echo $jaja;
    return $result;
}



  function modeverander($mode) {
    $_SESSION['mode'] = $mode;
  }

  if (isset($_GET['bezoeker'])) {
    modeverander('bezoeker');
  }
  if (isset($_GET['admin'])) {
    modeverander('admin');
  }

  echo "hier is het beste news (".$_SESSION['mode']." versie)";
?>

<br>
<a href='select.php?bezoeker=true'>bezoeker versie</a><br>
<a href='select.php?admin=true'>Admin versie</a><br>

<?php


if($_SESSION['mode'] == 'admin'){
    echo "<h2>admin paneel</h2>
<a href='insert.php'>news toevoegen</a>
<br>";
}



?>
<h2>Het nieuws.</h2>
</div>

<div class="news">


</tr>
    <?php
echo "<div class='sport'></div>";

$result = data("SELECT * FROM news WHERE categorie = 'sport'", "ja");
echo "<p>sport</p>";
foreach ($result as $row) {
    echo "<table border='1px'>
    <tr> 
    <th>titel</th>
    <th>inhoud</th>
    <th>categorie</th>
            <tr>
            <td>". $row['titel'] . "</td>
            <td>". $row['inhoud']. "</td>
            <td>". $row['categorie']."</td>";
    if($_SESSION['mode'] == 'admin'){
        echo "<th colspan='2'>acties</th>";
        }
    if($_SESSION['mode'] == 'admin'){
        echo "<td>". $row['newsid']. "</td>";
        echo "<td><a href='edit.php?newsid=" . $row['newsid'] ."'>" . "wijzigen</a></td>";
        echo "<td><a href='delete.php?newsid=" . $row['newsid'] ."'>" . "verwijder</a></td>";
    }
    echo "</tr>";
echo "
</div>
<div class='populair'>
";

    $result = data("SELECT * FROM news WHERE categorie = 'populair'", "ja");
echo "<p>populair</p>";
}
foreach ($result as $row) {
    echo "<table border='1px'>";
    echo "<tr> 
    <th>titel</th>
    <th>inhoud</th>
    <th>categorie</th>";
    echo "<tr>";
    echo "<td>". $row['titel'] . "";
    echo "<td>". $row['inhoud']. "";
    echo "<td>". $row['categorie']."</td>";
    if($_SESSION['mode'] == 'admin'){
        echo "<th colspan='2'>acties</th>";
        }
    if($_SESSION['mode'] == 'admin'){
        echo "<td>". $row['newsid']. "</td>";
        echo "<td><a href='edit.php?newsid=" . $row['newsid'] ."'>" . "wijzigen</a></td>";
        echo "<td><a href='delete.php?newsid=" . $row['newsid'] ."'>" . "verwijder</a></td>";
    }
    echo "</tr>";
}
echo"
</div>
<div class='school'>
";
$result = data("SELECT * FROM news WHERE categorie = 'school'" , "ja");
echo "<p>school</p>";
foreach ($result as $row) {
    echo "<table border='1px'>";
    echo "<tr> 
            <th>titel</th>
            <th>inhoud</th>
            <th>categorie</th>";
    echo "<tr>";
    echo "<td>". $row['titel'] . "";
    echo "<td>". $row['inhoud']. "";
    echo "<td>". $row['categorie']."</td>";
    if($_SESSION['mode'] == 'admin'){
        echo "<th colspan='2'>acties</th>";
        }
    if($_SESSION['mode'] == 'admin'){
        echo "<td>". $row['newsid']. "</td>";
        echo "<td><a href='edit.php?newsid=" . $row['newsid'] ."'>" . "wijzigen</a></td>";
        echo "<td><a href='delete.php?newsid=" . $row['newsid'] ."'>" . "verwijder</a></td>";
    }
    echo "</tr>";
}
echo "</div>";
echo "</div>";
// if($_SESSION['mode'] == 'admin'){
// echo "<p>Klik op het kruis om een record te verwijderen</p>";
// }
echo "</div>";
?>

</table>
</body>
</html>