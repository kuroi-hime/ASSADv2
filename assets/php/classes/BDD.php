<?php
    class DataBase {
        private $pilote;
        private $host;
        private $dbname;
        private $username;
        private $password;

        public function __construct($pilote, $host, $dbname, $username, $password){
            $this->setPilote($pilote);
            $this->setHost($host);
            $this->setDbName($dbname);
            $this->setUserName($username);
            $this->setPassword($password);
        }

        public function getPilote(){
            return $this->pilote;
        }

        public function setPilote($pilote){
            if($pilote && $pilote!='')
                $this->pilote = $pilote;
        }

        public function getHost(){
            return $this->host;
        }

        public function setHost($host){
            if($host && $host!='')
                $this->host = $host;
        }

        public function getDbName(){
            return $this->dbname;
        }

        public function setDbName($dbname){
            if($dbname && $dbname!='')
                $this->dbname = $dbname;
        }

        public function setUserName($username){
            if($username && $username!='')
                $this->username = $username;
        }

        public function setPassword($password){
            if($password)
                $this->password = $password;
        }

        // Data Source Name
        public function getDSN(){
            return $this->getPilote().':host='.$this->getHost().';dbname='.$this->getDbName();
        }
        
        public function getPDO(){
            // $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
            return new PDO($this->getDSN(), $this->username, $this->password);
        }
    }
?>