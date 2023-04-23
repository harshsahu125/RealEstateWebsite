<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plot Map</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .main{
            width: 100%;
           min-height: 99vh;
           background-color: black;
        }
        .lefttop-corner{
            width: 600px;
            height: 200px;
            background-color: aquamarine;
            display: flex;
            justify-content: space-around;
            align-items: center;
            float: left;
        }
        .topcornerbox{
            width: 150px;
            height: 180px;
            background-color: green;
            color: white;
            
        }
        .righttop-corner{
            width: 600px;
            height: 200px;
            background-color: aquamarine;
            display: flex;
            justify-content: space-around;
            align-items: center;
            float: right;
        }
        .righttopcornerbox{
            width: 180px;
            height: 180px;
            background-color: green;
            color: white;
        }
        .rightbottom-corner{
            width: 600px;
            height: 200px;
            background-color: aquamarine;
            display: flex;
            justify-content: space-around;
            align-items: center;
            float: right;
            margin-top: 100px;
        }
        .rightbottomcornerbox{
            width: 180px;
            height: 180px;
            background-color: green;
            color: white;
        }
        .leftbottom-corner{
            width: 600px;
            height: 200px;
            background-color: aquamarine;
            display: flex;
            justify-content: space-around;
            align-items: center;
            float: left;
            margin-top: 100px;
            margin-bottom: 30px;
        }
        .leftbottomcornerbox{
            width: 150px;
            height: 180px;
            background-color:green;
            color: white;
        }
        .bottom-box{
            width: 1265px;
            height: 100px;
          padding-left: 43px;
            
            background-color: skyblue;
            text-align:center;
            color: black;
            
        }
        .vl {
               border-bottom: 3px solid white;
               height: 500px;
              text-align: left;
        }
       
        .b{
            border: 1px solid black ;
            padding-right: 100px;
            background-color: white;
            margin-left: 20px;
        }
        #y{
          
            text-emphasis-position: margin-top;
            border-style: solid;
            border-radius: 10px;
            padding-left: 5px;
            padding-right: 5px;
            
        }
        #z{
          
          text-emphasis-position: margin-top;
          border-style: solid;
            border-radius: 10px;
            padding-left: 5px;
            padding-right: 5px;         
      }
      #sub{
        border-style: solid;
            border-radius: 10px;
            padding-left: 5px;
            padding-right: 5px;
      }
        
    </style>
</head>
<body>
<?php
    if(isset($_POST['no'])){
        $x=$_POST['no'];
        include("./connect.php");
    @$sql="select * from propertydetails where propertyNo=".$x.";";
    @$results=$con->query($sql);
    @$final=$results->fetch_assoc();}
    
        


?>
    <div class="main">
     <div class="lefttop-corner">
        <div class="topcornerbox">12</div>
        <div class="topcornerbox">11</div>
        <div class="topcornerbox">10</div>
     </div>
     <div class="righttop-corner">
        <div class="righttopcornerbox">9</div>
        <div class="righttopcornerbox">8</div>
        <div class="righttopcornerbox">7</div>
     </div>
     <div class="rightbottom-corner">
        <div class="rightbottomcornerbox">4</div>
        <div class="rightbottomcornerbox">5</div>
        <div class="rightbottomcornerbox" id='f'>6</div>
     </div>
     <div class="leftbottom-corner">
        <div class="leftbottomcornerbox" id='a'>1</div>
        <div class="leftbottomcornerbox">2</div>
        <div class="leftbottomcornerbox">3</div>
    
     </div>
            <br><div class="vl"></div>
     <div class="bottom-box">
     <div>
        <form method=POST>
        <br><label>Plot No:</label>
        <input type="number" name="no" >
        <label> Size:</label>
        <label type="number" name="size" id="size" class="b"><?php if(isset($final['size'])){echo $final['size'];}?></label>&nbsp;
        <label > Status:</label>
        <label type="text" name="status" id="status" class="b"><?php if(isset($final['status'])){echo $final['status'];}?></label><br>
       
        <button type="submit" style="margin-top:5px;" id="sub">Search</button>
       
            
    </div>
    </form><br>
    <div>
        <button id="y" >Clear</button>&nbsp;
        <a href="./custlogin.php"><button id="z">Back</button></a>
    </div>
        
    
    </div>
    </div>
    

    

<script>
    document.getElementById('y').onclick=function(){
        
        document.getElementById('size').innerHTML=" ";
        
        document.getElementById('status').innerHTML=" ";
    }
    </script>
    
</body>
</html>
