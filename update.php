<?php
session_start();
include_once 'config.php';
include_once 'session.php';

if (isset($_POST['sname'])) {
    $shippername = mysqli_real_escape_string($conn,$_POST['shippername']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET shippername = '$shippername' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['rname'])) {
    $receiveername = mysqli_real_escape_string($conn,$_POST['receiveername']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET receiveername = '$receiveername' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}


if (isset($_POST['rp'])) {
    $rphone = mysqli_real_escape_string($conn,$_POST['rphone']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET rphone = '$rphone' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['radd'])) {
    $raddress = mysqli_real_escape_string($conn,$_POST['raddress']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET raddress = '$raddress' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['rem'])) {
    $remail = mysqli_real_escape_string($conn,$_POST['remail']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET remail = '$remail' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['stp'])) {
    $shipmenttype = mysqli_real_escape_string($conn,$_POST['shipmenttype']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET shipmenttype = '$shipmenttype' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['w'])) {
    $weight = mysqli_real_escape_string($conn,$_POST['weight']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET weight = '$weight' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['pg'])) {
    $packages = mysqli_real_escape_string($conn,$_POST['packages']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET packages = '$packages' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['md'])) {
    $mode = mysqli_real_escape_string($conn,$_POST['mode']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET mode = '$mode' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['qty'])) {
    $quantity = mysqli_real_escape_string($conn,$_POST['quantity']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET quantity = '$quantity' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['dpt'])) {
    $depature = mysqli_real_escape_string($conn,$_POST['depature']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET depature = '$depature' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}



if (isset($_POST['curl'])) {
    $current_location = mysqli_real_escape_string($conn,$_POST['current_location']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET current_location = '$current_location' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['o'])) {
    $origin = mysqli_real_escape_string($conn,$_POST['origin']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET origin = '$origin' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['stat'])) {
    $status = mysqli_real_escape_string($conn,$_POST['status']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET status = '$status' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['rmk'])) {
    $remark = mysqli_real_escape_string($conn,$_POST['remark']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET remarks = '$remark' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['pd'])) {
    $date = mysqli_real_escape_string($conn,$_POST['date']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET date = '$date' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}

if (isset($_POST['dd'])) {
    $ddate = mysqli_real_escape_string($conn,$_POST['ddate']);
    $id = $_POST['id'];
    $sql = "UPDATE shipment SET ddate = '$ddate' where id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        $_SESSION['success'] = 'Shipment update successful!';
        header("Location:dashboard.php");
    }
    else{
        $_SESSION['success'] = 'Shipment update failed!';
        header("Location:dashboard.php");
    }
    
    mysqli_close($conn);
}