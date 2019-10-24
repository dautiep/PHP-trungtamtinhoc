<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/bootstrap-4.3.1/dist/css/custom.css">
    <link rel="stylesheet" href="../../css/style.css"> 

    <title>Thông tin học viên</title>
  </head>
  <body>
    <?php
      session_start(); //khởi tạo phiên làm việc
      
      //khởi tạo để tránh phát sinh ra lỗi
      $hoten = '';
      $email = '';
      $tb = '';

      //Kiểm tra xem đã nhập họ tên học viên hay chưa
      if(isset($_POST["th_luu"])){
        $hoten = $_POST["th_hoten"];
        $email = $_POST["th_email"];
        //Kiểm tra có nhập đủ họ tên và email học viên hay chưa
        if(empty($hoten) || empty($email)){
          $tb = 'Note: Bạn phải nhập đủ họ tên và email của học viên';
        }else{
          //Lưu cookie
          $chuoi = "$hoten|$email";
          setcookie('hoc_vien', $chuoi, time() + (60 * 60 * 24)); //cài đặt cookie
          $tb = 'Thêm thông tin học viên thành công';
          
        }
      }

       //xem lại thông tin học viên đã lưu
      if(isset($_POST["th_xem"])){
        if(isset($_COOKIE["hoc_vien"])){
          $hoc_vien = $_COOKIE["hoc_vien"];
          $tb = $hoc_vien;
        }else
          $tb = 'Note: Thông tin học viên đã bị xóa hoặc chưa lưu lại';
      }

      //xóa thông tin của học viên
      if(isset($_POST["th_xoa"])){
        if(isset($_COOKIE["hoc_vien"])){
          $chuoi = "";
          setcookie("hoc_vien", $chuoi, time() - (60 * 60 * 24)); //xóa cookie
          $tb = 'Xóa thông tin học viên thành công';
        }else
          $tb = 'Thông tin  học viên muốn xóa không tồn tại!!Hãy thêm rồi thử lại bạn nhé';
      }
    ?>
    <div class="swap">
      <!--Phần header-->
      <div class="header">
        <div class="header-left">
          <img src="../../../Buoi5/images/logo.png" alt="">
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
                        <h1>Lưu thông tin Học viên (cookie): </h1>
                        <label for="exampleInputEmail1">Họ tên học viên:</label>
                        <input type="text" class="form-control" name="th_hoten" placeholder="Nhập vào họ tên học viên">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email:</label>
                        <input type="email" class="form-control" name="th_email" placeholder="Nhập vào email học viên">
                    </div>
                    <div class="button">
                      <button type="submit" class="btn btn-primary" name="th_luu">Lưu thông tin</button>
                      <button type="submit" class="btn btn-primary" name="th_xem">Xem thông tin</button>
                      <button type="submit" class="btn btn-primary" name="th_xoa">Xóa thông tin</button>
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