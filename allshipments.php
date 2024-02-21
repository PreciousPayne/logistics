<?php 
session_start();
include 'config.php';
include 'session.php';
include 'livechat.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipment</title>
    <link rel="stylesheet" href="styles.css">
    <link id="mystylesheet" rel="stylesheet" href="/light.css">
    <link rel="shortcut icon" href="images/header/logo.png" type="image/x-icon">
</head>
<body>
    <header class="header">
        <img src="images/header/logo.png" alt="logo" class="logo">
        <h3>Dashboard</h3>
        <div class="day-wrapper">
            <img src="images/sun-line.svg" alt="sun" id="sun" onclick="swapStyle('light.css')">
            <img src="images/contrast-2-line.svg" alt="moon" id="moon" onclick="swapStyle('dark.css')">
        </div>
    </header>
    <main class="main">
        <nav class="top">
            <div class="top-box">
                <li><a href="dashboard.php" style="color: #333;">Add Shipments</a></li>
                <li style="background-color: #1a4e8f;"><a href="allshipments.php" style="color: #fff;">View Shipments</a></li>
            </div>
        </nav>
        <section class="center">
            <div class="center-wrapper">
                <h3>Shipment Information</h3>
                <section class="general-wrapper">
                    <section class="box-section transaction-section">
                        <div class="wrapper">
                            <div class="transaction-span">
                                
                                    <?php 
                                        $sql = "SELECT * from shipment";
                                        $result = mysqli_query($conn,$sql);
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
                                                $_SESSION['current_location'] = $row['current_location'];
                                                $_SESSION['date'] = $row['date'];
                                                
        
                                                echo '
                                                <div class="deposit-span wider-span">
                                                    <div class="trans-box">
                                                        <h3>Shipper Name</h3>
                                                        <p>'.$_SESSION['shippername'].'</p>
                                                    </div>
                                                     <div class="trans-box">
                                                        <h3>Receiver Name</h3>
                                                        <p>'.$_SESSION['receiveername'].'</p>
                                                    </div>
                                                    <div class="trans-box">
                                                        <h3>Receiver Email</h3>
                                                        <p>'.$_SESSION['remail'].'</p>
                                                    </div>
                                                    <div class="trans-box">
                                                        <h3>Receiver Phone</h3>
                                                        <p>'.$_SESSION['rphone'].'</p>
                                                    </div>
                                                    <div class="trans-box">
                                                        <h3>Receiver Address</h3>
                                                        <p>'.$_SESSION['raddress'].'</p>
                                                    </div>
                                                    <div class="trans-box">
                                                        <h3>shipment type</h3>
                                                        <p>'.$_SESSION['shipmenttype'].'</p>
                                                    </div>
                                                    <div class="trans-box">
                                                        <h3>Shipment weight</h3>
                                                        <p>'.$_SESSION['shipmentweight'].'</p>
                                                    </div>
                                                    
                                                    <div class="trans-box">
                                                        <h3>Shipment packages</h3>
                                                        <p>'.$_SESSION['shipmentpackages'].'</p>
                                                    </div>
                                                    
                                                    <div class="trans-box">
                                                        <h3>Shipment mode</h3>
                                                        <p>'.$_SESSION['shipmentmode'].'</p>
                                                    </div>
                                                    
                                                    <div class="trans-box">
                                                        <h3>Quantity</h3>
                                                        <p>'.$_SESSION['quantity'].'</p>
                                                    </div>
                                                    
                                                    <div class="trans-box">
                                                        <h3>Depature time</h3>
                                                        <p>'.$_SESSION['depaturetime'].'</p>
                                                    </div>
                                                    
                                                    <div class="trans-box">
                                                        <h3>Current Location</h3>
                                                        <p>'.$_SESSION['current_location'].'</p>
                                                    </div>
                                                    
                                                    <div class="trans-box">
                                                        <h3>Origin</h3>
                                                        <p>'.$_SESSION['origin'].'</p>
                                                    </div>
                                                    
                                                    <div class="trans-box">
                                                        <h3>Destination</h3>
                                                        <p>'.$_SESSION['destination'].'</p>
                                                    </div>
                                                    <div class="trans-box">
                                                        <h3>Pickup Date</h3>
                                                        <p>'.$_SESSION['pickupdate'].'</p>
                                                    </div>
                                                    <div class="trans-box">
                                                        <h3>Delivery Date</h3>
                                                        <p>'.$_SESSION['deliverydate'].'</p>
                                                    </div>
                                                    <div class="trans-box">
                                                        <h3>Status</h3>
                                                        <p>'.$_SESSION['status'].'</p>
                                                    </div>
                                                    
                                                    <div class="trans-box">
                                                        <h3>Tracking Id</h3>
                                                        <p>'.$_SESSION['trackingid'].'</p>
                                                    </div>
                                                    
                                                    <div class="trans-box">
                                                        <h3>Remark</h3>
                                                        <p>'.$_SESSION['remarks'].'</p>
                                                    </div>
                                                    
                                                    <div class="trans-box">
                                                    <h3>Delete Shipment</h3>
                                                        <button name="delete" class="delete"><a href="delete.php?deleteid='.$_SESSION['id'].'&emailid='.$_SESSION['email'].'">Delete</a></button>
                                                    </div>
                                                    <div class="trans-box">
                                                        <h3>Edit Shipment</h3>
                                                        <button name="edit" class="edit"><a href="edit.php?editid='.$_SESSION['id'] .'&emailid='.$_SESSION['email'].'">Edit</a></button>
                                                    </div>
                                                </div>
                                                ';
                                            }
                                        }
                                        else{
                                            echo '
                                                <div class="deposit-span wider-span">
                                                    <div class="trans-box">
                                                        <p>No Shipment Info</p>
                                                    </div>
                                                </div>
                                            ';
                                        }
                                    ?>
                                
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </section>
    </main>