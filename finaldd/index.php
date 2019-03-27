<?php require_once 'ddaction/123.php';?>
<html>
<head>
	<meta charset="utf-8">
	 <link rel = "stylesheet" href = "style2.css">
</head>
<body background="background.jpg">
  <div class="transbox">
    <h1 align="center">Notice Board</h1>
  </div>
	<ul>
  		<li>
    		<a href="charusat.php">
      		<h2>1</h2>
      		<p>
            <?php  
            $sql = "SELECT * FROM TextContent where Text_ID = 1";
            $result = $connect->query($sql);

            $row=$result->fetch_assoc();
            echo$row['Content'];

            ?>
          </p>
    		</a>
  		</li>
  		<li>
    		<a href="depstar.php">
      		<h2>2</h2>
      		<p>
            <?php  
            $sql = "SELECT * FROM TextContent where Text_ID = 2";
            $result = $connect-> query($sql);

            $row=$result->fetch_assoc();
            echo$row['Content'];

            ?>
          </p>
    		</a>
  		</li>
  		<li>
    		<a href="cspit.php">
      		<h2>3</h2>
      		<p>
            <?php  
            $sql = "SELECT * FROM TextContent where Text_ID = 3";
            $result = $connect-> query($sql);

            $row=$result->fetch_assoc();
            echo$row['Content'];

            ?>
          </p>
    		</a>
  		</li>
  		<li>
    		<a href="https://www.charusat.ac.in/CMPICA/">
      		<h2>4</h2>
      		<p>
            <?php  
            $sql = "SELECT * FROM TextContent where Text_ID = 4";
            $result = $connect-> query($sql);

            $row=$result->fetch_assoc();
            echo$row['Content'];

            ?>
          </p>
    		</a>
  		</li>
  		<li>
    		<a href="https://www.charusat.ac.in/RPCP/">
      		<h2>5</h2>
      		<p>
            <?php  
            $sql = "SELECT * FROM TextContent where Text_ID = 5";
            $result = $connect-> query($sql);

            $row=$result->fetch_assoc();
            echo$row['Content'];

            ?>
          </p>
    		</a>
  		</li>
  		<li>
    		<a href="https://www.charusat.ac.in/PDPIAS/">
      		<h2>6</h2>
      		<p>
            <?php  
            $sql = "SELECT * FROM TextContent where Text_ID = 6";
            $result = $connect-> query($sql);

            $row=$result->fetch_assoc();
            echo$row['Content'];

            ?>
          </p>
    		</a>
  		</li>
	</ul>
</body>
</html>