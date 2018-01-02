<?php
    function iscsv($fileName) {
        if (strlen($fileName) < 3) { return false; }
        $ext = substr($fileName, -3);
        if ($ext == "csv") {
            return true;
        } else {
            return false;
        }
    }

    function validatecsv($fileName) {
        if (!iscsv($fileName)) {
            $fileName .= ".csv";
            echo "added 'csv' to the end of this array, it is now:", $fileName;
            return $fileName;
        }
    }

    function getdata($fileName) {
        echo iscsv($fileName) ? "yes" : "no";
        validatecsv($fileName);
    }

    getdata("hello.csv.cake.apple.");
?>
