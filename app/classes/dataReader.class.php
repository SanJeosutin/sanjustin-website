<?php
class DataReader{
    static private function readRawData($source){
        $rawData = fopen($source, "r") or die ("Unable to open file!");
        fread($rawData,filesize($source));
        fclose($rawData);
    }

    static function format($symbol){
        $rawData = self::readRawData("../data/2022 Goal.txt");
        foreach ($rawData as $data) {
            if(preg_match("/{$symbol}/", $data)){
                $data = str_replace("{$symbol}", "", $data);
                echo $data;
            }
        }
    }
}
?>