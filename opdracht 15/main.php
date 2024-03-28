<?php

echo "<style>a {
  color: blue;
  text-decoration: inherit;
}</style>";
// gemaakt door koen polfliet
//functie connectie maken met data base fiets maken
include "functions.php";



    $result = get("*", "poll", false);
    $resultt  = get("*", "optie", false);
    $resulttt  = get("poll", "optie", false);
foreach ($result as $row) {
  echo "<form method='post'>";
          echo $row["vraag"],"<br>";
          echo "<a href='edit.php?id=" . $row['id'] ."'>" . "wijzig</a><br>";
          echo "<a href='delete.php?id=" . $row['id'] ."'>" . "verwijder</a><br>";
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
        header("Refresh:0");

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