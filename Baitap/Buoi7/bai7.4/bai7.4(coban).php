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

    <title>Upload tệp tin</title>
  </head>
  <body>
    <?php
    $tb = '';
    $mang_kieu_file = array('image/jpeg', 'image/png', 'image/gif', 'image/tif'); //mảng các kiểu định dạng của file hình

    //Kiểm tra khi nhấn vào nút upload file
    if(isset($_POST['btnUpload'])){
      $file_upload = $_FILES['th_file'];
      if($file_upload['name'] == '')
        $tb = 'Note: Bạn chưa chọn file';
      else{
        //kiểm tra size
        if($file_upload['size'] >= 139000)
          $tb = 'Note: Kích thước file phải nhỏ hơn 130kb';
        //kiểm tra type
        else if(array_search($file_upload['type'], $mang_kieu_file) !== false){
          move_uploaded_file($file_upload['tmp_name'], 'images/'.$file_upload['name']); //chuyển file update vào thư mục image
          $tb = 'Upload file thành công';
        }
        else
          $tb = 'Note: Bạn chỉ được chọn file hình';
      }
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
                <form enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <h1>Upload File: </h1>
                        <label for="exampleInputEmail1">Chọn file:</label>
                        <input type="file" class="form-control" name="th_file">
                    </div>
                    <div class="button">
                      <button type="submit" class="btn btn-primary" name="btnUpload">Upload file</button>
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