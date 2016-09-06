<?php

include_once '../dbconfig.php';



/*Retailer Location*/
if(isset($_POST['create']))
{
    $user_name=$_POST['user_name'];
    $user_id=$_POST['user_id'];
    $password=$_POST['password'];
    $level=$_POST['level'];

    $sql="INSERT INTO user(user_name,user_id,password,level) VALUES('$user_name','$user_id','$password','$level')";
    mysql_query($sql);
    ?>
    <script>
    alert('successfully USER CREATED');
        window.location.href='newuser.php';
        </script>
    <?php
  }
  else
  {
    ?>
    <script>
    alert('error while uploading file');
        window.location.href='newuser.php';
        </script>
    <?php
  }

 ?>
