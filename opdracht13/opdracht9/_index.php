<?php

session_start();
if(isset($_SESSION['username'])){
    echo "Welkom " . $_SESSION['username'];
    echo "<br>";
    if($_SESSION['username'] == 'admin'){
        echo "<p><a href='wijzig.php'>Admin kan wachtwoorden wijzigen</a></p>";
    }
    echo "<a href='logout.php'>Uitloggen</a>";
}
else{
    echo "U bent niet ingelogd.";
    echo "<br>";
    echo "<a href='login.php'>Inloggen</a>";
    echo "<br>";
    echo "<a href='register.php'>Registreren</a>";
}

?>