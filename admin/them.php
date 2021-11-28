<?php
    

    if(isset($_POST['sbm'])){
        $tensp = $_POST['tensp'];
        $giagoc = $_POST['giagoc'];
        $giagiam = $_POST['giagiam'];
        $sanxuat = $_POST['sanxuat'];
        $loaihinh = $_POST['loaihinh'];
        $thongtin = $_POST['thongtin'];

        $image = $_FILES['anh']['name'];
        $image_tmp = $_FILES['anh']['tmp_name'];

        
        $sql = "INSERT INTO danhmucsp (tensp, anh, giagoc, giagiam, sanxuat, loaihinh) VALUES('$tensp', '$image', '$giagoc', '$giagiam', '$sanxuat', '$loaihinh')";
        $sqle = "INSERT INTO chitietsp (tensp, gia, thongtin) VALUES('$tensp', '$giagiam', '$thongtin')";
        $query = mysqli_query($conn, $sql);
        $query = mysqli_query($conn, $sqle);
        move_uploaded_file($image_tmp, '../assets/img/product/'.$image);
        header('location: quanli.php');
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Name product</label>
                    <input type="text" name="tensp" class="form-control">
                </div>

                <div class="form-group">
                    <label>Image</label> <br>
                    <input type="file" name="anh">
                </div>

                <div class="form-group">
                    <label>Historical cost</label>
                    <input type="number" name="giagoc" class="form-control">
                </div>

                <div class="form-group">
                    <label>Discount cost</label>
                    <input type="number" name="giagiam" class="form-control">
                </div>

                <div class="form-group">
                    <label>Origin</label>
                    <input type="text" name="sanxuat" class="form-control">
                </div>

                <div class="form-group" >
                    <label>Type</label>
                    <input type="text" name="loaihinh" class="form-control">
                </div>

                <div class="form-group">
                    <label>Information</label>
                    <input type="text" name="thongtin" class="form-control">
                </div>
                    <button name="sbm" class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>
</div>