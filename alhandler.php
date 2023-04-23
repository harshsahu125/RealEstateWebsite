<?php 
if($_POST['un']=="harsh" && $_POST['pass']=="harsh@123"){
    header('Location: ./AdminPage.php');
}
else{    
    echo "<script>alert('Invaild UserName Or PassWord');document.location='adminlogin.php'</script>";
   
   
}


?>