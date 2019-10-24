<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/bootstrap-4.3.1/dist/css/custom.css">
    <link rel="stylesheet" href="../css/style.css"> 

    <title>Đọc tệp tin</title>
  </head>
  <body>
    <?php
      //Khai báo bán đầu tránh phát sinh ra lỗi
      $mahv = '';
      $hoten = '';
      $gioitinh = '';
      $email = '';
      $tb = '';

      //Kiểm tra khi nhấn vào nút đọc tệp tin
      if(isset($_POST["th_doc"])){
        //Mở file ra đọc
        $f = fopen('../public/text/Hoc_vien.json', 'r'); //mở file hocvien.json ở chế độ đọc
        $noi_dung = '';
        while (!feof($f)) {
          $noi_dung .= fgets($f);
        }
        $hv = json_decode($noi_dung);
        $mahv = $hv->Ma_so;
        $hoten = $hv->Ho_ten;
        if($hv->Gioi_tinh == 'true')
          $gioitinh = 'Nam';
        else
          $gioitinh = 'Nữ';
        $email = $hv->Email;
        $tb = 'Đọc tệp tin thành công';
        fclose($f); //đóng file
      }

    ?>
    <div class="swap">
      <!--Phần header-->
      <div class="header">
        <div class="header-left">
          <img src="../../Buoi5/images/logo.png" alt="">
        </div>
        <div class="header-right">
          <h4>Lập trình viên PHP</h4>
          <i>Công nghệ và kỹ nghệ</i>
        </div>
      </div>
      <!--Phần container-->
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <h1>Đọc tệp tin JSON: </h1>
                        <label for="exampleInputEmail1">Mã học viên:</label>
                        <input type="text" class="form-control" name="th_mahv" readonly="readonly" value="<?php echo $mahv; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Họ tên:</label>
                        <input type="text" class="form-control" name="th_hoten" readonly="readonly" value="<?php echo $hoten; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Giới tính:</label>
                        <input type="text" class="form-control" name="th_gioitinh" readonly="readonly" value="<?php echo $gioitinh; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email:</label>
                        <input type="text" class="form-control" name="th_email" readonly="readonly" value="<?php echo $email; ?>">
                    </div>
                    <div class="button">
                      <button type="submit" class="btn btn-primary" name="th_doc">Đọc tệp tin</button>
                    </div>
                    <div class="thongbao"><?php echo $tb; ?></div>
                </form>
            </div>
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