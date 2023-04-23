<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties Price</title>
    <style>
        body{
            width: 99%;
            min-height: 95vh;
            background-image: url("./images/zaddpropertypage.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            text-align: center;
            align-items: center;
        }
        #form{
            padding-top: 150px;
        }
        .b{
            border: 1px solid black ;
            padding-right: 100px;
            background-color: white;
            margin-left: 20px;
        }
       
    </style>
</head>
<body>
<?php
if(isset($_POST['pno'])){
    if($_POST['pno']<=12){
    $x=$_POST['pno'];
    include("./connect.php");
    $sql="select * from propertydetails where propertyNo=".$x.";";
    $results=$con->query($sql);
    $final=$results->fetch_assoc();}
        else{
            echo "<script>alert('only 12 properties are there')</script>";
        }
}
    ?>
    <div class="main">
        <div id="form">
     <form action="./propertiesprice.php" method=POST>

        <h1> Enter Property Number To Get Details</h1><br>
        <label for="">Property No.:</label>        
        <input type="number" id="propertyNo" name="pno"><br><br>

        <label for="">Size :</label>
        <label type="number" id="size" class="b"><?php if(isset($final['size'])){echo $final['size'];}?></label> <br> <br>

        <label for="">Buy :</label>
        <label type="decimal" id="buy" class="b" ><?php if(isset($final['buy'])){echo $final['buy'];}?></label><br> <br>

        <label for="">Rent :</label>
        <label type="number" id="rent" class="b"><?php if(isset($final['rent'])){echo $final['rent'];}?></label><br><br>

        <label for="">Floor :</label>
        <label type="text"  id="floor" class="b"><?php if(isset($final['floor'])){echo $final['floor'];}?></label><br><br>

        <label for="">Status :</label>
        <label type="text" id="status" class="b"><?php if(isset($final['status'])){echo $final['status'];}?></label><br><br>

        <label for="">Facing :</label>
        <label type="text" id="facing" class="b"><?php if(isset($final['facing'])){echo $final['facing'];}?></label><br><br>

        <button>Search</button> 

    </form>
     
     <div style="margin-top:20px;">
        <button id="x">Clear</button>
        <a href="./custlogin.php"><button style="margin-left:20px;">Back</button></a>

     </div>
    </div>
    </div>
   
<script>
    document.getElementById('x').onclick=function(){
        document.getElementById('size').innerHTML=" ";
        document.getElementById('buy').innerHTML=" ";
        document.getElementById('rent').innerHTML=" ";
        document.getElementById('floor').innerHTML=" ";
        document.getElementById('facing').innerHTML=" ";
        document.getElementById('status').innerHTML=" ";
    }
    </script>
</body>
</html>