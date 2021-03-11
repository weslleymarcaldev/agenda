<?php 

    class Contato
    {
        public $nome;
        private $tel;
        private $email;

        public function __construct(Nome $nome, Tel $tel, Email $email)
        {
            $this->nome = $nome;
            $this->tel = $tel;
            $this->email = $email;
        }    
        public function recuperaNomeTitular()
        {
            return $this->nome->recuperaNome();
        }
        public function recuperaEmailTitular()
        {
            return $this->email->recuperaEmail();
        }
        public function recuperaTelTitular()
        {
            return $this->tel->recuperaTel();
        }
    }
