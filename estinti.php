<?php

include 'esercizio-zoo.php'


class Estinto extends Animal{
    public $epoca;
    

    public static $counter = 0;

    public function __construct($nome, $genere, $età, $epoca){
        
        parent::__construct($nome, $genere, $età);
        self::$counter++;
        
        $this-> epoca = $epoca;
        

    }
    public function info(){
            echo  "c'è stato un $this->genere che si chiama $this->nome. Ha $this->età, e ha vissuto nell'epoca della $this->epoca.";
        }
}


$rex = new Estinto('rex', 'dinosauro', '12 anni', 'preistoria');

$rex->info();