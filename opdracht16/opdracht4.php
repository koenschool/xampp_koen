<head>
    <link rel="stylesheet" href="style.css">
</head>
<?php
// gemaakt door Koen Polfliet
// functie selecteer data

// connect data base
try {
    $conn = new PDO("mysql:host=localhost;dbname=cijfers", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //   echo "Connected successfully<br>";
  } catch(PDOException $e) {
  //   echo "Connection failed: " . $e->getMessage();
  }

// maak een query

function data($code){
    global $conn;
    $sql=$code;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result =$stmt->fetchALL(PDO::FETCH_ASSOC);
    return $result;
}

$result = data("SELECT * FROM cijfers");



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


$result = data("SELECT MAX(cijfer) AS cijfer FROM cijfers;");
echo "het hoogste cijfer is: ". $result[0]['cijfer'];
$result = data("SELECT MIN(cijfer) AS cijfer FROM cijfers;");
echo "<br></b>het laagste cijfer is: ". $result[0]['cijfer'];
$result = data("SELECT AVG(cijfer) AS cijfer FROM cijfers;");
echo "<br>het gemiddelde cijfer is: ". $result[0]['cijfer'];

?>