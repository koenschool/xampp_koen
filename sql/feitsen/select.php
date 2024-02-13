<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, .a2{
            font-family:monospace;
            color:deepskyblue;
            background-color:grey;
            font-size:large;
        }
        table{
            border-color:black;
            background-color:black;
        }
        a{
            color:cornflowerblue;
        }
    </style>
</head>
<body>
    
 
<?php
// gemaakt door Koen Polfliet
// functie selecteer data

// connect data base
include "connect.php";

// maak een query
$sql="SELECT * FROM fietsen";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result =$stmt->fetchALL(PDO::FETCH_ASSOC);


echo "<a href='insert.php>fiets toevoegen</a>'";
echo "<br>";
echo "<a class='a2' href='insert.php'>fiets toevoegen</a>";
echo "<br>";
echo "<table border=1px   style='max-width: 100px;'";
    echo "<tr>";
    echo "<th>". "merk"."";
 "<th>". "id"."";
    echo "<th>". "type"."";
    echo "<th>". "prijs"."";
    echo "<th>". "foto"."";
    echo "<th>". "wijzigen"."";
    echo "<th>". "verijderen"."<br>";
    echo "</tr>";
foreach ($result as $row) {
    echo "<tr>";
    echo "<td>". $row['merk'] . "";
    echo "<td>". $row['id'] . "";
    echo "<td>". $row['type']. "";
    echo "<td>". $row['prijs']."";
    echo "<td>". "<img src=img/". $row['foto']. " width='100%' ' height='100%' ></td>";
    echo "<td><a href='edit.php?id=" . $row['id'] ."'>" . "wijzig</a></td>";
    echo "<td><a href='delete.php?id=" . $row['id'] ."'>" . "verwijder</a></td>";
    echo "</tr>";
}
?>
</body>
</html>