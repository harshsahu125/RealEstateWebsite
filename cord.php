<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           background-color:aqua;
        }
        .block{
    
            width: 100%;
            min-height: 95vh;
            background-image: url("./images/Zsimple-backgrounds.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            align-items: center;
           padding-top: 50px;
       
        }
    </style>
</head>
<body>
    <h1>commercial or resedential property</h1>
    <h2>enter property number</h2>
    <form method="post" action="./cordresults.php">
        <label>property number</label><br>
        <input type="text" name="pno" ><br>
        <label>ground floor</label>
        <input type="radio" name="floor" value="ground">
        <label>first floor</label>
        <input type="radio" name="floor" value="first">
        <label>second floor</label>
        <input type="radio" name="floor" value="second">
        <button>submit</button>
    </form>
    
</body>
</html>