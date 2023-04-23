<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buildies Developer</title>
    <style>
        body{
            background-image: url("./images/zmaxresdefault\ \(2\).jpg");
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
    <h1 style="padding-top: 200px;" >Admin Login</h1><br><br>
    <form method="post" action="alhandler.php">
     <div>
        <label>ENTER USERNAME</label><br><br>
        <input type="text" name="un"><br><br>
        <label>ENTER PASSWORD</label><br><br>
        <input type="password" name="pass"><br><br>
        <button style="margin-bottom: 20px;">Next</button><br>
     </div>
</form>
<a href="./login.php"><button>Go Back</button></a>
</body>
</html>