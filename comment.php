<?php
include 'connect.php';
if(isset($_POST['comment'])){
    $cmt = $_POST['comment'];
    if(isset($_SESSION['user'])){
        $postid=$_GET['id'];
        $checkuser = $_SESSION['user'];
        $checkuser= $checkuser['email'];
        $sqli = "select * from nguoidung where email='$checkuser'";
        
        $result = mysqli_query($conn,$sqli);
        $userid = mysqli_fetch_assoc($result);
        $userid=$userid['id'];
        $sql="insert into comment (userid,postid,content) values('$userid','$postid','$cmt')";
        var_dump($postid);
        if ($conn->query($sql) === TRUE) {
            header('location: index.php');
          } else {
            echo "504 Error";
          }
    } else echo"Bạn chưa đăng nhập";
}
?>