<?php
    session_start();
try{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker","root", "");
    $query = $db->query("SELECT username FROM gebruikers");
    $gebruikers = $query->fetchALL(PDO::FETCH_ASSOC);
    } catch(PDOException $e){
    die("Error!: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wijzig</title>
</head>
<body>
    <h2>Wachtwoorden wijzigen voor gebruikers</h2>
    <form action="wijzigen.php" method="post">
        <div>
            <label for="username">Gebruiker:</label><br>
            <select name="username" id="username">
                <?php
                foreach($gebruikers as $gebruiker){
                    echo "<option value='" . $gebruiker['username'] . "'>" . $gebruiker['username'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="newpassword">Nieuw wachtwoord:</label><br>
            <input type="password" name="newpassword" id="newpassword">
            </div>
            <div>
                <input type="submit" value="Wijzig">
            </div>
    </form>
</body>
</html>