var macht;
function cal(num){
    var num2;
    var berekening = document.getElementById("berekening");
    var resultaat = document.getElementById("resultaat");
    




    switch(num){
        case 'c':
            berekening.value = '';
            resultaat.value = '';
        break;
        case '=':
            Number(berekening.value);
            num2 = eval(berekening.value).toFixed(document.getElementById("afronding").value);
            // (Math.round(num * 100) / 100).toFixed(2);
            // var berekening = document.getElementById("berekening");
            resultaat.value = num2;
        break;
        case '^':
            num2 = berekening.value + '**';
            berekening.value = num2;
        break;
        case 'wor':
            num2 = berekening.value + '√';
            berekening.value = Math.sqrt(berekening.value);
        break;
        // case '%':
        //     num2 = berekening.value + '√';
        //     berekening.value = Math.sqrt(berekening.value);
        // break;
        // case '^':
        //     num2 = berekening.value + '^';
        //     berekening.value = num2;
        //     macht=true;
        //     alert(macht);
        //     break;
        default:    
            num2 = berekening.value + num;
            berekening.value = num2;

    }

}

function gebruik(bereken){
    document.getElementById("berekening").value += bereken;
}

function test(){
    console.log(eval(9 % 7));
    // alert(Math.pow(6, 3));
}
// location.replace('select.php?berekening=',number1toString(),'&resultaat=',number2toString());
// var number1 = document.getElementById('berekening').value;
// var number2 = document.getElementById('resultaat').value;
// var number1 = number1.toString();
// var number2 = number2.toString();
// location.replace('select.php?berekening=',number1,'&resultaat=',number2,'');
// echo "<script>var number1 = document.getElementById('berekening').value;</script>";
// echo "<script>var number2 = document.getElementById('resultaat').value;</script>";
// echo "<script>var number1 = number1.toString();</script>";
// echo "<script>var number2 = number2.toString();</script>";
// echo "<script>location.replace('select.php?berekening=',number1,'&resultaat=',number2,'');</script>";