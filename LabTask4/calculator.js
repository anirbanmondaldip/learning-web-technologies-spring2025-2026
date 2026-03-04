let calc = document.getElementById('calculator');

let display = document.createElement('div');
display.id = "display";
display.innerHTML = "0";
calc.appendChild(display);


let buttons = [
    '7','8','9','/',
    '4','5','6','*',
    '1','2','3','-',
    '0','C','=','+'
];


for(let i=0; i<buttons.length; i++){

    let btn = document.createElement('button');
    btn.innerHTML = buttons[i];

    calc.appendChild(btn);

    btn.addEventListener('click', buttonClick);
}

function buttonClick(){

    let value = this.innerHTML;
    let current = display.innerHTML;

    if(value == "C"){
        display.innerHTML = "0";
    }

    else if(value == "="){
        display.innerHTML = eval(current);
    }

    else{

        if(current == "0"){
            display.innerHTML = value;
        }else{
            display.innerHTML = current + value;
        }

    }

}