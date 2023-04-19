<?php

error_reporting(0);
session_start();

   if(!isset($_SESSION['username']))
   {

    header("location:login.php");
    
   }
   elseif($_SESSION['usertype']=='student')
   {

    header("location:login.php");


   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <?php
include 'admin_css.php';
    ?>

</head>
<body>
    
            <?php
                include 'admson_sidebar.php';

            ?>

    <div class="content">

        <h1>Welcome to Depstar</h1>

        <p>
Devang Patel Institute of Advance Technology and Research (DEPSTAR) is a constituent of CHARUSAT. The institute is managed through a think tank of technocrats, administrators, scientists and engineers, educationalists, businessmen, stakeholders and other well-wishers from all parts of the world. DEPSTAR is patronized by IPCO Industries, headed by Philanthropist and Industrialist Shri Devang Patel. The institute envisions being a forerunner in teaching and research in advanced technologies. For this, in years to come, it will be an institute with advanced infrastructure, distinguished faculty, networking with global institutes and implementing most modern processes. DEPSTAR has total intake of 300 Seats with Computer Engineering (120 seats), Computer Science & Engineering (120 seats) and Information Technology (60 seats). The average experience of faculties is more than 6 years in Teaching, Industry and Research Domain.
        </p>
    </div>
</body>
</html>