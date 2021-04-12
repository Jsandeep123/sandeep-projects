<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "video file";
$con = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['upload'])) {
	$file = $_FILES['video']['name'];
	$query = "INSERT INTO admin(video1) VALUES('$file')";
	$res = mysqli_query($con,$query);
	if($res) {
move_uploaded_file($_FILES['video']['tmp_name'], "$file");
echo "video uploaded successfully";
	} 
	else{
		echo "video not uploaded succeessfully";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	 <title>video</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			<div class="row">
			<div class="col-md-6">
				<h3 class="text-center">upload</h3>
				<form class="mt-5" method="post" enctype="multipart/form-data">
					<input type="file" name="video" class="form-control" multiple>
					<input type="submit" name="upload" value="UPLOAD" class="btn-btn-success">
					</form>
			</div> 
			
			</div>
			
		</div>
		
	</div>
</body>
</html>
