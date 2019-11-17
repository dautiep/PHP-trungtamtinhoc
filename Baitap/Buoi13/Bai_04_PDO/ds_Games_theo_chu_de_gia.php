<!doctype html>
<html lang="en">
<head>
    <title>Lập trình viên PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$myDB = 'quan_ly_game';
$option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password, $option);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select g.*,ten_the_loai from games g inner join loai_games l on g.ma_the_loai=l.ma_the_loai where g.ma_the_loai=? and don_gia_ban>?";
    $sta = $conn->prepare($sql);
    $ma_the_loai=3;
    $don_gia_ban=400000;
    $ds_tham_so=array($ma_the_loai,$don_gia_ban);
    $sta->execute($ds_tham_so);
    $ds_games = $sta->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 border border-primary pt-2">
                <img src="images/logoT3h.png" class="img-fluid float-left ml-5" alt="Lập trình viên PHP">
                <blockquote class="blockquote text-right mr-5">
                    <h1 class="mb-0 text-primary">Lập trình viên PHP</h1>
                    <footer class="blockquote-footer"> <cite title="Source Title">Công nghệ & Kỹ thuật </cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="container text-center text-danger">
        <div class="row">
            <div class="col-12 mt-2">
            <h3 class="card-title text-success">Danh sách Games theo Thể loại Hành động - Đơn giá lớn 400.000đ</h3>
            </div>
        </div>
    </div>
    <div class="container">
    
        <div class="row pagination justify-content-center">
                        
                        <?php
                        foreach ($ds_games as $game) {
                            ?>
                        <div class="card m-2" style="width:20rem">
                                <img class="card-img-top" src="images/games/<?php echo $game->hinh; ?>" alt="" >
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $game->ten_game; ?></h4>
                                    <div class="text-danger"><strong>Đơn giá bán:<?php echo number_format($game->don_gia_ban) ?>đ</strong></div>
                                    
                                    <a href="#" class="btn btn-sm btn-primary">Xem chi tiết</a>
                                </div>
                        </div>   
                            
                        <?php

                    }
                    ?>    
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>