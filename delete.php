<?php 

    //Include constants.php file here
    include('config/db.php');

    // 1. get the ID of Admin to be deleted
    $bd_id = $_GET['bd_id'];

    //2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM blood_donor WHERE bd_id=$bd_id";
    $res = mysqli_query($conn, $sql);
    if($res==TRUE){
        $value='xoa';
        header("Location:index.php?response=$value");
    }else{
        echo 'xoa  tb';
    }
    mysqli_close($conn);

?>