<head>
  <link rel="stylesheet" href="styles.css">
</head> 
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include "connect.php";
    
    
    $sql= "UPDATE berichten SET 
            bericht = :bericht
        WHERE berichtid = :berichtid
        ";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->execute(
        [
            'bericht'=>$_POST['bericht'],
            'berichtid'=>$_POST['berichtid']
        ]
        
    );
    
    
    if($stmt->rowCount() == 1){
        echo "<script>alert('bericht is bewerkt'); </script>";
        echo "<script>location.replace('main.php'); </script>";
    } else{
        echo '<script>alert("bericht is NIET bewerkt");  location.replace("main.php"); </script>';
    }

    }
?>