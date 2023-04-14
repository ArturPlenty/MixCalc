<?php

    class Save extends Connect {

        public function saveLid() {

            $select = mysqli_query($this->dbConnect(), "SELECT lid FROM Liquids");

            while($row = mysqli_fetch_array($select)) {

                $add = "INSERT INTO L_to_m(lid) VALUES ('$row[0]')"; 

                mysqli_query($this->dbConnect(), $add);
            }
        }

        public function saveMid() {

            $select = mysqli_query($this->dbConnect(), "SELECT mid FROM Mixtures");

            while($row = mysqli_fetch_array($select)) {

                $add = "UPDATE L_to_m SET mid=$row[0]";

                mysqli_query($this->dbConnect(), $add);
            }
        }
    }

?>