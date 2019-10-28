
<!doctype html>
<html lang="en">

<head>
    <title>Lập trình viên PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="../Bai_08_Bien_Danh_sach/images/logo.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>
<style>

</style>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 border border-primary pt-2">
                <img src="../Bai_08_Bien_Danh_sach/images/logoT3h.png" class="img-fluid float-left ml-5" alt="Lập trình viên PHP">
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
                <h4>Duyệt Mảng - Xuất thông tin theo cột</h4>
            </div>
        </div>
    </div>
    <div class="container">
    <h3 class="card-title text-success">Danh sách Khóa học Chuyên đề</h3>
        <div class="row pagination justify-content-center">

            <?php
                //Khai báo một mảng chưa các môn học(môn => đường dẫn đến hình) 
                $dsMon = array(
                    "ANGULAR" => "../Bai_08_Bien_Danh_sach/images/chuyen-de/khoa-hoc-angular-js.jpg",
                    "LT_C_CTDL" => "../Bai_08_Bien_Danh_sach/images/chuyen-de/lap_trinh_C_va_cau_truc_du_lieu.png",
                    "HTML5-CSS3" => "../Bai_08_Bien_Danh_sach/images/chuyen-de/lap-trinh-html5-css3.jpg",
                    "PHP-NC" => "../Bai_08_Bien_Danh_sach/images/chuyen-de/lap-trinh-php-nang-cao.jpg",
                    "LARAVEL" => "../Bai_08_Bien_Danh_sach/images/chuyen-de/lap-trinh-web-laravel-framework.jpg",
                    "PYTHON" => "../Bai_08_Bien_Danh_sach/images/chuyen-de/phat-trien-ung-dung-web-python-voi-django.png",
                    "NODEJS" => "../Bai_08_Bien_Danh_sach/images/chuyen-de/xay-dung-ung-dung-web-voi-nodejs.png",
                    "WPF" => "../Bai_08_Bien_Danh_sach/images/chuyen-de/xay-dung-ung-dung-wpf.jpg",
                );
            ?>
            <?php 
                foreach($dsMon as $key => $value):
            ?>
                    <div class="card m-2" style="width:20rem">
                        <img class="card-img-top" src="<?php echo $value; ?>" alt="" >
                        <div class="card-body">
                            <h4 class="card-title">Khóa học: <?php echo $key; ?> </h4>
                            <a href="Chi_tiet_Khoa_hoc.php?khoa_hoc=<?php echo $key; ?>" class="btn btn-sm btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
            <?php endforeach ?>
            
            
               
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