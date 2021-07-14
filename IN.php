<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    </head>
    <body>
        <header>
            <?php
                include 'navbar.php';
            ?> 
        </header>
        <div class="cont">
            <center>
            <form name="form1" action="conf.php" method="posT" >
                <h2>STUDENT DETAILS</h2>
                <label for="sname" style="padding-bottom:10px; ">Name:</label><br>
                <input type="text" id="sname" class="w3-input w3-animate-input" style="margin-bottom:0%; width:160px; padding-bottom:10px;  align:center;" name="sname" placeholder="John ROY" required><br>
                <label for="rolno" style="padding-bottom:10px; ">Roll no:</label>
                <input type="varchar" id="rolno" class="w3-input w3-animate-input" style="margin-bottom:0%; width:160px  ;padding-bottom:10px ;" name="rolno" placeholder="19XXXXXX" required>
                <h2>VISITORS DETAILS</h2>
                <label for="vname" style="padding-bottom:10px; ">Visitor's Name:</label>
                <input type="text" id="vame" class="w3-input w3-animate-input" style="margin-bottom:0%; width:160px; padding-bottom:10px ;" name="vame" placeholder="John ROY" required><br>
                <label for="PH" style="padding-bottom:10px ">Phone No:</label>
                <input type="text" id="pnum" class="w3-input w3-animate-input" style="margin-bottom:0%; width:160px  ;padding-bottom:10px ;" name="pnum" placeholder="987xxxxx21" required>
                <h2>IN TIME</h2>
                <input type="text" class="w3-input w3-animate-input" style="margin-bottom:0%; width:160px  ;padding-bottom:10px ;" id="cc" name="cc" readonly>
                
                <script>
                var today = new Date();
                var date = today.getFullYear()+'-0'+(today.getMonth()+1)+'-'+today.getDate();
                var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                var dateTime = date+' '+time;
                document.getElementById("cc").value = dateTime;
                </script> 
                <div class="text-center btn3" >
                    <button class="button" name="submit" type="submit" id="myBtn" style="margin:8px;"><span>IN</span></button>
                </div>
                <br>
                <br>
            
            </form> 
            <p>BANNARI AMMAN INSTITUTE OF TECHNOLOGY</P>
            </center>
        </div> 
    </body>
</html>