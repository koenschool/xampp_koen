<head>
    <link rel="stylesheet" href="style.css">
</head>
<?php
function connectdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "polls";
  
  
    try {
      $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Connected successfully<br>";
      return $db;
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }
  
  
  
      $db = connectDb();
      function get($data, $base, $extra){
        global $db;
        if($extra == false){
          $query = $db->query("SELECT $data FROM $base");
          $query->execute();
          $result = $query->fetchALL(PDO::FETCH_ASSOC);
        }
        else if(isset($extra)){
          global $db;
          $query = $db->prepare("SELECT $data FROM $base WHERE $extra");
          $query->execute();
          $result = $query->fetch(PDO::FETCH_ASSOC);
          $_SESSION['result'] = $result;
        }
        return $result;
      }
$result = get("*", "poll", false);
$resultt  = get("*", "optie", false);
$resulttt  = get("poll", "optie", false);

echo "momentele stemmen:<br>";
      foreach ($result as $row) {
        echo '<h3>'.$row["vraag"]. '</h3>';
        $totalVotes = 0;
        foreach ($resultt as $roww) {   
          if($row["id"] == $roww["poll"]){
            $totalVotes += $roww["stemmen"];
          }
        }

        foreach ($resultt as $roww) {   
          if($row["id"] == $roww["poll"]){
            $percentage = ($roww["stemmen"] / $totalVotes) * 100;
            echo 'optie: '.$roww["optie"].' met '. $roww["stemmen"] .' stemmen ('. round($percentage, 2) .'%)<br>';
          }
        }
      }

?>