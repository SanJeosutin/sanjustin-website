<?php
    include("../../reusable/header.php"); 
    include("../../reusable/navbar.php");
    include_once("../../classes/components/image.php");

    echo "<h4>Image Component Test</h4>";

    Image::create("PHP SREPS", "Logo for PHP SEREPS", "../../src/images/icon.png", "TEST", "PHP Logo", "12/09/2021");
    Image::display();
     
    echo "<br><br><br><br><br><br>";

    include("../../reusable/footer.php");
?>