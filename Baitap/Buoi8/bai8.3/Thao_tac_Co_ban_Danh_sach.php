<?php 
    $soPT = '';
    $err = '';
    $mang = array();
    $mang_so_chan = array();
    $mang_so_le = array();
    $pt_max = '';
    $pt_min = '';
    //Kiểm tra khi nhập số phần tử
    if(isset($_POST['Th_Dong_y'])){
        $soPT = $_POST['Th_So_phan_tu'];
        //Kiểm tra nhập đúng số phần tử cuả mảng là số
        if(empty($_POST['Th_So_phan_tu']))
            $err = 'Bạn phải nhập số phần tử của mảng!!';
        elseif(!is_numeric($_POST['Th_So_phan_tu']))
            $err = 'Số phần tử của mảng phải là một số nguyên!!';
        else {
            //Phát sinh ra mảng ngẫu nhiên từ 1 đến 100
            for($i = 0; $i < $soPT; $i++){
                $mang[$i] = rand(1, 100);
            }
            //Xuất ra mảng các phần tử chẵn và lẻ trong mảng vừa phát sinh
            for($i = 0; $i < count($mang); $i++){
                if($mang[$i] % 2 == 0)
                    $mang_so_chan[$i] = $mang[$i];
                else {
                    $mang_so_le[$i] = $mang[$i];    
                }
                if($mang[$i] > $pt_max)
                    $pt_max = $mang[$i];
                else
                    $pt_min = $mang[$i];
            }
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Lập trình viên PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="../Bai_08_Bien_Danh_sach/images/logo.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
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
                <h4>Thông báo: <?php echo $err; ?></h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border">
                    <div class="card-body">
                        <h3 class="card-title text-success">Các thao tác cơ bản Mảng</h3>
                        <form method="POST">
                            <div class="form-group">
                                <label for="">Nhập số phần tử: </label>
                                <input type="text" name="Th_So_phan_tu"  id="" value="<?php echo $soPT; ?>" class="form-control" placeholder="Nhập vào một số nguyên">
                            </div>
                            <div class="form-group">
                                <label for="">Danh sách phần tử: <?php echo implode('; ', $mang); ?> </label>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Danh sách phần tử chẵn: <?php echo implode('; ', $mang_so_chan); ?> </label>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Danh sách phần tử lẻ: <?php echo implode('; ', $mang_so_le); ?> </label>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Giá trị Lớn nhất: <?php echo $pt_max; ?>  </label>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Giá trị Nhỏ nhất: <?php echo $pt_min; ?>  </label>
                                
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-outline-danger" name="Th_Dong_y">Phát sinh Mảng - Tính toán </button>
                                <button type="reset" class="btn btn-outline-primary" name="Th_Lam_lai" value="Reset">Làm lại </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>