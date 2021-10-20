<?php
$curentLocation = basename($_SERVER['PHP_SELF']);
$curentLocation = str_replace('.php', '', $curentLocation);
$curentLocation = ucfirst($curentLocation);

if($curentLocation == "Index") $curentLocation = "Home";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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