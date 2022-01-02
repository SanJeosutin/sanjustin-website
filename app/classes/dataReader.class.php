<?php
class DataReader{
    static function readRawData($source){
        $rawData = fopen($source, "r") or die ("Unable to open file!");
        
        
        
        echo fread($rawData,filesize($source));
        fclose($rawData);
    }

    static function format($symbol){
        switch ($symbol) {
            case '#':
                # code...
                break;
            case '"':
                # code...
                break;

            case '{':
                # code...
                break;

            case '[':
                # code...
                break;

            case '//':
                # code...
                break;

            default:
                # code...
                break;
        }
    }
}
?>