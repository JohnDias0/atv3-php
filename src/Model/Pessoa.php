<?php
    class Pessoa{
        public $nome;
        private $cod;

        public function __construct(String $nome, int $cod) {
            $this->nome = $nome;
            $this->cod = $cod;
        }
        // public function getName(int $cod){
        //     if($cod = $this->cod){
        //         return $this->cod;
        //     }
        //     else{
        //         echo("Código Incorreto");
        //     }
        // }
        // public function changeName(int $cod, String $newnm){
        //     if($cod = $this->cod){
        //         $this->nome = $newnm;
        //     }
        //     else{
        //         echo("Código Incorreto");
        //     }
        // }
    }
?>