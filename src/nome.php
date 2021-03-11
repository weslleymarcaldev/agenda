<?php 

    class Nome 
    {
        public $nome;

        public function __construct(string $nome)
        {
            $this->nome=$nome;
        }
        public function recuperaNome():string 
        {
            return $this->nome;
        }
    }