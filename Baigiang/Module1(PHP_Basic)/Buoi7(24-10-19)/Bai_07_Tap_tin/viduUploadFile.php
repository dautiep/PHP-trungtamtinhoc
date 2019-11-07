<?php
$err = '';
$mangKieuFile = array('image/jpeg', 'image/png', 'image/gif', 'image/tif'); //khai báo một mảng kiểu các file được upload 
    if(isset($_POST["btnUpload"])){
        $file_upload = $_FILES['th_file'];
        //Kiểm tra size
        if($file_upload['size'] >= 139000)
            $err = 'Note: Vui lòng chọn file có kích thước nhỏ hơn 139kb!!';
        //Kiểm tra type
        else if(array_search($file_upload['type'], $mangKieuFile) !== false) {
            move_uploaded_file($file_upload['tmp_name'], 'images/'.$file_upload['name']);
            $err = 'Đã upload file thành công';
        }else
            $err = "Note: Vui lòng chỉ chọn file hình ảnh!!";
            
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form enctype="multipart/form-data", method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chọn file: </label>
                        <input type="file" class="form-control" name="th_file">
                    </div>
                    <button type="submit" name="btnUpload">Upload</button>
                    <div class="err"><?php echo $err; ?></div>
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