<?php include 'portal-config.php'?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />

    <title><?=$title?></title>
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/forms.css" />

</head>

<body class="home">
    <main class="wrapper">
        <header>
            <h1 class="banner"><a href="index.php"><i class="logo fa <?=$logo?>"></i> Garza Web Designs</a></h1>
        <nav>
            <ul class="topnav" id="myTopnav">
                <?=makeLinks($nav1)?>
                <!-- <li><a href="index.php" class="selected">Welcome</a></li>   **MADE NAV DYNAMIC; IN CONFIG FILE
                <li><a href="big/index.php">Big</a></li>
                <li><a href="fp/index.php">Final Project</a></li>
                <li><a href="contactme.php">Contact Joey</a></li> -->
                <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
            </ul>
        </nav>
        </header>