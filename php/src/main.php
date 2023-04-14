<?php

    $add = new Add();
    $show = new Show();
    $calcualte = new Calculate();
    $delte = new Delete();

    if(isset($_POST['add'])) {

        $add->addLiquid();
    }

    if(isset($_POST['show'])) {

        $show->showLiquids();
    }

    if(isset($_POST['calculate'])) {

        $calcualte->calculateLiter();
        $calcualte->calculatePercent();
        $calcualte->outputTotalLiter();
    }

    if(isset($_POST['delete'])) {

        $delte->selectLiquidToDelete();
    }

        if(isset($_GET['id'])) {

            $delte->deleteValues();
        }


    if(isset($_POST['save'])) {

        
    }

?>