<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/bootstrap-4.3.1/dist/css/custom.css">
    <link rel="stylesheet" href="../../public/bootstrap-4.3.1/dist/css/signin.css">
    <link rel="stylesheet" href="../../css/style.css"> 

    <title>Đăng nhập</title>
  </head>
  <body>
    <?php
      session_start(); //khởi tạo phiên làm việc
      //Nếu đăng nhập trước đó rồi thì vào thẳng trang main mà không cần đăng nhập lại
      if(isset($_COOKIE['email'])){
        $_SESSION['email'] = $_COOKIE['email'];
        header('location:main.php');
      }
      //Khởi tạo biến ban đầu tránh phát sinh lỗi
      $email = '';
      $error = '';
      
      //Kiểm tra xem đã nhập email hay chưa
      if(isset($_POST["inputEmail"])){
        $email = $_POST["inputEmail"];
        $password = $_POST["inputPassword"];
        //Kiểm tra email và password có trống hay không
        if(!empty($email) && !empty($password)){
          $_SESSION['email'] = $email; //lưu email vào session
          //khi click vào nút remember me thì lưu email vào cookie cho lần đăng nhập sau không phải nhập lại nữa
          if(isset($_POST["checkRemember"]))
            setcookie('email', $email, time() + (60 * 60 * 24)); //khởi tạo và cài đặt thời gian lưu email trên cookie
          header('location:main.php');
        }else
          $error = 'Vui lòng nhập đầy đủ thông tin!!';
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
                <form class="form-signin" method="POST">
                    <img class="mb-4" src="../../public/images/login.png"alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Thông tin đăng nhập</h1> 
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" name="inputEmail" class="form-control" placeholder="Email address">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="inputPassword" class="form-control" placeholder="Password">
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me" name="checkRemember"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p><?php echo $error; ?></p>
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