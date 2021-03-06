<?php
    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    /*
     * Paul Butler
     * 4/15/21
     * pp2\index.php
     * Pair Program 2
     */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
    <?php
        echo "PHP Array Practice";
        $numbers = array(7, 9, 8, 9, 8, 8, 6);
        include ("functions.php");
        printArr($numbers);
        $larg = findLargest($numbers);
        echo "Largest: $larg";
        $uniqNums = removeDups($numbers);
        printArr($uniqNums);
        var_dump(distribution($numbers));
    ?>
</body>
</html>