<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bai3.3.style.css">

    <title>Đăng nhập</title>
  </head>
  <body>
    <div class="container">
        <h1>Đăng nhập</h1>
        <form method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nhập Email</label>
                <input type="email" class="form-control" name="th_email" aria-describedby="emailHelp" placeholder="Email của bạn">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nhập mật khẩu</label>
                <input type="password" class="form-control" name="th_pass" placeholder="Mật khẩu của bạn">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">laưu mật khẩu</label>
            </div>
            <button type="submit" class="btn btn-primary" name="th_login">Đăng nhập</button>
        </form>
        <?php
            $email = 'admin@gmail.com';
            $pass = 'admin';
            //Kiểm tra khi nhấn vào nút đăng nhập
            if(isset($_POST["th_login"])){
                $emailnhap = $_POST["th_email"];
                $passnhap = $_POST["th_pass"];
                //kiểm tra xem email với mật khẩu đã nhập chưa
                if(empty($emailnhap) || empty($passnhap)){
                    echo 'Phải nhập đủ email và mật khẩu';
                }else{
                    //đã kiểm tra xem email và mật khẩu có đúng không
                    if(($email == $_POST["th_email"]) && ($pass == $_POST["th_pass"])){
                        header("location:form_lien_he.php");
                    }else{
                        echo 'Sai email hoặc mật khẩu';
                    }
                }

            }
        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>