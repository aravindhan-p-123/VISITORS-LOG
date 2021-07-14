<html>
	<head>
    <meta http-equiv="Refresh" content="0.1;url=IN.php">
	  <?php
      include 'navbar.php';
    ?> 
  </head>
	<body>
    <?php
      // Create connection
      $conn =  mysqli_connect("localhost", "root", "", "visitorslog");
      // Check connection
      if ($conn === false)
      {
        die("Connection failed: " . mysqli_connect_error());
      }
      $sname =  $_REQUEST['sname'];
      $rolno = $_REQUEST['rolno'];
      $bname =  $_REQUEST['vame'];
      $pnum = $_REQUEST['pnum'];
      $ccc = $_REQUEST['cc'];
      // QUERY
      $sql = "INSERT INTO invisit VALUES ('$sname','$rolno','$bname','$pnum',CURRENT_TIME(),'')";

      if(mysqli_query($conn, $sql))
      {}      
      else
      {
 	      echo '<p id="demo"></p>;
              <script>
                function myFunction() 
                {
                  alert("ROLL NO ALREADY EXIST");
                }
                document.getElementById("demo").innerHTML = window.myFunction();
              </script>';
      }
  
      // Closing the connection.
      $conn->close();
    ?>




  </body>
</html>