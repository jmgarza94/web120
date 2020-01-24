<!--PHP HEADER INCLUDES START-->
<?php include 'includes/header.php';?>
<!--PHP HEADER INCLUDES END-->

<!-- START LEFT COL -->
        <section class="contactForm">
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

<!--PHP FOOTER INCLUDES START-->
<?php include 'includes/footer.php';?>
<!--PHP FOOTER INCLUDES END-->