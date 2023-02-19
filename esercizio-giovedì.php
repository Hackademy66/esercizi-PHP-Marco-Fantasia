<?php


//Esercizio checkPassword 

//Regole:
// 1 - Almeno 8 caratteri
// 2 - Almeno 1 maiuscola
// 3 - Almeno 1 numero
// 4 - Almeno 1 carattere speciale


const SpecialCaracters = ["!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "-", "_", "=", "+",
      "[", "]", "{", "}", "|", "\\", ";", ":", "'", "\"", "<", ">", ",", ".", "?", "/", "~", "`"
  ];

$password = redline("inserisci la tua password: \n");


// // REGOLA 1: la password deve contenere almeno 8 caratteri


function checkLength($pwd){
    if(strlen($pwd) > 8){
        echo "password accettata!";
        return true;
    } else{
        return false;
    }
}



// REGOLA 2: la password deve contenere almeno 1 maiuscola


function checkUppercase($pwd){
    for($i = 0; $i < strlen($pwd); $i++ ){
        if(ctype_upper($pwd[$i])){
            return true;
        } else{
            return false;
        }
    }
}



// REGOLA 3: la password deve contenere almeno 1 numero


function checkNumber($pwd){
    for($i = 0; $i < strlen($pwd); $i++){
        if(is_numeric($pwd[$i])){
            return true;
        } else{
            return false;
        }
    }
}



// REGOLA 4: la password deve contenere almeno 1 carattere speciale



function checkSpecialCaracter($pwd, $arr){
    for($i = 0; $i < strlen($pwd[$i]); $i++){
        if(in_array($pwd[$i], $arr)){
            return true;
        } else{
            return false;
        }
    }
}


// Adesso controlliamo che tutte le condizioni risultano quando inseriamo la password


function checkPassword($pwd, $arr){
 if(checkLength($pwd) && checkUppercase($pwd) && checkNumber($pwd) && checkSpecialCaracter($pwd, $arr)){
    return true;
 } else{
    return false;
 }
}


// Se volessimo reinserire la password nel caso in cui 
// anche solo una delle condizioni non sia rispettata correttamente allora concludiamo così


do{
    $password = redline("inserisci nuovamente la tua password \n");

} while(checkPassword($pwd) == false);




