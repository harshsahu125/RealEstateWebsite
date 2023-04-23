<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buildies Developer</title>
    <style>
        body{
            background-image: url("./images/constructionanimation.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 99%;
            min-height: 95vh;
            text-align: center;
            align-items: center;
        }
    
    </style>
</head>
<body>  
    <div style="padding-top:150px;">
     <h1>Search Property - </h1>

    <form method="post" action="./custhandler.php">
        <input type="radio" value="commandres" id="commandres" name="commandres">
        <label for="comm and res">Commercial and Residential</label><br><br>
        <input type="radio" value="plot" id="plot" name="commandres">
        <label for="plot">plot</label><br><br>
        <input type="submit"><br><br>
    </form>
    <a href="./login.php"><button>Back</button></a>
    </div>
</div>
</body>
</html>