<?php 
    
    class Tel 
    {
        public $tel;

        public function __construct(string $tel)
        {
            $this->tel=$tel;
        }
        public function recuperaTel():string 
        {
            return $this->tel;
        }
    }