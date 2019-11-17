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
                <h4>Lập trình hướng đối tượng</h4>
            </div>
        </div>
    </div>
    <?php
        //Khai báo để có thể sử dụng class
        //interface
        include("class/interface_Hinh.php");
        $chieu_dai="";
        $chieu_rong="";
        $dien_tich=0;
        $chu_vi=0;
        if(isset($_POST['Th_ket_qua'])){
            $chieu_dai=$_POST['chieu_dai'];
            $chieu_rong=$_POST['chieu_rong'];
            //Khởi tạo class HINH_CHU_NHAT
            $hcn = new HINH_CHU_NHAT($chieu_dai,$chieu_rong);
            //Gọi phương thức tính diện tích, chu vi
            $dien_tich =$hcn->Dien_tich();
            $chu_vi = $hcn->Chu_vi();
        }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border">
                    <div class="card-body">
                        <h3 class="card-title text-success">Tính diện tích, chu vi hình chữ nhật</h3>
                        <form method="POST">
                            <div class="form-group">
                                <label for="">Nhập chiều dài </label>
                                <input type="text" name="chieu_dai" id="" class="form-control" placeholder="" value="<?php echo $chieu_dai?>">
                            </div>
                            <div class="form-group">
                                <label for="">Nhập chiều rộng </label>
                                <input type="text" name="chieu_rong" id="" class="form-control" placeholder="" value="<?php echo $chieu_rong?>">
                            </div>

                            <div class="form-group">
                                <label for="">Chu vi: <?php echo $chu_vi?></label> </br>
                                <label for="">Diện tích: <?php echo $dien_tich?></label>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-outline-danger" name="Th_ket_qua" >Hiển thị kết quả</button>
                            </div>
                        </form>

                    </div>
                </div>
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