<?php

    class Calculate extends Connect {

        var $total_liter;

        //* The total liter is calculated
        public function calculateTotalLiter() {

            $select = mysqli_query($this->dbConnect(), "SELECT liter FROM Liquids");

            while($row = mysqli_fetch_assoc($select)) {

                $this->total_liter += $row['liter'];
            }
        }

        //* The
        public function calculatePercent() {

            $select = mysqli_query($this->dbConnect(), "SELECT * FROM Liquids");

            while($row2 = mysqli_fetch_array($select)) {

                $percent = ($row2['liter'] * 100 / $this->total_liter);

                echo $row2['liquid'] . " has " . round($percent, 2) . " %  <br>";

                $savePercent = "UPDATE Liquids SET percent=round($percent, 2) WHERE lid = $row2[0]";

                mysqli_query($this->dbConnect(), $savePercent);
            }
        }

        public function saveTotalLiter() {

            $saveTotalLiter = "INSERT INTO Mixtures(total_liter) VALUES ('$this->total_liter')";

            mysqli_query($this->dbConnect(), $saveTotalLiter);
        }

        public function outputTotalLiter() {

            echo $this->total_liter . " liters is the total amount of your mixture";
        }
    }

?>