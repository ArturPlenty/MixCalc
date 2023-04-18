<?php

    class Add extends Connect{

        private $liquid;
        private $liter;

        public function __construct() {
            
            $this->liquid = $_POST['liquid'];
            $this->liter = $_POST['liter'];
        }

        //* The liquids table is filled with liquid and liter from the textboxes
        public function addLiquid() {

            $add = "INSERT INTO Liquids(liquid,liter) VALUES ('$this->liquid', '$this->liter')";

            mysqli_query($this->dbConnect(), $add);
        }
    }

?>