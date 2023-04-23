<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body{
            background-image: url("./images/building-constructio.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 99%;
            min-height: 97vh;
        }
       .block{
        text-align: center;
        padding-top: 200px;
       }
        
    </style>
</head>
<body>
    <div class="block">
    <h1>Continue As</h1>
    <form method="post" action="./loginhandler.php">
        <label for="admin">Admin</label>
        <input type="radio" value="admin" id="admin" name="loginas"><br><br>
        <label for="customer">Customer</label>
        <input type="radio" value="customer" id="customer" name="loginas"><br><br>
        <input type="submit"><br><br>
    </form>
    <a href="./index.php"><button>Back</button></a>
</div>


</body>
</html>