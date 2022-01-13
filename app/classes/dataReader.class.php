<?php
class DataReader{
    static function readRawData($source){
        $i = 0;

        $rawdata = array();
        $handle = fopen($source, "r") or die ("Unable to open file!");

        if(is_readable($source)){
            while(!feof($handle)){
                $line = fgets($handle);

                if (trim($line) != "") {
                    array_push($rawdata, $line);
                }
            }
        }

        foreach($rawdata as $data){
            //echo "<pre>$data</pre>";
            
            switch($data){
                case strpos($data, "#TITLE") !== false:
                    echo self::setTitle($rawdata[$i+1]);
                    break;
                
                case strpos($data, "#DESCRIPTION") !== false:
                    echo self::setDescription($rawdata[$i+1]);
                    break;
                
                case strpos($data, "#LIST") !== false:
                    echo self::setList($rawdata[$i+1]);
                    break;
            }
            
            $i++;
        }
    }

    private static function setTitle($title){
        return "<p class=\"lead\">$title</p>";
    }

    private static function setDescription($description){
        return "<p>$description</p>";
    }

    private static function setList($lists){
        $table = "";
        $headContent = array();
        $mainContent = array();

        $lists = explode(";", $lists);
        
        foreach($lists as $list){
            if(strpos($list, "|") !== false){
                $l = explode("|", $list);
                foreach($l as $header){
                    array_push($headContent, $header);
                }
            }

            if(strpos($list, ",") !== false){
                $l = explode(",", $list);
                foreach($l as $main){
                    array_push($mainContent, $main);
                }
            }
        }

        $table .= "<table class=\"table table-striped\">";
        $table .= "<thead><tr>";
        
        foreach($headContent as $content){
            $table .= "<th scope=\"col\">$content</th>";
        }

        $table .= "</tr></thead>";
        $table .= "<tbody>";
        

        foreach($mainContent as $content){
            $table .= "<tr>";
            for ($i=0; $i < count($headContent); $i++) { 
                $table .= "<td>$mainContent[$i]</td>";
            }
            $table .= "</tr>";
        }

        $table .= "</tr></tbody>";
        $table .= "</table>";
        return $table;
    }
}
?>