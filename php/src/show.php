<?php

    class Show extends Connect {

        //* When the show button is presses each added liquid will be shown
        public function showLiquids() {

            $select = mysqli_query($this->dbConnect(), "SELECT liquid, liter FROM Liquids");

            while($row = mysqli_fetch_assoc($select)) {

                echo $row['liquid'] . ': ' . $row['liter'] . ' liter' . '<br>';
            }
        }
    }

?>