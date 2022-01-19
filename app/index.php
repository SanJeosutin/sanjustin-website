<?php
include("reusable/header.php");
include("reusable/navbar.php");

include("classes/components/renderContent.php");

if (isset($_GET['RenderPage'])) {
    switch($_GET['RenderPage']){
        case 'game':
            Content::render("GAME", array("secret", "Welp, you got me. I'm not sure what this is, but I'm sure it's not a secret anymore. <div id=parent></div><script type=\"module\" src=\"../config/easterEgg/simplePlatformer/src/main.js\"></script>"));
            break;
    }
}else{
    Content::render("HOME");
}

include("reusable/footer.php");
?>