<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tính tổng hai số</title>
  </head>
  <body>
    <?php
      require_once 'tong.php';
      //Khai báo biến
      $a = '';
      $b = '';
      $kq = '';
      $err = '';
      if(isset($_POST["submit"])){
        $a_nhap = $_POST["th_soa"];
        $b_nhap = $_POST["th_sob"];
        if($a_nhap === '' || $b_nhap === ''){
          $err = 'Note: Bạn phải nhập đủ số a và b!!';
        }else{
          $a = $_POST["th_soa"];
          $b = $_POST["th_sob"];
          if(!is_numeric($a) || !is_numeric($b)){
            $err = 'Note:a và b phải là một số!!';
          }else
            $kq = tongHaiSo($a, $b);
            
        }
      }
    ?>
    <div class="container">
      <div class="header">
        <div class="header-left">
          <img src="../images/logo.png" alt="">
        </div>
        <div class="header-right">
          <h4>Lập trình viên PHP</h4>
          <h6><i>Công nghệ và kỹ nghệ</i></h6>
        </div>
      </div>
      <div class="contain">Sử dụng hàm trong PHP</div>
      <div class= "form">
        <h2>Nhập hai số a, b. Tính tổng của hai số đó</h2>
        <form method="POST"> 
        <div class="form-group">
            <label for="exampleInputEmail1">Số a</label>
            <input type="text" class="form-control" name="th_soa" placeholder="Nhập vào một số" value="<?php echo $a; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Số b</label>
            <input type="text" class="form-control" name="th_sob" placeholder="Nhập vào một số" value="<?php echo $b; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Số b</label>
            <input type="text" class="form-control" name="th_kq" readonly="readonly" value="<?php echo $kq; ?>">
        </div>
        <button type="submit" name="submit">Kết quả</button>
        <div class="err"><?php echo $err; ?></div>
        </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>