<?php

    class Connect {

        private $servername;
        private $user;
        private $password;
        private $database ;

        //* The connection to the server and database gets created
        protected function dbConnect() {

            $this->servername = 'db';
            $this->user = 'root';
            $this->password = 'root';
            $this->database = 'MixCalc';

            $con = mysqli_connect($this->servername, $this->user, $this->password, $this->database);

            return $con;
        }
    }

?>