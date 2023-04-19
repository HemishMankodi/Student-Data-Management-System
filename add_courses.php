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

   $host="localhost";
   $user="root";
   $password="";
   $db="charusat";

   $data=mysqli_connect($host,$user,$password,$db);

   $sql="SELECT * FROM course";

   $result= mysqli_query($data,$sql);

   if(isset($_POST['add_teacher']))
   {
     $t_name=$_POST['name'];


     $file=$_FILES['image']['name'];

     $dst="./image/".$file;

     $dst_db="image/".$file;

     move_uploaded_file($_FILES['image']['tmp_name'],$dst);

     $sql="INSERT INTO teacher(Course_Name,Course_Id,Reference_Book) VALUES('$t_name','$t_description','$dst_db')";

     $result=mysqli_query($data,$sql);

     if($result){

        header('location:admin_add_teacher.php');
     }


    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style type="text/css">

     label
     {
        display: inline-block;
        text-align: right;
        width: 100px;
       
        padding-top: 10px;
        padding-bottom: 10px;

     }

     .div_deg
     {
background-color:aqua;
width: 400px;
padding-top: 70px;
padding-bottom: 70px;

     }

    </style>
   
   <?php
include 'admin_css.php';
    ?>

</head>
<body>
     
            <?php
                include 'admson_sidebar.php';

            ?>
    <div class="content">
        <center>
        <h1>Add Courses</h1>


  
    <div class="div_deg">
    <form action="#" method="post" enctype="multipart/form-data">
        <div>
            <label>Course Name</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>Course ID</label>
            <input type="number" name="phone">
        </div>
        <div>
            <label>Reference</label>
            <input type="file" name="image">
        </div>
        <div>
            
            <input type="submit" class="btn btn-primary" name="add_student" value="Add Courses">
        </div>
    </form>
    </div>
    </center>
    </div>
    
</body>
</html>