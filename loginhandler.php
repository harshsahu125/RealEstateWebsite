<?php 
if( $_POST['loginas']=="admin"){
    header('Location: ./adminlogin.php');

}
else{
    header('Location: ./custlogin.php');
} 
?>