<?php
    $id = $_GET['id'];
    $sql = "DELETE  FROM danhmucsp WHERE id = $id";
    $sqle = "DELETE  FROM chitietsp WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $query = mysqli_query($conn, $sqle);
    header('location: quanli.php');
?>