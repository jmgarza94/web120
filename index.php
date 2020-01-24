<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />

<title>Portal Website Homepage</title>
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/form.css" />

</head>

<body class="home">
    <main class="wrapper">
        <header>
            <h1 class="banner"><a href="index.php"><i class="logo fa fa-home"></i> Garza Web Designs</a></h1>
        <nav>
            <ul class="topnav" id="myTopnav">
                <li><a href="index.php" class="selected">Welcome</a></li>
                <li><a href="big/index.php">Big</a></li>
                <li><a href="fp/index.php">Final Project</a></li>
                <li><a href="contactme.php">Contact Joey</a></li>
                <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
            </ul>
        </nav>
        </header>

<!-- START LEFT COL -->
        <section>
            <h2 class="pageID">Welcome</h2>
<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
            <h3 class="bio">About Me</h3>
            <p class="bio">I spent my childhood in Seattle, around the Ballard and Crown Hill area, before moving to Central Illinois. After 10 years in Illinois I felt it was time to return back to Seattle. After establishing myself in the city and working at a restaurant for several years I decided to pursue a career in the tech field, and I gravitated toward web development and design.</p>
                
            <p class="bio">My hobbies and interests include boxing, computers, anime, watching movies, sneakers and going out with my friends.</p>
        </section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
        <aside>
            <h3>Right Column</h3>
            <img src="images/tablet.jpg" class="tablet" alt="" />
            <img src="images/desktop.jpg" class="desktop" alt="" />
            <img src="images/phone.jpg" class="phone" alt="" />
        </aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Contact Joey</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

</body>
</html>