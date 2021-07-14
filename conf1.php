<html>
  <head>
  <meta http-equiv="Refresh" content="0.1;url=out.php">
	<?php
      include 'out.php';
    ?> 
  </head>
  <body>
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') 
	  {
        // Create connection
        $conn =  mysqli_connect("localhost", "root", "", "visitorslog");
        // Check connection
        if ($conn === false) 
		{
          die("Connection failed: " . mysqli_connect_error());
        }
        $rolno = $_REQUEST['rolnoo'];

        $sqlq = "UPDATE visitorslog.invisit SET out_time = CURRENT_TIME() WHERE rolno = '$rolno' ";

    
        if(mysqli_query($conn, $sqlq))
		{}      

       
        $conn->close();
      }
    ?>
  </body>
</html>