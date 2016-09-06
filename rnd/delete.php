<?php
$connect = mysqli_connect("localhost", "root", "", "cpc");
if(isset($_POST["id"]))
{
  $name=$_POST['name'];
     foreach($_POST["id"] as $id)
     {
       if(unlink('../docs/'.$name)){
         $sql = "DELETE FROM test WHERE id = '".$id."'";
         mysqli_query($connect, $sql);
       }

     }
}
?>
