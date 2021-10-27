<?php
    class Image{
        private static $details = array();

        static function create($title, $description, $imagePath, $type, $alt, $dateCreated){
            array_push(self::$details, $title);
            array_push(self::$details, $description);
            array_push(self::$details, $imagePath);
            array_push(self::$details, $type);
            array_push(self::$details, $alt);
            array_push(self::$details, $dateCreated);
        }

        static function display(){
            echo "<div class=\"row\">";
            for($i = 0; $i < sizeof(self::$details); $i+=5){
                echo "
                <!--galery START -->
                    <a href=\"".self::$details[$i+2]."\" title=\"".self::$details[$i]."\" id=\"gallery\">
                        <img src=\"".self::$details[$i+2]."\" alt=\"".self::$details[$i+4]."\" title=\"".self::$details[$i]."\" />
                    </a>
                <!--galery END--> 
            ";
            }
            echo "</div>";
        }
    }
