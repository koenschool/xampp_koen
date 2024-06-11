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
        default:    
            num2 = berekening.value + num;
            berekening.value = num2;

    }

}

function gebruik(bereken){
    document.getElementById("berekening").value += bereken;
}

function test(){
    console.log(eval(1.2 + 1.222).toFixed(3));
    // alert(Math.pow(6, 3));
}