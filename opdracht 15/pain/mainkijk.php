<?php
// gemaakt door koen polfliet
//functie connectie maken met data base fiets maken

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "polls";
$pollid=1;


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully<br>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$query = $conn->query("SELECT vraag FROM poll WHERE id=$pollid");
$result = $query->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>polls</title>
</head>
<body>
    <?php
    echo $result[0]["vraag"],"<br>"; 
    $sql = "SELECT * FROM optie WHERE poll=$pollid";
    $result = $conn->query($sql);
    echo "<form method='post'>";
      foreach ($result as $row) {
        echo "<input type='radio' name='kies' value='" . $row["id"] . "' required>" . $row["optie"] . "</input><br>";
      }
      echo "</select>";
      echo "<input type='submit' value='Submit'>";
      echo "</form>";
      if(isset($_POST['kies'])){
        $kies = $_POST['kies'];
        $sql = "UPDATE optie SET stemmen = stemmen + 1 WHERE id=$kies";
        $conn->query($sql);
      }

      echo "<br><hr><br>";
      $sql = "SELECT * FROM optie WHERE poll=$pollid";
      $result = $conn->query($sql);
      echo "Current Stand of Votes:<br>";
      $totalVotes = 0;
      foreach ($result as $row) {
        $totalVotes += $row["stemmen"];
      }
      foreach ($result as $row) {
        $percentage = ($row["stemmen"] / $totalVotes) * 100;
        echo $row["vraag"] . ": " . $row["id"] . " votes (" . round($percentage, 2) . "%)<br>";
      }
    ?>
</body>
</html>