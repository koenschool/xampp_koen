<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gastenboek</title>
  <link rel="stylesheet" href="styles.css">
  <script defer src="code.js"></script>
</head>
<body>
    
 
<?php
// gemaakt door Koen Polfliet
// functie selecteer data

// connect data base
include "connect.php";

// maak een query
$sql="SELECT * FROM berichten";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result =$stmt->fetchALL(PDO::FETCH_ASSOC);


session_start();
if(isset($_SESSION['username'])){
    echo "Welkom " . $_SESSION['username'];
    echo "<br>";
    if($_SESSION['username'] == 'admin'){
        echo "<p><a href='wijzig.php'>Admin kan wachtwoorden wijzigen</a></p>";
    }
    echo "<a href='bericht.php'>Bericht toevoegen</a><br>";
    echo "<a href='logout.php'>Uitloggen</a><br><br>";
}
else{
    echo "U bent niet ingelogd.";
    echo "<br>";
    echo "<a href='login.php'>Inloggen</a>";
    echo "<br>";
    echo "<a href='register.php'>Registreren</a><br><br>";
}



if(isset($_SESSION['username'])){
    echo "<br>";
    if($_SESSION['username'] == 'admin'){
        foreach ($result as $row) {
            echo "<div class='breed' id=deela".$row['berichtid'].">";
            echo "<h1>Gebruikersnaam:</h1> <div class='head' id='gebruiker". $row['berichtid'] ."'>". $row['naam']."</div><br>";
            echo "<h1>Bericht:</h1> <div class='head' id='bericht". $row['berichtid'] ."'>".$row['bericht']."</div><br><br>";
            echo "Datum: ".$row['datumtijd']."<br>";
            echo "<input type='number' id='berichtid' name='berichtid' hidden value=".$row['berichtid']."></input><br>";
            echo "<div id=deelb".$row['berichtid']."></div></div>";
            echo "<div id='zie".$row['berichtid']."'><button onclick='wijzig(". $row['berichtid'] .")'>Wijzig</button>";
            echo "<button><a href='delete.php?berichtid=" . $row['berichtid'] ."'>Verwijder</a></button></div><br><hr>";
        }

    }
else{
    foreach ($result as $row) {
        echo "<h1>Gebruikersnaam:</h1> <div class='head' id='gebruiker'>Gebruikersnaam: ". $row['naam']."</div><br>";
        echo "<h1>Bericht:</h1> <div class='head' id='bericht'>Bericht: ".$row['bericht']."</div><br><br>";
        echo "Datum: ".$row['datumtijd']."<br>";
        echo "<div id='berichtid' hidden>ID:".$row['berichtid']."</div><br><hr>";
    }
}
}


?>
</body>
</html>