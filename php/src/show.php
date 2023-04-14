<?php

    class Show extends Connect {

        public function showLiquids() {

            $select = mysqli_query($this->dbConnect(), "SELECT liquid, liter FROM Liquids");

            while($row = mysqli_fetch_assoc($select)) {

                echo $row['liquid'] . ': ' . $row['liter'] . ' liter' . '<br>';
            }
        }
    }

?>