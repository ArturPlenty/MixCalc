<?php

    class Delete extends Connect {

        var $id;

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
    }

?>