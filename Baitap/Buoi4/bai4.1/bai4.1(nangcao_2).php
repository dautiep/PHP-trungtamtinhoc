<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bai4.1.style.css">

    <title>kiểm tra số ngày trong tháng</title>
  </head>
  <body>
    <?php
        $year= '';
        $kq = '';
        $err = '';
        if(isset($_POST["th_year"])){
            $year = $_POST["th_year"];
            if(!is_numeric($year)){
                $err = 'Bạn phải nhập một năm';
            }else{
                if((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0))
                    $kq = 'Là năm nhuận';
                else {
                    $kq = 'Không phải là năm nhuận';
                }
            }
        }    
    ?>
    <div class="container">
        <h2>Nhập vào năm n, kiểm tra xem năm đó cóa phải là năm nhuận hay không</h2>
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Năm</label>
                        <input type="text" class="form-control" name="th_year" placeholder="Nhập một năm bất kì" value="<?php echo $year; ?>">
                        <small id="emailHelp" class="form-text text-muted"><?php echo $err; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kết quả kiểm tra năm nhuận</label>
                        <input type="text" class="form-control" name="th_ketqua" readonly="readonly" value="<?php echo $kq; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Kết quả</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>