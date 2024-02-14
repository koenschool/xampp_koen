<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="code.js"></script>
    <link rel="stylesheet" href="allcss.css">
</head>
<body>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
 
<?php
// gemaakt door Koen Polfliet
// functie selecteer data

// connect data base
include "connect.php";

// maak een query
$sql="SELECT * FROM cijfers";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result =$stmt->fetchALL(PDO::FETCH_ASSOC);


echo "<table border=1px id='myTable'  style='max-width: 100px;'";
    echo "<tr>";
    echo "<th>". "id"."";
    echo "<th class='leerling' onclick='sortTable()'>". "leerling"."";
    echo "<th>". "cijfer"."";
    echo "<th>". "vak"."";
    echo "<th>". "docent"."";
    echo "</tr>";
foreach ($result as $row) {
    echo "<tr>";
    echo "<td>". $row['id'] . "";
    echo "<td>". $row['leerling'] . "";
    echo "<td>". $row['cijfer']. "";
    echo "<td>". $row['vak']. "";
    echo "<td>". $row['docent']. "";
    echo "</tr>";
}
?>
</body>
</html>