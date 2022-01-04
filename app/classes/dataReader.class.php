<?php
class DataReader{
    static function readRawData($source){
        $i = 0;
        $prevLine = "";
        $rawdata = array();
        $handle = fopen($source, "r") or die ("Unable to open file!");

        if(is_readable($source)){
            while(!feof($handle)){
                $line = fgets($handle);

                if(trim($line) != ""){
                    array_push($rawdata, $line);
                    //echo "$i<br>";

                    if($i != 0){
                        $prevLine = $rawdata[$i-1];
                    }
                    $currLine = $line;
                    
                    /*
                    //?delete when done
                    echo "PREV: ".$prevLine."<br>";
                    echo "CURR: ".$currLine."<br>";
                    echo "<br><br>";
                    var_dump($rawdata);
                    //?delete when done
                    */

                    if(strpos($prevLine, "#TITLE") !== false){
                        echo "<p class=\"lead\">$currLine</p>";
                    }elseif(strpos($prevLine, "#DESCRIPTION") !== false){
                        echo "<p>$currLine</p>";
                    }elseif(strpos($prevLine, "#LIST") !== false){
                        if(strpos($currLine, "//") !== false){
                            echo "
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                            ";
                            $currLine = str_replace("//", "", $currLine);
                            $wordInLine = explode("|", $currLine);

                            foreach($wordInLine as $word){
                                echo "
                                            <th scope=\"col\">$word</th>
                                ";
                            }
                        }
                    }
                                            
                    echo "
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                    ";

                    if (strpos($currLine, "[") !== false) {
                        $currLine = str_replace("[", "", $currLine);
                        $currLine = str_replace("]", "", $currLine);
                        $wordInLine = explode(",", $currLine);

                        foreach($wordInLine as $word){
                            echo "
                                            <td>$word</td>
                            ";
                        }

                        echo"
                                        </tr>
                                    </tbody>
                                </table>
                        ";
                    }
                    $i++;
                }
            }
        }
    }
}
?>