<?php
include_once "../dbconfig.php";
$connect = mysqli_connect("localhost", "root", "", "cpc");
if(isset($_POST["id"]))
{
     foreach($_POST["id"] as $id)
     {
          $name_sql="SELECT * from test WHERE id = '".$id."'";
          $name_result=mysql_query($name_sql);
          $row = mysql_fetch_assoc($name_result);
          $file_name=$row['name'];
          if(unlink('../docs/'.$file_name)){
            $sql = "DELETE FROM test WHERE id = '".$id."'";
            mysqli_query($connect, $sql);
          }

     }
}
?>
