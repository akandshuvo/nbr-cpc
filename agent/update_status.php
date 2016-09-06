<?php
include_once "../dbconfig.php";
if(isset($_GET["prefix"]))
{
  $prefix=$_GET["prefix"];
  $update="UPDATE test SET status='2'  WHERE prefix='$prefix'";
  mysql_query($update);
  header('Location:index.php');
}
?>
