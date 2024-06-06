<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>statistiekensysteem</title>
    <link rel="stylesheet" href="allcss.css?<?php echo time(); ?>">
</head>
<body>
    

<?php
// gemaakt door Koen Polfliet
include "connect.php";
// aan het uit knop in de code om niet altijd iets naar de database te sturen
$insert = true;
$showdata = false;
    
// land ophalen
$land = file_get_contents("https://ipapi.co/languages");
// ip adres ophalen
// $ip_adres = $_SERVER['REMOTE_ADDR'];
$ip_adres = file_get_contents("https://ipapi.co/ip");
// provider ophalen
$provider = gethostbyaddr($_SERVER['REMOTE_ADDR']);
// browser ophalen
$server = $_SERVER['HTTP_USER_AGENT'];
    switch($server){
        case strpos($server, "Firefox") !== false : $browser="Firefox";  break;
        case strpos($server, "MSIE") !== false: $browser="MSIE" ;  break;
        case strpos($server, "Chrome") !== false: $browser="Google" ;  break;
        case strpos($server, "Safari") !== false: $browser="Safari" ;  break;
        case strpos($server, "Opera") !== false: $browser="Opera" ; break;
        default:  break;
    }

    // datum en tijd ophalen
    $datum_tijd = date("Y-m-d_h:i:s");
    // vorige pagina ophalen
    if(isset($_SERVER['HTTP_REFERER'])){
    $referer = $_SERVER['HTTP_REFERER'];
    }
    else{
        $referer = "geen referer";
    }

    if($insert== true){
    $sql= "INSERT INTO bezoekers (land, ip_adres, provider, browser, datum_tijd, referer)
    VALUES (:land, :ip_adres, :provider, :browser, :datum_tijd, :referer );";


$query = $conn->prepare($sql);

$query->execute(
 [
    'land'=>$land,
    'ip_adres'=>$ip_adres,
    'provider'=>$provider,
    'browser'=>$browser,
    'datum_tijd'=>$datum_tijd,
    'referer'=>$referer
 ]
);
    }
// maak een query
$sql="SELECT * FROM bezoekers";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result =$stmt->fetchALL(PDO::FETCH_ASSOC);
if($showdata == true){
echo $land;
echo  "<br>".$ip_adres;
echo "<br>". gethostbyaddr($ip_adres);
echo "<br>". $browser;
echo "<br>". date("Y-d-m_h:i");
echo "<br>". $referer;
}
?>

<h2>Bezoekers statistieken.</h2>
<a href="page1.php">Terug naar page 1.</a><br>
<a href="page2.php">Terug naar page 2.</a><br><br>
<table border='1px'>
    <tr>
<th>ID</th>
<th>Land</th>
<th>IP adres</th>
<th>Provider</th>
<th>Browser</th>
<th>Datum tijd</th>
<th>Referer</th>
  </tr>

    <?php
foreach ($result as $row) {
    echo "<tr>";
    echo "<td>". $row['id'] . "</td>";
    echo "<td>". $row['land']. "</td>";
    echo "<td>". $row['ip_adres']. "</td>";
    echo "<td>". $row['provider']. "</td>";
    echo "<td>". $row['browser']. "</td>";
    echo "<td>". $row['datum_tijd']. "</td>";
    echo "<td>". $row['referer']. "</td>";
    echo "</tr>";
}

?>

</table>
</body>
</html>