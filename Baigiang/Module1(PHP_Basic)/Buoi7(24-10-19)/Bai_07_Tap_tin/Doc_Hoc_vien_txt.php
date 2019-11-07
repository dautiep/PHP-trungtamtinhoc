<!doctype html>
<html lang="en">
  <head>
    <title>Đọc tập tin txt</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 border border-primary pt-2">
                <img src="images/logoT3h.png" class="img-fluid float-left ml-5" alt="Lập trình viên PHP">
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
                <h4></h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border">
                    <div class="card-body">
                        <h3 class="card-title text-success">Đọc tập tin TXT</h3>
                        <form method="POST">
                            <div class="form-group">
                                <label for="">Mã Học viên: </label>
                            </div>
                            <div class="form-group">
                                <label for="">Họ tên:   </label>
                            </div>
                            <div class="form-group">
                                <label for="">Giới tính:  </label>
                            </div>
                            <div class="form-group">
                                <label for="">Ngày sinh:  </label>
                            </div>
                            <div class="form-group">
                                <label for="">Email:  </label>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-outline-danger" name="Th_Dong_y" >Đọc Tập tin</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php

function Doc_tap_tin($duong_dan){
  // Kiểm tra tập tin tồn tại
  if(file_exists($duong_dan)){
    $f=fopen($duong_dan,"r") or die("Lỗi mở tập tin");
    // Đọc nội dung trong tập tin
    $noi_dung="";
    while(!feof($f)){
      $noi_dung.=fgets($f);
    }
    // Đóng tập tin
    fclose($f);
    return $noi_dung;
  }else{
    return false;
  }
}
?>