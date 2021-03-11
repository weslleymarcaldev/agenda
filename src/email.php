<?php

    class Email 
    {
        public $email;

        public function __construct(string $email){
            $this->email=$email;
        }
        public function recuperaEmail():string
        {
            return $this->email;
        }
        public function validaEmail($email)
        {
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }
    }