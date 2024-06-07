<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📱rekenmachine</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="allcss.css?<?php echo time(); ?>">
    <script defer src="code.js?<?php echo time(); ?>"></script>

</head>
<body>
    <?php
    include "connect.php";
    session_start();
    if(!isset($_SESSION['berekening'])){
        $_SESSION['berekening'] = "";
    }
    if(!isset($_SESSION['resultaat'])){
        $_SESSION['resultaat'] = "";
    }
    ?>
    <div class="reken">
    <form method="post">
    <input type="text" name="berekening" id="berekening" value="<?php echo $_SESSION['berekening']?>" readonly><label for="berekening">berekening</label><br>
    <input type="text" name="resultaat" id="resultaat" readonly value="<?php echo $_SESSION['resultaat']?>"><label for="resultaat">resultaat</label><br>
    <input type="number" name="afronding" id="afronding" placeholder="decimaal" min="0" max="10" value="0"><br><br>
    <input type="submit" class="bereken" name="bereken" value="=" onclick="cal('=')"><br>
    </form>
    <button onclick="cal('c')">C</button>
    <button onclick="cal('(')">(</button>
    <button onclick="cal(')')">)</button>
    <button onclick="cal('/')">/</button><br>

    <button onclick="cal(7)">7</button>
    <button onclick="cal(8)">8</button>
    <button onclick="cal(9)">9</button>
    <button onclick="cal('*')">*</button><br>
    
    <button onclick="cal(4)">4</button>
    <button onclick="cal(5)">5</button>
    <button onclick="cal(6)">6</button>
    <button onclick="cal('-')">-</button><br>
    
    <button onclick="cal(1)">1</button>
    <button onclick="cal(2)">2</button>
    <button onclick="cal(3)">3</button>
    <button onclick="cal('+')">+</button><br>

    <button onclick="cal(0)" style="width:80px;">0</button>
    <button onclick="cal('.')">.</button><br>

    <button onclick="cal('%')">mod</button>
    <button onclick="cal('wor')">√</button>
    <button onclick="cal('^')">^</button>
    </div>
    <!-- <button onclick="test()">test</button> -->
    <!-- <button onclick="cal('=')">=</button><br> -->
     <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $_SESSION['berekening'] = $_POST['berekening'];
        $_SESSION['resultaat'] = $_POST['resultaat'];
    
    
    $sql= "INSERT INTO berekeningen (berekening, resultaat, afronding, datum_tijd)
           VALUES (:berekening, :resultaat, :afronding, :datum_tijd);";
    
    
    $query = $conn->prepare($sql);
    
    $query->execute(
      [
            'berekening'=>$_POST['berekening'],
            'resultaat'=>$_POST['resultaat'],
            'afronding'=>$_POST['afronding'],
            'datum_tijd'=>date("Y-m-d H:i:s")
      ]
    );
    $_SESSION['berekening'] = $_POST['berekening'];
    $_SESSION['resultaat'] = $_POST['resultaat'];
    echo "<script>location.replace('select.php'); </script>";
    }
     ?>
     <table border='1px'>
    <tr>
<th>berekening</th>
<th>resultaat</th>
<th>afronding</th>
<th>datum tijd</th>
</tr>

    <?php
    $sql="SELECT * FROM berekeningen";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result =$stmt->fetchALL(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    echo "<tr>";
    echo "<td>". $row['berekening']. "</td>";
    echo "<td>". $row['resultaat']. "<button class='anders' onclick='gebruik(".strval($row['resultaat']).")'>Gebruik resultaat</button></td>";
    echo "<td>". $row['afronding']. "</td>";	
    echo "<td>". $row['datum_tijd']. "</td>";
    echo "</tr>";
}

?>

</table>
</body>
</html>