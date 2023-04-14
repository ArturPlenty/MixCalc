<?php

    $add = new Add();
    $show = new Show();
    $calcualte = new Calculate();
    $delete = new Delete();
    $save = new Save();

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
    }

    if(isset($_POST['delete'])) {

        $delete->selectLiquidToDelete();
    }

        if(isset($_GET['id'])) {

            $delete->deleteValues();
        }

    if(isset($_POST['save'])) {

        $calcualte->calculateTotalLiter();
        $calcualte->saveTotalLiter();
        $save->saveLid();
        $save->saveMid();
    }
?>