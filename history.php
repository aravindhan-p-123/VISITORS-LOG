<html>
  <head>
      <link rel="stylesheet" href="styles.css">   
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <style>
        .container
        {
	      padding-top: 50px;
          padding-left: 100px;
          padding-right: 100px;
          text-align: center;
          opacity:0.8;
        }
      </style>    
  </head>
  <body>
    <header style="padding-left:1px; ">
      <?php
        include 'navbar.php';
      ?>
    </header>
    <?php
      $username = "root"; 
      $password = ""; 
      $database = "visitorslog"; 
      $mysqli = new mysqli("localhost", $username, $password, $database); 
      $query = "SELECT * FROM invisit";

      if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_REQUEST['search'])) 
      {
        // Create connection
        $conn =  mysqli_connect("localhost", "root", "", "visitorslog");
        // Check connection
        if ($conn === false) 
        {
          die("Connection failed: " . mysqli_connect_error());
        }
        $search = $_REQUEST['search'];
        $query= "select * from visitorslog.invisit where rolno like '%$search%' or sname like '%$search%'" ;
    
        if(mysqli_query($conn, $query))
        {}
        else
        {
          echo 'SEARCH FAILED' ;
        }
        $conn->close();
      }

      echo '
            <br>
            <div class="row">
                <div class="col">
                    <form action=history.php method="GET">
                        <table border="0" class="" id="myTable">
                            <div class="table-responsive-sm">
                                <tr> 
                                    <td>
                                        <font face="Arial">
                                            <input class="w3-input " name="search" style="margin-bottom:0%; width:400px  ;padding-left:100px ; " type="text" id="myInput" onkeyup="myFunction()"  placeholder="Enter Stundent name or Roll No..." title="Type in a name">
                                        </font> 
                                    </td> 
                                    <td> 
                                        <font face="Arial">
                                            <button class="button"  type="submit" style="margin:8px;"><span>SEARCH</span></button>
                                        </font>
                                    </td> 
                                </tr>
                            </div> 
                        </table>
                    </form>
               </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-sm">
                            <table border="0" class="table table-striped tabletext table-hover table-striped ">
                                <tr> 
                                    <td> 
                                        <font face="Arial">STUDENT NAME</font> 
                                    </td> 
                                    <td> 
                                        <font face="Arial">ROLL NO</font> 
                                    </td> 
                                    <td> 
                                        <font face="Arial">VISITOR NAME</font> 
                                    </td> 
                                    <td> 
                                        <font face="Arial">PHONE NUMBER</font> 
                                    </td> 
                                    <td> 
                                        <font face="Arial">IN TIME</font> 
                                    </td> 
                                    <td> 
                                        <font face="Arial">OUT TIME</font> 
                                    </td>
                                </tr>';

      if ($result = $mysqli->query($query)) 
      {
        while ($row = $result->fetch_assoc()) 
        {
          $field1name = $row["sname"];
          $field2name = $row["rolno"];
          $field3name = $row["vname"];
          $field4name = $row["pnum"];
          $field5name = $row["date"]; 
          $field6name = $row["out_time"]; 
        
          if ( $field6name === "0000-00-00 00:00:00")
          {
            $field6name = "IN";
          }

          echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
              </tr>';
        }
        $result->free();
      } 
    ?>
    <br>
    <br>
  </body>
</html>



