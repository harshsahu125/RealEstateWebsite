<?php 
if( $_POST['commandres']=="commandres"){
    header('Location:./propertiesPrice.php');

}
elseif($_POST['commandres']=="plot"){
    header('Location:./PlotMap.php');
} 
?>