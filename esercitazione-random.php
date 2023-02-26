<?php

//  Scrivi una funzione che dato un numero intero (massimo 9999) conti da quante cifre è formato. 
// Esempi:
//  Input : 9
// Output :  1 cifra
//  Input : 99
// Output :  2 cifre


// $number = 9999;


// function getNumberLength($number){
 //     if($number < 10){
  //         echo "il numero selezionato è di 1 cifra";
  //     } else if($number >= 10 && $number < 100){
  //         echo "il numero selezionato è di 2 cifre";
 //     } else if($number >= 100 && $number < 1000){
  //         echo "il numero selezionato è di 3 cifre";
  //     } else{
  //         echo "il numero selezionato è di 4 cifre";
 //     };
  // }
                    
 // echo(getNumberLength($number));
                    
                    
                    
                    
 // [ ] Scrivi due funzioni una che prenda in input un array di numeri e restituisca il maggiore,
  // [ ]   l'altra che restituisca il minore.
 // [ ]   Esempio:
  // [ ]   Input: a = 1, b = -10, c = 4 
   // [ ]   Output: minore = -10, maggiore = 4
                    
                    
 // $a = 1;
  // $b = -10;
  // $c = 4;
 // $array = array($a, $b, $c);
                    
   // function getMin($array){
     //     $min = 0;
                        
 //     foreach($array as $number){
   //         if($number < $min){
   //             $min = $number;
//         }
  //     }
   //     return $min;
  // }
                                
                                
    // function getMax($array){
   //     $max = 0;
                                    
   //     foreach($array as $number){
   //         if($number > $max){
   //             $max = $number;
    //         }
   //     }
   //     return $max;
   // }
                                            
                                            
                                            
// echo(getMax($array)); 
  // echo(getMin($array));
                                            
                                            
 // Dato un array di numeri, creare una funzione che restituisca la somma di tutti i numeri positivi.
// Nota: se non c'è nulla da sommare, la somma è predefinita a 0.
  // sumPositives([1,-4,7,12]) ---> 1 + 7 + 12 = 20
   // sumPositives([-1,-4,-7,-12]) ---> = 0
                                            
                                            
                                            
 // $a = 1;
  // $b = -4;
 // $c = 7;
 // $d = 12;
                                            
    // $array = array($a, $b, $c, $d);
                                            
                                            
                                            
   // array_splice($array, 1, 1);
                                            
                                            
   // var_dump($array);
                                            
  // $sum = array_sum($array);
                                            
  // echo($sum);
                                            
                                            
  // La nostra squadra di calcio ha concluso il campionato. Il risultato di ogni partita ha l'aspetto di "x:y". I risultati di tutte le partite sono registrati nell’array.
  // Esempio :
    // ['1:0','2:0','3:0','4:0','2:1','3:1','4:1','3:2','4:2','4:3']
    // Scrivere una funzione che prenda quest’array e conti i punti della nostra squadra nel campionato.
    // Regole per il conteggio dei punti per ogni partita:
 // se x > y: 3 punti
    // se x < y: 0 punti
  // se x = y: 1 punto
    // calculatePoints(["1:0","2:0","3:0","4:0","2:1","3:1","4:1","3:2","4:2","4:3"]) ---> 30
 // calculatePoints(["1:1","2:2","3:3","4:4","2:2","3:3","4:4","3:3","4:4","4:4"]) ---> 10
  // calculatePoints(["0:1","0:2","0:3","0:4","1:2","1:3","1:4","2:3","2:4","3:4"]) ---> 0
  // calculatePoints(["1:0","2:0","3:0","4:0","2:1","1:3","1:4","2:3","2:4","3:4"]) ---> 15
                                            
                                            
                                            
                                            
   // function calculatePoints($results){
   //     $points = 0;
                                                
    //     foreach($results as $result){
     //         $scores = explode(':', $result);
                                                    
    //         $x = $scores[0];
  //         $y = $scores[1];
                                                    
                                                    
   //         if($x > $y){
 //             $points += 3;
   //         } elseif($x == $y){
    //             $points += 1;
   //         }
   //     }
   //     return $points;
 // }
                                            
                                            
    // $results = array('1:0','2:0','3:0','4:0','2:1','3:1','4:1','3:2','4:2','4:3');
                                            
// echo(calculatePoints($results));





                                            
  



                                        

                                        
                                          



                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            