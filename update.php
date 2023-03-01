<?php
    include('config.php');
    $Id = $_POST['Id'];
    $Data = $_POST['Data'];
    $update = mysqli_query($connect, "UPDATE List SET Data_list='$Data' WHERE Id='$Id'");
    if($update){
        header('location:index.php');
    }else{
        echo 'Update Fail';
    }
?>
