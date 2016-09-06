<?php

include_once '../../config.php';


if(isset($_FILES['file'])){
	function GetStringBetween ($string, $start, $finish) {
		 $string = " ".$string;
		 $position = strpos($string, $start);
		 if ($position == 0) return "";
		 $position += strlen($start);
		 $length = strpos($string, $finish, $position) - $position;
		 return substr($string, $position, $length);
	}

	foreach ($_FILES['file']['name'] as $file => $name){
		# code...
    $filename = $name;
		$file_size = $_FILES['file']['size'][$file];
		$file_type = $_FILES['file']['type'][$file];
		$string1="'$name'";
		$prefix=GetStringBetween($string1,"'","_");
		$status=0;
		try{
			if(move_uploaded_file($_FILES['file']['tmp_name'][$file],"../../docs/".$filename)){
				$stmt=$db->prepare("insert into test values('',?,?,?,?,?)");
				$stmt->bindParam(1,$filename);
				$stmt->bindParam(2,$prefix);
				$stmt->bindParam(3,$file_size);
				$stmt->bindParam(4,$file_type);
				$stmt->bindParam(5,$status);
				$stmt->execute();
				?>
				<script>
				alert('successfully uploaded');
						window.location.href='../upload.php';
						</script>
				<?php
			}
		}catch(Exception $e){
			echo $e;
		}
	}
}


//include_once '../../config.php';

/*product
if(isset($_POST['product']))
{

	$file =$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../../docs/";
	$root="dth";

	// new file size in KB
	$new_size = $file_size/1024;
	// new file size in KB

	// make file name in lower case
	$final_file = strtolower($file);
		// make file name in lower case

		function GetStringBetween ($string, $start, $finish) {
		   $string = " ".$string;
		   $position = strpos($string, $start);
		   if ($position == 0) return "";
		   $position += strlen($start);
		   $length = strpos($string, $finish, $position) - $position;
		   return substr($string, $position, $length);
		}
		$string1="'$final_file'";
		$sub_root=GetStringBetween($string1,"'","_");


		if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$sql="INSERT INTO upload_location(file,type,size,location,root,sub_root) VALUES('$final_file','$file_type','$new_size','$folder','$root','$sub_root')";
			$sql2="INSERT INTO archive(file,type,size,location,root,sub_root) VALUES('$final_file','$file_type','$new_size','$folder','$root','$sub_root')";
			mysql_query($sql);
			mysql_query($sql2);
			?>
			<script>
			alert('successfully uploaded');
	        window.location.href='../dth.php';
	        </script>
			<?php
		}
		else
		{
			?>
			<script>
			alert('error while uploading file');
	        window.location.href='../dth.php';
	        </script>
			<?php
		}
	}
*/


?>
