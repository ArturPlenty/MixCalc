<?php

    class Values extends Connect{

        private $liquid;
        private $liter;
        private $total_liter;
        private $percent;
        private $id;

        public function __construct() {
            
            $this->liquid = $_POST['liquid'];
            $this->liter = $_POST['liter'];
        }

        public function addLiquid() {

            $add = "INSERT INTO Liquids(liquid,liter) VALUES ('$this->liquid', '$this->liter')";

            mysqli_query($this->dbConnect(), $add);
        }

        public function showLiquids() {

            $select = mysqli_query($this->dbConnect(), "SELECT liquid, liter FROM Liquids");

            while($row = mysqli_fetch_assoc($select)) {

                echo $row['liquid'] . ': ' . $row['liter'] . ' liter' . '<br>';
            }
        }

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

        public function selectLiquidToDelete() {

            $select = mysqli_query($this->dbConnect(), "SELECT * FROM Liquids");

            while($row3 = mysqli_fetch_assoc($select)) {

                echo $row3['liquid'] . ': ' . $row3['liter'] . ' Liter' . "<a href='index.php?id=" . $row3['lid'] . "'> Delete </a> <br>";
            }
        }

        public function deleteValues() {

            $this->id = $_GET['id'];

            mysqli_query($this->dbConnect(), "DELETE FROM Liquids WHERE lid = $this->id");
        }

        //*mysqli_query($this->dbConnect(), "UPDATE Liquids SET percent=1 WHERE lid=1");
    }

?>