<?php
session_start();
include_once 'config.php';
include_once 'session.php';

if (isset($_POST['track'])) {
    $trackid =  mysqli_real_escape_string($conn,$_POST['trackid']);
    $query = "SELECT * from shipment where trackingid = '$trackid ' limit 1";
    $result = mysqli_query($conn , $query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $_SESSION['id'] = $row['id'];
            $_SESSION['shippername'] = $row['shippername'];
            $_SESSION['receiveername'] = $row['receiveername'];
            $_SESSION['rphone'] = $row['rphone'];
            $_SESSION['raddress'] = $row['raddress'];
            $_SESSION['remail'] = $row['remail'];
            $_SESSION['shipmenttype'] = $row['shipmenttype'];
            $_SESSION['shipmentweight'] = $row['shipmentweight'];
            $_SESSION['shipmentpackages'] = $row['shipmentpackages'];
            $_SESSION['shipmentmode'] = $row['shipmentmode'];
            $_SESSION['quantity'] = $row['quantity'];
            $_SESSION['depaturetime'] = $row['depaturetime'];
            $_SESSION['origin'] = $row['origin'];
            $_SESSION['destination'] = $row['destination'];
            $_SESSION['pickupdate'] = $row['pickupdate'];
            $_SESSION['deliverydate'] = $row['deliverydate'];
            $_SESSION['trackingid'] = $row['trackingid'];
            $_SESSION['statsdate'] = $row['statsdate'];
            $_SESSION['status'] = $row['status'];
            $_SESSION['remarks'] = $row['remarks'];
            $_SESSION['date'] = $row['date'];
            $_SESSION['current_location'] = $row['current_location'];
            $_SESSION['data'] = 'data grabbed';
            header('Location:track.php');
        }
    }
    else{
        $_SESSION['success'] = 'Shipment Not Found';
        header('Location:track.php');
    }
}
else{
    $_SESSION['success'] = 'Error finding shipment';
    header('Location:track.php');
}