<?php
include 'connect.php';
if(isset($_POST['email'])){
$email = $_POST['email'];
$password = $_POST['password'];}


$sql = "select * from nguoidung where email='$email' and matkhau='$password' ";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$check = mysqli_num_rows($result);
if ($check==1){
    $_SESSION['user']=$data;
header('location: index.php');
}
alert("Sai tài khoản hoặc mật khẩu");
header('location: index.php');
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>