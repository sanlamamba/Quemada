<?php

     class DB
     {
          public $host;
          private $username;
          private $mdp;
          private $nomBase;
          
          public function __construct(string $host ="localhost",string $username = "root",string $mdp = "", string $nomBase)
          {
               $this->host = $host;
               $this->username = $username;
               $this->mdp = $mdp;
               $this->nomBase = $nomBase;
          }

          public function getConnection()
          {
               $connect = mysqli_connect($this->host,$this->username,$this->mdp,$this->nomBase);
               if($connect) return $connect;
               return 400;
          }
          public function __toString()
          {    
               return "<h1>Propriete Connection</h1> : <br/>".
                         "<h4>Nom BD: ".$this->nomBase."<h4<br/>".
                         "Host : ".$this->host;
          }
     }


