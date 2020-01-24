<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />

<title>Portal Website Homepage</title>
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/forms.css" />

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
            <?php
            /*
             * Below are 2 different forms to be re-used       
             * 
             * Only use one at a time, comment out the other!       
             *
             */

            include 'includes/contact_include.php'; #site keys & code here

            $toAddress = "josele.garza@seattlecolleges.edu";  //place your/your client's email address here
            $toName = "Joey"; //place your client's name here
            $website = "Web 120 Contact Form";  //place NAME of your client's website

            echo loadContact('simple.php');#demonstrates a simple contact form
            //echo loadContact('multiple.php');#demonstrates multiple form elements

	       ?>
        </section>
<!-- END LEFT COL -->

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