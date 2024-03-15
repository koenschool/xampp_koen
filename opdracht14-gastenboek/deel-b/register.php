<head>
  <link rel="stylesheet" href="styles.css">
</head> 
<?php
try{

$db = new PDO("mysql:host=localhost;dbname=bericht", "root", "");
if(isset($_POST['regis'])){
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = $db->prepare("INSERT INTO gebruikers (username, password) VALUES('" . $_POST['username'] . "', '" . $password . "')");
    if($query->execute()){
        echo "De nieuwe gebruiker is toegevoegd.";
    }
    else{
     echo "Er is iets fout gegaan.";
    }
}
}
catch(PDOException $e){
    die("Error!: " . $e->getMessage());
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>register</title>
</head>
<body>
    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username"require><br>
        <label>Password:</label><br>
        <input type="password" name="password"require><br>
        <input type="submit" name="regis" value="Register">
    </form>
</body>
</html>