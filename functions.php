<?php

    //#2
    function printArr($numArray) {
        foreach ($numArray as $num)
        {
            echo "<p>$num</p>";
        }
    }

    //#4
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

    //#5
    function removeDups($numArray) {
        $retArray = array();
        foreach ($numArray as $num)
        {
            if (!in_array($num, $retArray))
            {
                array_push($retArray, $num);
            }
        }
        return $retArray;
    }

    //#6
    function distribution($numArray) {
        sort($numArray);
        $retArray = array();
        foreach ($numArray as $num)
        {
            $retArray[$num] = 0;
        }
        foreach ($numArray as $num)
        {
            $retArray[$num] = 1 + $retArray[$num];
        }
        return $retArray;
    }