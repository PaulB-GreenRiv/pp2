<?php
    function printArr($numArray) {
        foreach ($numArray as $num)
        {
            echo "<p>$num</p>";
        }
    }

    function findLargest($numArray) {
        $temp = 0;
        foreach ($numArray as $num)
        {
            if ($num > $temp)
            {
                $temp = $num;
            }
        }
        return $temp;
    }