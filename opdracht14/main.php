<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gastenboek</title>
    <style>
        *{
            font-family:monospace;
            color:deepskyblue;
            font-size:large;
            background-color:black;
        }
        body, .a2{
            font-family:monospace;
            color:deepskyblue;
            font-size:large;
        }
        input{
            border-color:black;
            
        }
        table{
            border-color:black;
        }
        a{
            color:cornflowerblue;
        }
        #vulling{
            margin-bottom: 7%;
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
$sql="SELECT * FROM berichten";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result =$stmt->fetchALL(PDO::FETCH_ASSOC);



?>
<form action="insert.php" method="post">
<label for="naam">naam</label>
  <input type="text" id="naam" name="naam" ><br>

  <label for="bericht">bericht</label><br>
  <input type="text" id="bericht" name="bericht" ><br>

  <input type="submit" name="opslaan" id="vulling" value="opslaan">
</form>
<hr>
<?php



foreach ($result as $row) {
    echo $row['naam']."-".$row['datumtijd']."<br>";
    echo $row['bericht']."<br><br>";

}
?>
</body>
</html>