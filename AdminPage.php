<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Property</title>
    <style>
        body{
            background-image: url("./images/zNew-house-design-2019.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 99%;
            min-height: 95vh;
        }
        .block{
            text-align: center;
             padding-top: 200px;
        }
    </style>
</head>
<body>
    <div class="block">
        <h1> Search Property:- </h1>
        <form method="post" action="./adminpagehendler.php">
            <input type="radio" value="PropertyDetail" id="PropertyDetail" name="SearchProperty">
            <label for="PropertyDetail">Property Detail</label><br><br>
            <input type="radio" value="AddProperty" id="AddProperty" name="SearchProperty">
            <label for="AddProperty">Add Property</label><br><br>
            <input type="radio" value="UpdateProperty" id="UpdateProperty" name="SearchProperty">
            <label for="UpdateProperty">Update Property</label><br><br>
           
            <button style="margin-left: 20px";>Next</button><br><br>               
        </form>
       <div>
       <a href="adminlogin.php"><button style="margin-left:20px";>Back</button></a>
       </div>
        
    </div>
</body>
</html>