<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rekenmachine</title>
    <link rel="stylesheet" href="allcss.css?<?php echo time(); ?>">
    <script defer src="code.js?<?php echo time(); ?>"></script>
    

</head>
<body>
    <?php
    include "connect.php";
    
    ?>
    <div class="reken">
    <input type="text" id="main" readonly><br><br>
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

    <button onclick="cal(0)">0</button>
    <button onclick="cal('.')">.</button>
    <button onclick="cal()">mod</button>
    <button onclick="cal('=')">=</button><br>

    <button onclick="cal('wor')">√</button>
    <button onclick="cal('^')">^</button>
    <input type="number" id="rond" placeholder="decimaal" min="0" max="10">
    </div>
</body>
</html>