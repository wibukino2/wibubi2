<?php
include 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "select * from nguoidung where email='$email' and matkhau='$password' ";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==1){
echo"<h1>Dangnhapthanhcong</h1>";}

else {echo"<h2>Dangnhapthatbai</h2>";
}
?>