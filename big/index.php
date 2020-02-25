<?php include 'includes/header.php';?>
<!--PHP HEADER INCLUDES END-->
<!-- START LEFT COL -->
        <section>
            <h2 class="pageID">Welcome</h2>
<!-- BIG CONTACT FORM -->
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
            $website = "Web 120 BIG Home";  //place NAME of your client's website

            // echo loadContact('simple.php');#demonstrates a simple contact form
            echo loadContact('multiple.php');#demonstrates multiple form elements

	       ?>
        </section>
<!-- END CONTACT FORM -->
        </section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
        <aside>
           
        </aside>
<!-- END RIGHT COL -->

<!--PHP FOOTER INCLUDES START-->
<?php include 'includes/footer.php';?>
<!--PHP FOOTER INCLUDES END-->