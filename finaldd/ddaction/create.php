<?php require_once '123.php';?>
<?php 
if($_POST) {
	$date = $_POST['date'];
	$time = $_POST['time'];
	$poster = $_POST['poster'];
	$noticeid = $_POST['noticeid'];
	$notice=$_POST['notice'];

	$sql = "INSERT INTO cspit(date, time, poster, notice, noticeid) VALUES ('$date','$time','$poster','$notice','$noticeid')";
	if($connect->query($sql) === TRUE) {
		echo "<p>New Record Successfully Created</p>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>