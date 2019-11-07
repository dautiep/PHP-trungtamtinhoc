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
        include("class/class_Phuong_trinh_bac_nhat.php");
        $so_a = "";
        $so_b = "";
        $ket_qua = '';
        if(isset($_POST['Th_ket_qua']))
        {
            $so_a = $_POST['so_a'];
            $so_b = $_POST['so_b'];
            //Khởi tạo class PT_BAC_NHAT
            $ptb1 = new PHUONG_TRINH_BAC_NHAT($so_a, $so_b);
            //Gọi phương thức tính phương trình bậc nhất
            $ket_qua = $ptb1->NGHIEM();
            
        }
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border">
                    <div class="card-body">
                        <h3 class="card-title text-success">Tính phương trình bậc nhất</h3>
                        <form method="POST">
                            <div class="form-group">
                                <label for="">Nhập số A </label>
                                <input type="text" name="so_a" id="" class="form-control" placeholder="" value="<?php echo $so_a?>">
                            </div>
                            <div class="form-group">
                                <label for="">Nhập số B </label>
                                <input type="text" name="so_b" id="" class="form-control" placeholder="" value="<?php echo $so_b?>">
                            </div>

                            <div class="form-group">
                                <label for="">Kết quả: <?php echo $ket_qua?></label> 
        
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