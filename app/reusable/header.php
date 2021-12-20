<?php

$curentLocation = basename($_SERVER['PHP_SELF']);
$curentLocation = str_replace('.php', '', $curentLocation);
$curentLocation = ucfirst($curentLocation);

if ($curentLocation == "Index") $curentLocation = "Home";

if (isset($_GET['RenderPage'])) {
    switch ($_GET['RenderPage']) {
        case 'photography':
            $curentLocation = "Photography";
            break;

        case 'coolstuff':
            $curentLocation = "Cool Stuff";
            break;

        case 'designs':
            $curentLocation = "Designs";
            break;

        case 'pastproject':
            $curentLocation = "Past Project";
            break;

        case 'currentproject':
            $curentLocation = "Current Project";
            break;

        case 'unfinisedproject':
            $curentLocation = "Unfinised Project";
            break;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fluidbox/2.0.5/css/fluidbox.min.css" integrity="sha512-1gVXQF5Q9gL1HvHBLK0y3IAWCorLY9EU+JMTsLBlXgWfgf6EIS/8B27R/nUq1joeKz2N7ZHCNnLCjc+PuqDqDA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/genericStyles.css">
    <link rel="stylesheet" href="styles/dark-mode.css">
    <script src="https://kit.fontawesome.com/629067d246.js" crossorigin="anonymous"></script>
    <title>sanjustin.xyz</title>
</head>

<body class="bg-light">
    <!--Jumbotron START-->
    <div class="jumbotron jumbotron-fluid bg-light">
        <div class="container">
            <h1 class="display-4 animate"><?php echo $curentLocation ?></h1>