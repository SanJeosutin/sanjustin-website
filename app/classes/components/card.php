<?php
    class Card{
        private static $details = array(); 

        static function create($title, $description, $demoPath, $githubLink){
            array_push(self::$details, $title);
            array_push(self::$details, $description);
            array_push(self::$details, $demoPath);
            array_push(self::$details, $githubLink);
        }
        
        /*
        static function createTag(){
            "<a href=\"$tagLink\" class=\"badge badge-primary\">$tagName</a>";
        }
        */

        static function display(){
            echo "<div class=\"row\">";
            for($i = 0; $i < sizeof(self::$details); $i+=4){
                echo "
                <div class=\"card mb-3\" style=\"width: 100%;\">
                    <h5 class=\"card-header\">".self::$details[$i]."</h5>
                    <div class=\"card-body\">
                        <p class=\"card-text\">".self::$details[$i+1]."</p>

                        <a href=\"".self::$details[$i+2]."\" class=\"btn btn-primary btn-sm float-right\">Live Demo</a>
                        <a href=\"".self::$details[$i+3]."\" class=\"btn btn-secondary btn-sm float-right\" style=\"margin-right: 5px\"><i class=\"fab fa-github\"></i> Source Code</a>
                    </div>
                        
                </div>
                
                ";
                //echo "
                //<!--Card START -->
                //<div class=\"col-sm-4 py-2\">
                //    <div class=\"card h-100\" style=\"width: 18rem;\">
                //        <h5 class=\"card-header\">".self::$details[$i]."</h5>
                //        <div class=\"card-body\">
                //            <p class=\"card-text\">".self::$details[$i+1]."</p>
                //        </div>
                //        <div class=\"card-footer\">
                //            <a href=\"http://".self::$details[$i+2]."\" class=\"btn btn-primary\">Live Demo</a>
                //            <a href=\"http://".self::$details[$i+3]."\" class=\"btn btn-secondary float-right\"><i class=\"fab fa-github\"></i> Source Code</a>
                //        </div>
                //    </div>
                //</div>
                //<!--Card END--> 
                //";
            }
            echo "</div>";
        } 
    }
?>