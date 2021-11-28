<?php
    $id = $_GET['id'];

    $sql_up = "SELECT * FROM danhmucsp WHERE id = $id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $tensp = $_POST['tensp'];
        $image_tmp = $_FILES['anh']['tmp_name'];

        if($_FILES['anh']['name'] == ""){
            $image = $row_up['anh'];
        }else{
            $image = $_FILES['anh']['name'];
            $image_tmp = $_FILES['anh']['tmp_name'];
            move_uploaded_file($image_tmp, '../assets/img/product/'.$image);
        }


        $giagoc = $_POST['giagoc'];
        $giagiam = $_POST['giagiam'];
        $sanxuat = $_POST['sanxuat'];
        $loaihinh = $_POST['loaihinh'];

        $sql = "UPDATE danhmucsp SET tensp = '$tensp', anh = '$image', giagoc = $giagoc, giagiam = $giagiam, sanxuat = '$sanxuat', loaihinh = $loaihinh WHERE id = $id";

        $query = mysqli_query($conn, $sql);
        header('location: quanli.php');
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Name product</label>
                    <input type="text" name="tensp" class="form-control" value="<?php echo $row_up['tensp']; ?>">
                </div>

                <div class="form-group">
                    <label>Image</label> <br>
                    <input type="file" name="image">
                </div>

                <div class="form-group">
                    <label>Historical cost</label>
                    <input type="number" name="giagoc" class="form-control" value="<?php echo $row_up['giagoc']; ?>">
                </div>

                <div class="form-group">
                    <label>Discount cost</label>
                    <input type="number" name="giagiam" class="form-control" value="<?php echo $row_up['giagiam']; ?>">
                </div>

                <div class="form-group">
                    <label>Origin</label>
                    <input type="text" name="sanxuat" class="form-control" value="<?php echo $row_up['sanxuat']; ?>">
                </div>

                <div class="form-group">
                    <label>Type</label>
                    <input type="text" name="loaihinh" class="form-control" value="<?php echo $row_up['loaihinh']; ?>">
                </div>
                    <button name="sbm" class="btn btn-success">Sửa</button>
            </form>
        </div>
    </div>
</div>