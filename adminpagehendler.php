<?php 
if( $_POST['SearchProperty']=="PropertyDetail"){
    header('Location: ./PropertyTable.php');

}
elseif( $_POST['SearchProperty']=="AddProperty"){
    header('Location: ./AddProperties.php');
} 
elseif($_POST['SearchProperty']=="UpdateProperty"){
header('Location:./UpdateProperty.php');

}

?>