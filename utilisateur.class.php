<?php
    class Utilisateur{
        protected $user_name;
        protected $user_pass;

        public function __construct($n, $p){
            $this->user_name = $n;
            $this->user_pass = $p;
        }
        
        public function getNom(){
            return $this->user_name;
        }
        
        public function setNom($new_user_name){
            $this->user_name = $new_user_name;
        }
        
        public function setPasse($new_user_pass){
            $this->user_pass = $new_user_pass;
        }
    }
?>