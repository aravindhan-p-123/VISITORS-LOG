<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script>
      window.onscroll = function() {myFunction()};
      var header = document.getElementById("myHeader");
      var sticky = header.offsetTop;

      function myFunction() 
      {
        if (window.pageYOffset > sticky) 
        {
          header.classList.add("sticky");
        }    
        else 
        {
          header.classList.remove("sticky");
        }
      }
    </script>
  </head>
  <body >
    
      <div class="row">
        <div class="column">
          <img src="logo.png" alt="LOGO" style="width:70%; padding-left: 10px;">
        </div>
        <div class="column center " >
          <h1 style="color: #A3A3A3; font-size:30px; text-align:auto; ">VISITORS LOG</h1>
        </div>
      </div>
      <div class="topnavaa header"  id="myHeader" >
        <a class="active" href="index.php">Home</a>
        <a href="in.php">IN</a>
        <a href="out.php">OUT</a>
        <a href="history.php">HISTORY</a>
       
    </div>
  </body>
</html>