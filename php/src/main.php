<?php

    $mix = new Values();

    if(isset($_POST['add'])) {

        $mix->addLiquid();
    }

    if(isset($_POST['show'])) {

        $mix->showLiquids();
    }

    if(isset($_POST['calculate'])) {

        $mix->calculateLiter();
        $mix->calculatePercent();
        $mix->outputTotalLiter();
    }

    if(isset($_POST['delete'])) {

        $mix->selectLiquidToDelete();
    }

        if(isset($_GET['id'])) {

            $mix->deleteValues();
        }


    if(isset($_POST['save'])) {

        
    }

?>