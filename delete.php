<?php
session_start();
include_once 'config.php';
include_once 'session.php';
function collectData($conn)
{
    if (isset($_GET['deleteid'])) {
        $delete = $_GET['deleteid'];
        $sql = "DELETE from shipment where id = '$delete' ";
        $result = mysqli_query($conn, $sql);
        if($result){
         $_SESSION['success'] = "Shipment Deleted successfully";
         header("Location:dashboard.php");
        }
        else{
            $_SESSION['error'] = "Shipment not Deleted successfully";
            header("Location:dashboard.php");
        }
        mysqli_close($conn);
    }
    else{
        $_SESSION['error'] = "Error try again";
        header("Location:dashboard.php");
    }
}
collectData($conn);
