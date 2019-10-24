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

    <title>Thông tin giỏ hàng</title>
  </head>
  <body>
    <?php
      session_start(); //khởi tạo phiên làm việc
      
      //khởi tạo để tránh phát sinh ra lỗi
      $masp = '';
      $sl = '';
      $tb = '';

      //Kiểm tra xem đã nhập mã sản phẩm hay chưa
      if(isset($_POST["th_luu"])){
        $masp = $_POST["th_masp"];
        $sl = (int)$_POST["th_soluong"];
        //Kiểm tra có nhập đủ các thông tin của sản phẩm hay chưa
        if(empty($masp) || $sl < 0){
          $tb = 'Note: Bạn phải nhập đủ mã sản phẩm và số lượng của nó';
        }else{
          //Lưu session
          $_SESSION["gio_hang"][$masp] = $sl; 
          $tb = 'Mua hàng thành công!!';
          
        }
      }

      //Hiển thị thông tin giỏ hàng
      if(isset($_POST["th_xem"])){
        if(isset($_SESSION["gio_hang"])){
          $giohang = $_SESSION["gio_hang"];
          foreach($giohang as $ma => $sl)
            $tb .= 'Mã sản phẩm: '.$ma.'  Số lượng mua: '.$sl.'<br>'; 
        }else
          $tb = 'Note: Giỏ hàng trống!!';
      }

      //Xóa giỏ hàng
      if(isset($_POST["th_xoa"])){
        if(isset($_SESSION["gio_hang"])){
          unset($_SESSION["gio_hang"]);
          $tb = 'Giỏ hàng của bạn trống';
        }else
          $tb = 'Note: Chưa có gì trong giỏ hàng';
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
                        <h1>Lưu thông tin sản phẩm (session): </h1>
                        <label for="exampleInputEmail1">Mã sản phẩm:</label>
                        <input type="text" class="form-control" name="th_masp" placeholder="Nhập vào mã sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Số lượng:</label>
                        <input type="number" class="form-control" name="th_soluong" placeholder="Nhập vào số lượng">
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