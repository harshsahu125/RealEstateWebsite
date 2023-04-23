<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Properties</title>
    <style>
        body{
            width: 99%;
            min-height: 95vh;
            background-image: url("./images/contructor.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            text-align: center;
            align-items: center;
        }
        #form{
            padding-top: 100px;
        }
       
    </style>
</head>
<body>

    <div class="main">
        <div id="form">
     <form action="./add.php" method="POST">

        <h1 style="font-size: 50px;">Enter Details</h1>

        <label for="">Property No.:</label>
        <input type="number" id="pno"  name="pno"><br><br>

        <label for="">Size :</label>
        <input type="number" id="size" name="size"> <br> <br>

        <label for="">Buy :</label>
        <input type="number" id="buy" name="buy"><br> <br>

        <label for="">Rent :</label>
        <input type="Number" id="rent" name="rent"><br> <br>

        <label for="">Floor :</label>
        <input type="text" id="floor" name="floor"><br> <br>

        <label for="">Status :</label>
        <input type="text" id="status" name="status"><br> <br>

        <label for="">Facing :</label>
        <input type="text" id="facing" name="facing"><br><br>

        <button style="padding-left:10px;" id="a">Add Property</button>

     </form>
     <div style="margin-top:20px;">
        <button id="c">Clear</button>
    
    <a href="./AdminPage.php"><button>Back</button></a>
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
 
    </script>
   
</body>
</html>