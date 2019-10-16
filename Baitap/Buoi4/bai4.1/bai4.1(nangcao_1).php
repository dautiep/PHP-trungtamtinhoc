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
        $month = '';
        $kq = '';
        $err = '';
        if(isset($_POST["th_month"])){
            $month = $_POST["th_month"];
            if(!is_numeric($month) || ((1 > $month) || ($month > 12))){
                $err = 'Bạn phải nhập một tháng trong năm (1-12)';
            }else{
                $year = date("Y");
                if(($month == 1) || ($month == 3) || ($month == 5) || ($month == 7) || ($month == 8) || ($month == 10) || ($month == 12)){
                    $kq = 'Có 31 ngày';
                }else if(($month == 4) || ($month == 6) || ($month == 9) || ($month == 11)){
                    $kq = 'Có 30 ngày';
                }else {
                    if((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0))
                        $kq = 'Có 29 ngày';
                    else {
                        $kq = 'Có 28 ngày';
                    }
                }
            }
        }    
    ?>
    <div class="container">
        <h2>Nhập vào số tháng n, Kiểm tra xem số ngày trong tháng đó của năm hiện tại</h2>
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tháng</label>
                        <input type="text" class="form-control" name="th_month" placeholder="Nhập một tháng bất kì" value="<?php echo $month; ?>">
                        <small id="emailHelp" class="form-text text-muted"><?php echo $err; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kết quả kiểm tra số ngày trong tháng</label>
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