<?php
    function iscsv($fileName) {
        $ext = explode('.', $fileName);
        if ($ext[count($ext)-1] != 'csv') {
            return false;
        } else {
            return true;
        }
    }

    function validatecsv($fileName) {
        if (iscsv($fileName) == false) {
            $ext = explode('.', $fileName);
            array_push($ext, 'csv');
            echo "added 'csv' to the end of this array, it is now:", implode('', $ext);
        }
    }

    function getdata($variableName, $fileName) {
        echo iscsv($fileName) ? "yes" : "not. yet.";
        validatecsv($fileName);
    }

    getdata("hello.csv.cake.apple.");
            //tood: i feel like this is wrong but its 4:14am so this is probably one of the worst pieces of code i've ever written oh god im tiredd and should sleep
?>
