<?php
include '../connect.php';

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "select * from admin where email='$email' and matkhau='$password' ";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==1){
echo"<h1>Dangnhapthanhcong</h1>";
echo "<a href='quanli.php' target='_blank'>Đến trang quản lý ----></a>";
}

else {echo"<h2>Dangnhapthatbai</h2>";
}
?>