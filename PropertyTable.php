<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details</title>
</head>
<style>
    body{
        background-color: blanchedalmond;
    }
        table, th, td{
            border: 1px dashed white;
            background-color: black;
            text-align: center;
            color: aliceblue;
            
        }


</style>
<body>
   

 <?php
    if(isset($_POST['pno'])){
    
    }
 ?>
    <h2>Property Details </h2>
    <table style="width: 100%;" >
        <tr>
            <th>PropertyNo</th>
            <th>size</th>
            <th>floor</th>
            <th>facing</th>
            <th>rent</th>
            <th>buy</th>
            <th>status</th>
        </tr>
        <tr>
            <?php
            include("./connect.php");
            $sql="select * from propertydetails order by 'propertyNo';";
            $results=$con->query($sql);
            while($final=$results->fetch_assoc()) {   ?>
            <td><?php echo $final['propertyNo'] ?></td>
            <td><?php echo $final['size'] ?></td>
            <td><?php echo $final['floor'] ?></td>
            <td><?php echo $final['facing'] ?></td>
            <td><?php echo $final['rent'] ?></td>
            <td><?php echo $final['buy'] ?></td>
            <td><?php echo $final['status'] ?></td>
        </tr>
        <?php }?>

    
        <a href="./AdminPage.php"><button style="position: absolute; margin-top: 150px; margin-left: 685px;">Back</button></a>
    
        
</body>
</html>