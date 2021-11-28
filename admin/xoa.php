<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM danhsachsp WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    header('location: quanli.php');
?>