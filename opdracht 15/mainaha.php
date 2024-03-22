<?php
// gemaakt door koen polfliet
//functie connectie maken met database
function connectdb(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "polls";

  try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
    return $db;
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}

$db = connectdb();

function get($data, $base){
  global $db;
  $query = $db->query("SELECT $data FROM $base");
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}

$result = get("*", "poll");
if(empty($result)){
  echo "geen opties gevonden";
} else {
  foreach ($result as $row) {
    echo "<form method='post'>";
    echo $row["vraag"],"<br>";
    echo "<input type='radio' name='kies' value='" . $row["id"] . "' required>" . $row["optie"] . "</input><br>";
    echo "<input type='submit' value='Submit'>";
    echo "</form>";
  }
}

if(isset($_POST['kies'])){
  $kies = $_POST['kies'];
  $sql = "UPDATE optie SET stemmen = stemmen + 1 WHERE id=$kies";
  $db->query($sql);
}

echo "<br><hr><br>";

$result = get("vraag", "poll");
foreach ($result as $row) {
  echo $row["vraag"] . " votes<br>";
}

$result = get("*", "optie");
foreach ($result as $row) {
  echo $row["vraag"] . " votes<br>";
  echo $row["stemmen"] . " votes<br>";
}
?>
