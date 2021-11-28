<?php require_once('../connect.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <title>Admin</title>
</head>
<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch ($_GET['page_layout']) {
                case 'danhsach':
                    require_once 'danhsach.php';
                    break;

                case 'them':
                    require_once 'them.php';
                    break;

                case 'sua':
                    require_once 'sua.php';
                    break;

                case 'xoa':
                    require_once 'xoa.php';
                    break;
                
                default:
                    require_once 'danhsach.php';
                    break;
            }
        }else{
            require_once 'danhsach.php';
        }
    ?>
</body>
</html>