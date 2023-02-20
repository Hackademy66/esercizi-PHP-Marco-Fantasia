<?php


class Animal{
    // attributi pubblici

    public $nome;
    public $genere;
    public $età;


    public function __construct($nome, $genere, $età){
        $this-> nome = $nome;
        $this-> genere = $genere;
        $this-> età = $età;
    }

    public function info(){
        echo "ho un animale che si chiama $this->nome, è un $this->genere e ha $this->età.";
    }



   
   

}



$goku = new Animal('goku', 'gatto', '1 anno');

$goku->info();




















