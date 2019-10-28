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
.card{
    flex-direction:unset
}
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
                <h4>Duyệt Mảng - Xuất thông tin theo danh sách</h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h3 class="card-title text-success">Danh sách Khóa học Lập Trình Viên</h3>
                <?php 
                    //Khai báo 1 mảng các khóa học (môn => đường dẫn đến hình ảnh)
                    $dsMon = array(
                        "C" => "../Bai_08_Bien_Danh_sach/images/lap-trinh/c.jpg",
                        "JAVA" => "../Bai_08_Bien_Danh_sach/images/lap-trinh/java.jpg",
                        "JAVASCRIPT" => "../Bai_08_Bien_Danh_sach/images/lap-trinh/javascript.png",
                        "NET" => "../Bai_08_Bien_Danh_sach/images/lap-trinh/net.jpg",
                        "PHP" => "../Bai_08_Bien_Danh_sach/images/lap-trinh/php.jpg",
                        "PYTHON" => "../Bai_08_Bien_Danh_sach/images/lap-trinh/python.png"
                    );
                ?>
                <?php foreach($dsMon as $key => $value): ?>
                    <div class="card mb-1 p-2">
                        <img src="<?php echo $value ?>" style="width:280px" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Lập trình viên <?php echo $key; ?>  </h4>
                                <a href="Chi_tiet_Khoa_hoc.php?khoa_hoc=<?php echo $key; ?>" class="btn btn-sm btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                <?php endforeach ?>
        
                  
            </div>
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