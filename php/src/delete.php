<?php

    class Delete extends Connect {

        var $id;

        //* Delete option is generated and the ID of the selected liquid gets fetched
        public function selectLiquidToDelete() {

            $select = mysqli_query($this->dbConnect(), "SELECT * FROM Liquids");

            while($row3 = mysqli_fetch_assoc($select)) {

                echo $row3['liquid'] . ': ' . $row3['liter'] . ' Liter' . "<a href='index.php?id=" . $row3['lid'] . "'> Delete </a> <br>";
            }
        }

        //* After the ID got fetched the selected liquid gets deleted
        public function deleteValues() {

            $this->id = $_GET['id'];

            mysqli_query($this->dbConnect(), "DELETE FROM Liquids WHERE lid = $this->id");
        }
    }

?>