<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="project.js"> </script>
</head>
<body>
    <div class="project-form">
            <h1>PROJECT SUBMISSION FORM</h1>    
            
    
        <div class="project-us">
             <form action="save.php" method="post">
                <input type="text" name="projectnumber"   class="form-control" placeholder="Enter Project Number" id="pnumber"> <br>
                <input type="text" name="projectname"  class="form-control" placeholder="Enter Project Name" id="pname"> <br>
                <input type="text" name="estimatedcost"  class="form-control" placeholder="Enter Estimated Cost(In Lakhs)" id="ecost"> <br>
               <!-- <input type="text" name="lastmodifytime"  class="form-control" placeholder="Enter the Date & Time" id="ldate"> <br> -->
                <input type="submit" class="form-control submit" value="Submit" >
            </form>
        </div>

     <!--   </div class="message">
            </div class = "success" id="success"> Successfully Submitted </div>
            <div class="danger" id="danger"> All Fields Required </div>
        </div>   -->
           
        

      
    </div>   
</body>
</html>