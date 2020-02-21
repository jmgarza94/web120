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
        <nav>
            <ul class="topnav" id="myTopnav">
                <?=makeLinks($nav1)?>
                <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
            </ul>
        </nav>

<!-- 
        <div id="cssmenu">
  <ul>
     <li><a href="../index.php"><i class="fa fa-fw fa-home"></i> WEB120 Portal</a></li>
     <li><a href="index.php"><i class="fa fa-fw fa-bold"></i> BIG</a></li>
     <li><a href="#">Research Papers</a>
        <ul>
           <li><a href="#">Responsive VS Mobile</a></li>
           <li><a href="#">Flexbox VS Grid</a></li>
           <li><a href="#">Galleries</a></li>
           <li><a href="#">Shopping Carts</a></li>
        </ul>
     </li>
     <li><a href="#">Google</a>
        <ul>
           <li><a href="#"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
           <li><a href="#"><i class="fa fa-fw fa-map"></i> Map</a></li>
           <li><a href="#"><i class="fa fa-fw fa-youtube-play"></i> YouTube</a></li>
        </ul>
     </li>
     <li><a href="#"><i class="fa fa-fw fa-video-camera"></i> Web Cams</a></li>
     <li><a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a></li>
  </ul>
</div> -->

        </header>