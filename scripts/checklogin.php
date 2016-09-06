<?php

// Connect to MySQL

    $host="localhost";
    $username="root";
    $password="";
    $dbname="bexcom";
    $conn=mysql_connect($host,$username,$password);
    $selectdb=mysql_select_db($dbname,$conn);

    $user=$_POST['user_id'];
    $pass=$_POST['password'];
    $user_id=stripcslashes($user);
    $password=stripcslashes($pass);

    $sql="SELECT * from user where user_id='$user_id' and password='$password'";
    $result=mysql_query($sql);
    $count=mysql_num_rows($result);
    $row=mysql_fetch_assoc($result);


    if($count==1 && $row['level']==1){
    session_start();
    $_SESSION['admin_id']=$row['user_id'];
    $_SESSION['admin_name']=$row['user_name'];
    header('location:../admin/index.php');
    }

    if($count==1 && $row['level']==2){
    session_start();
    $_SESSION['admin_id']=$row['user_id'];
    $_SESSION['admin_name']=$row['user_name'];
    header('location:../super_supervisor/index.php');
    }

    if($count==1 && $row['level']==3){
    session_start();
    $_SESSION['admin_id']=$row['user_id'];
    $_SESSION['admin_name']=$row['user_name'];
    header('location:../supervisor/index.php');
    }

    else if($count==1 && $row['level']==4){
    session_start();
    $_SESSION['agent_id']=$row['user_id'];
    $_SESSION['agent_name']=$row['user_name'];
    header('location:../agent/index.php');
    }


    else{
    echo "<h1>ERROR in LOGIN!!!!!!!!!</h1><br><h3>Redirecting.........</h3>";
    header("Refresh:3; url=../index.php");
    }
?>
