<?php

    class Calculate extends Connect {

        var $total_liter;
        var $percent;

        public function calculateLiter() {

            $select = mysqli_query($this->dbConnect(), "SELECT liter FROM Liquids");

            while($row = mysqli_fetch_assoc($select)) {

                $this->total_liter += $row['liter'];
            }

        }

        public function calculatePercent() {

            $select = mysqli_query($this->dbConnect(), "SELECT liquid, liter FROM Liquids");

            while($row2 = mysqli_fetch_assoc($select)) {

                $this->percent = ($row2['liter'] * 100 / $this->total_liter);

                echo $row2['liquid'] . " has " . round($this->percent, 2) . " %  <br>";
            }
        }

        public function outputTotalLiter() {

            echo $this->total_liter . " liters is the total amount of your mixture";
        }
    }

?>