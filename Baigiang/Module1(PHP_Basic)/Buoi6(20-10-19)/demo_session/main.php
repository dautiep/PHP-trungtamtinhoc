<?php
    session_start();
    //kiểm tra xem có đăng nhập trước đó chưa, nếu rồi thì vào trang main, không thì phải đăng nhập 
    if(isset($_SESSION['email']))
        $email = $_SESSION['email'];
    else{
        header('location:.');
    }
?>

<!doctype html>
<html lang="en">
    <?php require_once 'layout/head.php'; ?>
    <body>
    <?php require_once 'layout/nav.php'; ?>

    <?php
        //kiểm tra file có tồn tại hay không, nếu có mở file không thì thông báo lỗi
        if(file_exists('file_van_ban/ttHV.txt')){
            $f = fopen('file_van_ban/ttHV.txt', 'r');
            $chuoiTT = fgets($f);
            $mangTT = explode('|', $chuoiTT); //tách chuỗi thành mảng, ngăn cách bằng một kí tự bất kì
            echo '<p>Họ tên học viên: '.$mangTT[0].'</p>';
            if($mangTT[1] == 'true')
                echo '<p>Giới tính: Nam</p>';
            else
                echo '<p>Giới tính: Nu</p>';
            echo '<p>Ngày sinh: '.$mangTT[2].'</p>';
            echo '<p>Email: '.$mangTT[3].'</p>';

            fclose($f);
        }else
            echo 'File bạn yêu cầu không tồn tại!';
    ?> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php require_once 'layout/script.php'; ?>
    </body>
</html>