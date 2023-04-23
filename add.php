<?php
$pno = $_POST['pno'];
$size = $_POST['size'];
$buy = $_POST['buy'];
$rent = $_POST['rent'];
$floor = $_POST['floor'];
$facing = $_POST['facing'];
$status = $_POST['status'];

    include("./connect.php");

    $SELECT = "SELECT propertyNo FROM propertydetails WHERE propertyNo = ?";
    $final = $con->prepare("INSERT INTO propertydetails(propertyNo, size, buy, rent, floor, facing, status) 
    values(?,?,?,?,?,?,?)");
    $final->bind_param("iiddsss", $pno, $size, $buy, $rent, $floor, $facing, $status);
    $final-> execute();
    echo "<script>alert('Property Added Sucessfully');document.location='AddProperties.php'</script>";
    $final->close();
    $con->close();

   

    
?>