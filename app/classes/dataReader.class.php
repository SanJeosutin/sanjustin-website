<?php
class DataReader{
    static function readRawData($source){
        $i = 1;
        $rawdata = array();
        $handle = fopen($source, "r") or die ("Unable to open file!");

        if(is_readable($source)){
            while(!feof($handle)){
                $line = fgets($handle);
                if(trim($line) != ""){
                    array_push($rawdata, $line);
                    echo "$i<br>";
                    $prevLine = $rawdata[$i-1];
                    $currLine = $line;
                    echo "PREV: ".$prevLine."<br>";
                    echo "CURR: ".$currLine."<br>";
                    var_dump($rawdata);
                    echo "<br><br>";
                    $i++;
                }
                

                //if(substr($prevLine, 1) == "#TITLE"){
                //    echo "<p class=\"lead\">".substr($currLine, 1)."</p>";
                //}
                //else{
                //    echo "<p>$currLine</p>";
                //}
                
            }
        }
    }
}
?>