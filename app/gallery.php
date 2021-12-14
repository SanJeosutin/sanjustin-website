<?php
include("reusable/header.php");
include("reusable/navbar.php");

switch (isset($_GET['RenderPage'])) {
    case 'photography':
?>
        <!--Main Content START-->
        <div>
            <p class="lead">
                In here you can find some photos I took, ranging from new ones to old ones. Enjoy!
            </p>
            <br>
        </div>
        <!--Main Content END-->
<?php
        break;

    case 'coolStuff':
?>
        <!--Main Content START-->
        <div>
            <p class="lead">
                In here you can find some cool stuff I did, ranging from new ones to old ones. Enjoy!
            </p>
            <br>
        </div>
        <!--Main Content END-->
<?php
        break;

    case 'designs':
?>
        <!--Main Content START-->
        <div>
            <p class="lead">
                In here you can find some designs I've done, ranging from new ones to old ones. Enjoy!
            </p>
            <br>
        </div>
        <!--Main Content END-->
<?php
        break;
        
    default:
?>
        <!--Main Content START-->
        <div>
            <p class="lead">
                Ah well well.. you've found a secret ;D. Good on ya.
            </p>
            <br>
        </div>
        <!--Main Content END-->
<?php
        break;
}

include("reusable/footer.php");
?>