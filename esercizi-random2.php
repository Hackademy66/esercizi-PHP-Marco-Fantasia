<?php

 //     Scrivi un programma che, dato il numero dei tiri da effettuare per ciascun giocatore (N),
 //     simuli un gioco di dadi tra due utenti, stampando il giocatore che ha totalizzato più punti,
//     supponendo che ogni dado abbia al massimo 6 facce, ogni giocatore tirerà il dado N , 
 // ciò  significa che verrà generato un numero casuale ad ogni tiro che sarà
 //  sommato ai precedenti per calcolare il punteggio del giocatore                                                                    
                                            
//   // Suggerimento 
//   // Usiamo questa formula per generare un numero random
 //       Math.floor(Math.random() * (max - min + 1) + min)


//    $n = 3;

//  function playDice($n){
//     $player1 = 0;
//     $player2 = 0;

//     for($i = 1; $i < $n; $i++){
//         $player1Shots = rand(1,6);
//         $player2Shots = rand(1,6);

//         $player1 += $player1Shots;
//         $player2 += $player2Shots;


//     }
//     if($player1 > $player2){
//         echo "il vincitore è il giocatore 1 con $player1 punti.";
//     } else if($player1 < $player2){
//         echo "il vincitore è il giocatore 2 con $player2 punti.";
//     } else{
//         echo "la partita finisce in parità.";
//     };
//  }

//  echo(playDice($n));




// Scrivi una funzione che prenda in input una stringa e restituisca TRUE se è palindroma, FALSE se non lo è.
// Nel controllo scarta gli spazi e i segni di punteggiatura.
//  Esempio:
//    Input: i topi non avevano nipoti
//    Output: TRUE
//   Consigli:
//     Puoi eliminare spazi e segni -di punteggiatura usando :
//  str.replace(/\W/g, "").




$phrase = 'i topi non avevano nipoti';


$phrase = str_replace(' ', '', $phrase);








function isPalindrome($phrase){
    $reversePhrase = strrev($phrase);
    if($phrase === $reversePhrase){
        echo "true";
    } else{
        echo "false";
    };


}


echo(isPalindrome($phrase));








