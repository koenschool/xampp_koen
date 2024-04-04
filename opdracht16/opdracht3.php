<head>
    <link rel="stylesheet" href="style.css">
</head>
<?php



try {
  $conn = new PDO("mysql:host=localhost;dbname=bericht", "root", "");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully<br>";
} catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
}

    $server = $_SERVER['HTTP_USER_AGENT'];
    switch($server){
        case strpos($server, "Firefox") !== false : $browser="Firefox"; echo "U gebruikt Firefox"; break;
        case strpos($server, "MSIE") !== false: $browser="MSIE" ; echo "U gebruikt Internet Explorer"; break;
        case strpos($server, "Chrome") !== false: $browser="Google" ; echo "U gebruikt Chrome"; break;
        case strpos($server, "Safari") !== false: $browser="Safari" ; echo "U gebruikt Safari"; break;
        case strpos($server, "Opera") !== false: $browser="Opera" ; echo "U gebruikt Opera"; break;
        default: echo "U gebruikt een onbekende browser"; break;
    }
    echo "<br>";
    switch($server){
        case strpos($server, "Windows") !== false : $os="Windows"; echo "U gebruikt Windows"; break;
        case strpos($server, "Apple") !== false: $os="Apple"; echo "U gebruikt Apple"; break;
        case strpos($server, "Linux") !== false: $os="Linux"; echo "U gebruikt Linux"; break;
        case strpos($server, "Android") !== false: $os="Android"; echo "U gebruikt Android"; break;
        default: echo "U gebruikt een onbekend stuursysteem"; break;
    }

    echo "<br>";
    
    $sql= "INSERT INTO webbrowser (browser, os)
           VALUES (:browser, :os);";
    
    
    $query = $conn->prepare($sql);
    
    $query->execute(
        [
            'browser'=>$browser,
            'os'=>$os
        ]
    );

    $sql="SELECT browser, count(*) AS aantal FROM webbrowser GROUP BY browser ORDER BY aantal DESC;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result =$stmt->fetchALL(PDO::FETCH_ASSOC);

    echo "<table border=1px   style='max-width: 100px;'";
        echo "<tr>";
        echo "<th>". "webbrowser";
        echo "<th>". "bezoeken";
        echo "</tr>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>". $row['browser'];
        echo "<td>". $row['aantal'];
        echo "</tr>";
    }  
    

?>