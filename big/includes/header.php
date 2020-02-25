<?php include 'big-config.php'?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />

    <title><?=$title?></title>
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link href="css/big.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/forms.css" />
    <script src="js/script.js"></script>
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!-- MenuMaker Plugin -->
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <!-- Icon Library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body class="home">
    <main class="wrapper">
        <header>
            <h1 class="banner"><a href="index.php"><i class="logo fa <?=$logo?>"></i> Joey's Big Website </a></h1>
            <div id="cssmenu">
            <ul>
                <li><a href="../index.php"><i class="fa fa-fw fa-home"></i> WEB120 Portal</a></li>
                <li><a href="index.php"><i class="fa fa-fw fa-bold"></i> BIG Home</a></li>
                <li><a href="#">Research Papers</a>
                    <ul>
                    <li><a href="responsive.php">Responsive VS Mobile</a></li>
                    <li><a href="flexbox.php">Flexbox VS Grid</a></li>
                    <li><a href="galleries.php">Galleries</a></li>
                    <li><a href="shopping-carts.php">Shopping Carts</a></li>
                    </ul>
                </li>
                <li><a href="#">Google</a>
                    <ul>
                    <li><a href="calendar.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                    <li><a href="map.php"><i class="fa fa-fw fa-map"></i> Map</a></li>
                    <li><a href="youtube.php"><i class="fa fa-fw fa-youtube-play"></i> YouTube</a></li>
                    </ul>
                </li>
                <li><a href="webcam.php"><i class="fa fa-fw fa-video-camera"></i> Web Cams</a></li>
            </ul>
            </div>
        

        </header>