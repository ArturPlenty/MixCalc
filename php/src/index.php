<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mixture Calculator</title>

</head>

<body>

    <a>Mixture Calculator</a>

    <form autocomplete="off" method="post">
        <small>Liquid:</small> <input type="text" name="liquid">
        <small>Liter:</small> <input type="text" name="liter">
        <input type="submit" name="add" value="Add">
        <input type="submit" name="show" value="Show">
        <input type="submit" name="calculate" value="Calculate">
        <input type="submit" name="delete" value="Delete">
        <input type="submit" name="save" value="Save">
    </form>

    <?php

        error_reporting(E_ALL ^E_WARNING);

        include_once('connect.php');
        include_once('add.php');
        include_once('show.php');
        include_once('calculate.php');
        include_once('delete.php');
        include_once('save.php');

        include_once('main.php');

    ?>
    
</body>

</html>