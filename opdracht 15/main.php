<?php
// gemaakt door koen polfliet
//functie connectie maken met data base fiets maken
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
    function get($data, $base){
      global $db;
      $query = $db->query("SELECT $data FROM $base");
      $query->execute();
      $result = $query->fetchALL(PDO::FETCH_ASSOC);
      return $result;
    }



    $result = get("*", "poll");
    $resultt  = get("*", "optie");
    $resulttt  = get("poll", "optie");
foreach ($result as $row) {
  echo "<form method='post'>";
          echo $row["vraag"],"<br>";
      foreach ($resultt as $roww) {   
        if($row["id"] == $roww["poll"]){
        echo "<input type='radio' name='kies' value='" . $roww["id"] . "' required>" . $roww["optie"] . "</input><br>";
      }

    }
          echo "</select>";
      echo "<input type='submit' name='send' value='Submit'>";
      echo "</form>";
  }

    //sturen


      if(isset($_POST['send'])){
        if(($_POST['kies'] == null)){
          echo "kies een optie";
        }
        $kies = $_POST['kies'];
        $sql = "UPDATE optie SET stemmen = stemmen + 1 WHERE id=$kies";
        $db->query($sql);
        $kies = null;

      }


      //votes


      echo "<br><hr><br>";
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
