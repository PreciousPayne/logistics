<?php
session_start();
include_once 'config.php';
include_once 'session.php';
if (isset($_POST['addShipment'])) {
    $shippername =  mysqli_real_escape_string($conn,$_POST['shippername']);
    $receiveername =  mysqli_real_escape_string($conn,$_POST['receiveername']);
    $rphone =  mysqli_real_escape_string($conn,$_POST['rphone']);
    $raddress =  mysqli_real_escape_string($conn,$_POST['raddress']);
    $remail =  mysqli_real_escape_string($conn,$_POST['remail']);
    $shipmenttype =  mysqli_real_escape_string($conn,$_POST['shipmenttype']);
    $weight =  mysqli_real_escape_string($conn,$_POST['weight']);
    $packages =  mysqli_real_escape_string($conn,$_POST['packages']);
    $mode =  mysqli_real_escape_string($conn,$_POST['mode']);
    $quantity =  mysqli_real_escape_string($conn,$_POST['quantity']);
    $depature =  mysqli_real_escape_string($conn,$_POST['depature']);
    $origin =  mysqli_real_escape_string($conn,$_POST['origin']);
    $destination =  mysqli_real_escape_string($conn,$_POST['destination']);
    $date =  mysqli_real_escape_string($conn,$_POST['date']);
    $ddate =  mysqli_real_escape_string($conn,$_POST['ddate']);
    $trackid =  mysqli_real_escape_string($conn,$_POST['trackid']);
    $statsdate =  mysqli_real_escape_string($conn,$_POST['statsdate']);
    $status =  mysqli_real_escape_string($conn,$_POST['status']);
    $remarks =  mysqli_real_escape_string($conn,$_POST['remark']);
    $current_location =  mysqli_real_escape_string($conn,$_POST['current_location']);

    $query = "INSERT INTO shipment (shippername,receiveername,rphone,raddress,remail,shipmenttype,shipmentweight,shipmentpackages,shipmentmode,quantity,depaturetime,origin,destination,pickupdate,deliverydate,trackingid,statsdat,status,remarks,current_location) VALUES ('$shippername', '$receiveername','$rphone', '$raddress', '$remail', '$shipmenttype', '$weight', '$packages', '$mode', '$quantity', '$depature', '$origin', '$destination', '$date', '$ddate','$trackid','$statsdate','$status','$remarks','$current_location')";
    $result = mysqli_query($conn , $query);
    if($result){
        $_SESSION['success'] = "Shipment Added Successfully!";
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['error'] = "Shipment Not Added Successfully!";
        header("Location:dashboard.php");
    }
}