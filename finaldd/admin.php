<?php require_once 'ddaction/123.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body >
		<form action="ddaction/create.php" method="Post">
			Date:<input type="text" name="date" placeholder="Enter Date"><br><br>
			Time:<input type="text" name="time" placeholder="Enter Time"><br><br>
			Post BY:<input type="text" name="poster" placeholder="Enter Ur name"><br><br>
			Notice_ID:<input type="number" name="noticeid" placeholder="Enter Notice Id"><br><br>
			Notice:<textarea name="notice" placeholder="Enter Notice"></textarea><br><br>
			<button type="submit">Upload NOTICE</button>
		</form>
</body>
</