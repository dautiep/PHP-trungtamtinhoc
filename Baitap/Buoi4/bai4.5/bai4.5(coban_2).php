<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bai4.1.style.css">

    <title>Tính chu vi, diện tích hình tròn</title>
  </head>
  <body>
    <?php
        $r = '';
        $p = '';
        $s = '';
        $err = '';
        define("PI", 3.14);
        //Kiểm tra khi nhấn vào nút kết quả
        if(isset($_POST["submit"])){
            $r_nhap = $_POST["th_bankinh"];
            //Kiểm tra nhập đủ bán kính hình tròn
            if(empty($r_nhap))
                $err = 'Note: Bạn phải nhập đủ bán kính hình tròn!!';
            else{
                $r = $_POST["th_bankinh"];
                if(!is_numeric($r))
                    $err = 'Note: Bán kính phải là một số!!';
                else{
                    $p = $r * 2 * PI;
                    $s = pow($r, 2) * PI;
                }
            }
        }
    ?>
    <div class="container">
        <form method="POST">
        <h2>Nhập vào bán kính hình tròn. In ra kết quả chu vi và diện tích của hình tròn đó</h2>
        <div class="form-group">
            <label for="exampleInputEmail1">Bán kính</label>
            <input type="text" class="form-control" name="th_bankinh"  placeholder="Nhập vào bán kính của hình tròn" value="<?php echo $r; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Chu vi </label>
            <input type="text" class="form-control" name="th_chuvi"  readonly="readonly" value="<?php echo $p; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Diện tích </label>
            <input type="text" class="form-control" name="th_dientich"  readonly="readonly" value="<?php echo $s; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <div class="err"><?php echo $err; ?></div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>