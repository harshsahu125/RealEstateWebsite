<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upadte Page</title>
</head>
<body>
    <?php
    include("./connect.php");
    $size = $_POST['size'];
    $pno = $_POST['pno'];
    $floor = $_POST['floor'];
    $status = $_POST['status'];
    $facing = $_POST['facing'];
    $buy = $_POST['buy'];
    $rent = $_POST['rent'];
    $sql="Update propertydetails set Size=".$size.",Floor='".$floor."',Facing='".$status."',Rent=".$rent.",Buy=".$buy.",Status='".$status."' where propertyNo=".$pno.";";
     $con->query($sql);
    // $final=$results->fetch_assoc();
    echo "<script>alert('Property Updated Sucessfully');document.location='UpdateProperty.php'</script>";
?>
</body>
</html>
