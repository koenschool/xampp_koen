<head>
    <link rel="stylesheet" href="style.css">
</head>
<?php
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
?>
