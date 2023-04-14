<?php

    $add = new Add();
    $show = new Show();
    $calcualte = new Calculate();
    $delete = new Delete();

    if(isset($_POST['add'])) {

        $add->addLiquid();
    }

    if(isset($_POST['show'])) {

        $show->showLiquids();
    }

    if(isset($_POST['calculate'])) {

        $calcualte->calculateTotalLiter();
        $calcualte->calculatePercent();
        $calcualte->outputTotalLiter();
        $calcualte->saveMixture();
    }

    if(isset($_POST['delete'])) {

        $delete->selectLiquidToDelete();
    }

        if(isset($_GET['id'])) {

            $delete->deleteValues();
        }
?>