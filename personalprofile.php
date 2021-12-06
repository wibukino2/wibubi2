<?php require_once('connect.php');

$user = (isset($_SESSION['user'])) ? $user = $_SESSION['user'] : [];


?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wipuki User Name</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css" type="text/css"/>
    <style>
        .extra_margin{
            margin-top: 10px;
        }
    </style>
</head>

<body>
<div class="container-fluid">
<?php 
$profile = mysqli_query($conn, "SELECT * FROM nguoidung WHERE nguoidung.id = $user[id]");
while($row =$profile -> fetch_assoc()){
?>
    <div class="row extra_margin">
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="text-center">
            <img src="WJPUKI.svg" class="img-rounded"/>

              <h2><?php echo $row['hoten'] ?></h2>
              <p>
                <a class="btn btn-primary btn-xs" href="#" role="button">Facebook</a>
                <a class="btn btn-primary btn-xs" href="#" role="button">Twitter</a>
                <a class="btn btn-primary btn-xs" href="#" role="button">Instagram</a>
                <a class="btn btn-primary btn-xs" href="#" role="button">Website</a>
              </p>

          </div>

      </div>
      <div class="col-md-8 col-sm-* col-xs-*">
        <h1 class="lead">Trang cá nhân</h1>
        <hr />

        <p>
            Email: <?php echo $row['email'] ?>
        </p>

        <p>
            SDT: <?php echo $row['sdt'] ?>
        </p>

        <p>
            Địa chỉ:<?php echo $row['diachi'] ?>
        </p>



      </div>

    </div>
    <?php } ?>
  </div>



</body>

</html>