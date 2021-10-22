<?php
    class Card{
        private static $projectDetails = array(); 

        static function create($title, $description, $demoPath, $githubLink){
            array_push(self::$projectDetails, $title);
            array_push(self::$projectDetails, $description);
            array_push(self::$projectDetails, $demoPath);
            array_push(self::$projectDetails, $githubLink);
        }
        
        /*
        static function createTag(){
            "<a href=\"$tagLink\" class=\"badge badge-primary\">$tagName</a>";
        }
        */

        static function display(){
            echo "<div class=\"row\">";
            for($i = 0; $i < sizeof(self::$projectDetails); $i+=4){
                echo "
                <!--Card START -->
                <div class=\"col-sm-4 py-2\">
                    <div class=\"card h-100\" style=\"width: 18rem;\">
                        <h5 class=\"card-header\">".self::$projectDetails[$i]."</h5>
                        <div class=\"card-body\">
                            <p class=\"card-text\">".self::$projectDetails[$i+1]."</p>
                        </div>
                        <div class=\"card-footer\">
                            <a href=\"http://".self::$projectDetails[$i+2]."\" class=\"btn btn-primary\">Live Demo</a>
                            <a href=\"http://".self::$projectDetails[$i+3]."\" class=\"btn btn-secondary float-right\"><i class=\"fab fa-github\"></i> Source Code</a>
                        </div>
                    </div>
                </div>
                <!--Card END--> 
            ";
            }
            echo "</div>";
        } 
    }
?>