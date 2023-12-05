<!DOCTYPE html>
<html>
<body>

<?php

$leeftijd = 18;

$stempas = true;

if($leeftijd >= 16){
    echo "je mag je scooterrijbewijs halen";
}

else if($leeftijd <= 18 &&$leeftijd >= 18 && $stempas == true){
    echo "je mag stemmen";
}

else if($leeftijd <= 18 && $leeftijd >= 18 && $stempas == false){
    echo "je mag niet stemmen want je hebt geen stempas";
}

?>
</body>
</html>
