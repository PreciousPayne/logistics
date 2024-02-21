<?php
session_start();
include_once 'config.php';
include_once 'session.php';

if (isset($_POST['login'])) {
    $email =  mysqli_real_escape_string($conn,$_POST['email']);
    $password =  mysqli_real_escape_string($conn,$_POST['password']);
    $query = "SELECT * from admin where email = '$email' limit 1";
    $result = mysqli_query($conn , $query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            if($password == $row['password']){
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['role'] = $row['role'];
                if($_SESSION['role'] == 'admin'){
                    header("Location:dashboard.php");
                }
            }
            else{
                $_SESSION['wrongpass'] = "Password Does not Match!";
                header("Location:login.php");
            }
        }
    }
    die;
    mysqli_close($conn);
}
