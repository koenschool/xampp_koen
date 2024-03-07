<?php
    session_start();
try{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker","root", "");
    if(isset($_POST['inloggen'])){
        $username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $query = $db->prepare("SELECT * FROM gebruikers WHERE username = :user");
        $query->bindParam("user", $username);
        $query->execute();
        if($query->rowCount() == 1){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $result["password"])){
                $_SESSION['username'] = $username;
                header("Location: _index.php");
                
            }
            else{
                echo "Onjuiste gegevens!";
            }
        }
        else{
            echo "Gebruiker bestaat niet.";
        }
        echo "<br>";
    }
} catch(PDOException $e){
    die("Error!: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="inloggen" value="Inloggen">
    </form>
</body>
</html>