<?php require_once 'ddaction/123.php';?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="depstar.css">
</head>
<body background="background.jpg">
  <div class="transparentbox">
     <?php  
            $sql = "SELECT * FROM depstar where noticeid=1";
            $result = $connect->query($sql);
            $row=$result->fetch_assoc();?>
  <table border="2"> 
  <tr>
    <th><table><td>Date:
            <?php echo$row['date'];?>

            </td><td>Time:<?php echo$row['time'];?></td></table>Posted By:<?php echo$row['poster'];?>(F)</th></tr> 
    <td><?php echo$row['notice'];?>  
    </td> 
</table>
</div>

 <div class="transparentbox">
     <?php  
            $sql = "SELECT * FROM depstar where noticeid=2";
            $result = $connect->query($sql);
            $row=$result->fetch_assoc();?>
  <table border="2"> 
  <tr>
    <th><table><td>Date:
            <?php echo$row['date'];?>

            </td><td>Time:<?php echo$row['time'];?></td></table>Posted By:<?php echo$row['poster'];?>(F)</th></tr> 
    <td><?php echo$row['notice'];?>  
    </td> 
</table>
</div>
 <div class="transparentbox">
     <?php  
            $sql = "SELECT * FROM depstar where noticeid=3";
            $result = $connect->query($sql);
            $row=$result->fetch_assoc();?>
  <table border="2"> 
  <tr>
    <th><table><td>Date:
            <?php echo$row['date'];?>

            </td><td>Time:<?php echo$row['time'];?></td></table>Posted By:<?php echo$row['poster'];?>(F)</th></tr> 
    <td><?php echo$row['notice'];?>  
    </td> 
</table>
</div>
</body>
</html>
