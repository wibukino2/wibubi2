<?php
    $id = $_GET['productid'];
    $user = $_SESSION['user'];
    $sql = "DELETE  FROM cartproduct WHERE productid = $id and userid = $user[id]" ;
    $query = mysqli_query($conn, $sql);
    // header('location: index.php');
    var_dump($id)
?>