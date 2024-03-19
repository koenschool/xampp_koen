<head>
  <link rel="stylesheet" href="styles.css">
</head> 
<?php

require 'connect.php';

session_start();

if(isset($_POST['username']) && isset($_POST['newpassword'])){
    $username = $_POST['username'];
    $newpassword = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);
    try{
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $query = $db->prepare("UPDATE gebruikers SET password = :newpassword WHERE username = :username");
        $query->bindParam("newpassword", $newpassword);
        $query->bindParam("username", $username);

        if($query->execute()){
            echo "Wachtwoord voor $username is gewijzigd.<br><a href='login.php'>Terug naar login</a>";
        } else{
            echo "Er is iets fout gegaan.";
        } 
    }catch(PDOException $e){
            die("Error!: " . $e->getMessage());
    }

} else{
    echo "Vul alle velden in.";
}    


?>