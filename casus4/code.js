function cal(num){
    var macht;
    var num2;
    var main = document.getElementById("main");

    switch(macht){
        case true:
            main.value = num2;
            break;
        case false:
            main.value = num;
            break;
    }

    switch(num){
        case 'c':
            mainv = '';
            break;
        case '=':
            if(macht == true){
                Math.pow()
            }
            else if(macht == false){
            num2 = eval(mainv);
            mainv = num2;
            }
            break;
        case 'wor':
            num2 = mainv + '√';
            mainv = Math.sqrt(mainv);
            break;
        case '^':
            num2 = mainv + '^';
            mainv = num2;
            macht=true;
            break;
        default:    
            num2 = mainv + num;
            mainv = num2;

    }

}