<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify properties</title>
    <style>
        .main{
            width: 100%;
            min-height: 99vh;
            background-image: url("./images/Z_blacknWhitel.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            text-align: center;
            align-items: center;
        }
        #form{
            padding-top: 150px;
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
     <form id="myForm" method="POST">
        <h1>Enter Property Details</h1>
        

        <label for="pno">Property No.:</label>
        <input type="number" id="pno" name="pno" value="<?php echo $_POST['pno'] ?>"><br><br>

        <label for="" >Size :</label>
        <input type="number" name="size" id="size" value="<?php if(isset($final['size'])){echo $final['size'];}?>"><br><br>

        <label for="">Buy :</label>
        <input type="number" id="buy" name="buy" value="<?php if(isset($final['buy'])){echo $final['buy'];}?>"><br> <br>

        <label for="">Rent :</label>
        <input type="number" id="rent" name="rent"  value="<?php if(isset($final['rent'])){echo $final['rent'];}?>" ><br> <br>

        <label for="">Floor :</label>
        <input type="text" id="floor" name="floor" value="<?php if(isset($final['floor'])){echo $final['floor'];}?>"><br> <br>

        <label for="">Status :</label>
        <input type="text" id="status" name="status" value="<?php if(isset($final['status'])){echo $final['status'];}?>"><br> <br>

        <label for="">Facing :</label>
        <input type="text"   id="facing" name="facing" value="<?php if(isset($final['facing'])){echo $final['facing'];}?>"><br><br>

            
     </form>
     <div style="margin-top:20px;">
        <button id="c">Clear</button>
        
                <button id="u" onclick= "submitToPage2()">Update</button><br>
                <button id="u" onclick= "submitToPage1()">GetData</button><br>
        
     </div>
     <a href="./AdminPage.php"><button style="margin-top:20px ;">Back</button></a>
    </div>

    </div>
    
    <script>
        
    document.getElementById('c').onclick=function(){
        document.getElementById('pno').value=" "; 
        document.getElementById('size').value=" "; 
        document.getElementById('buy').value=" "; 
        document.getElementById('rent').value=" "; 
        document.getElementById('floor').value=" ";
        document.getElementById('facing').value=" ";
        document.getElementById('status').value=" ";
    }
    document.getElementById('g').onclick=function(){
            document.getElementById('size').innerHTML=" ";
            document.getElementById('buy').innerHTML=" ";
            document.getElementById('rent').innerHTML=" ";
            document.getElementById('floor').innerHTML=" ";
            document.getElementById('facing').innerHTML=" ";
            document.getElementById('status').innerHTML=" ";
    }
        function submitToPage1() {
  var form = document.getElementById("myForm");
  form.action = "UpdateProperty.php";
  form.submit();
}

function submitToPage2() {
  var form = document.getElementById("myForm");
  form.action = "update.php";
  form.submit();
}

    
    </script>
    
   
</body>
</html>