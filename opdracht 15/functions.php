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
?>          