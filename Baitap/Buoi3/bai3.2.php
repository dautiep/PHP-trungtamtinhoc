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
    <?php 
        //Khởi tạo biến khi chưa nhấn nút submit
        $so1 = '';
        $so2 = '';
        $ketqua = '';
        $pheptinh = 1;
        $arrayPhepTinh = array(1 => '+', 2 => '-', 3 => '*', 4 => '/');
        //Kiểm tra xem khi nhấn vào nút Kết quả thì hiển thị kết quả lên trên form ($tong = $so1 + $so2)
        if(isset($_POST["tong"])){
            $so1 = $_POST["th_so1"];
            $so2 = $_POST["th_so2"];
            $pheptinh = $_POST["th_pheptinh"];
            if(is_numeric($so1) && is_numeric($so2)){
                switch ($pheptinh) {
                    case 1:
                        $ketqua = $so1 + $so2;
                        break;
                     case 2:
                        $ketqua = $so1 - $so2;
                        break;
                     case 3:
                        $ketqua = $so1 * $so2;
                        break;
                     case 4:
                        $ketqua = $so1 / $so2;
                        break;
                }
            }else{
                $ketqua = 'Dữ liệu nhập không hợp lệ';
            }                      
        }
    ?>
    <div class="container">
        <form name="PHÉP TÍNH CƠ BẢN" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nhập số thứ nhất</label>
                <input type="text" class="form-control" name="th_so1" placeholder="Nhap so thu nhat" value="<?php echo $so1; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nhập số thứ hai</label>
                <input type="text" class="form-control" name="th_so2" placeholder="Nhap so thu hai" value="<?php echo $so2; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phép tính</label>
                <select name="th_pheptinh" class="form-control">
                    <?php
                        foreach($arrayPhepTinh as $key => $value){
                            $chon = '';
                            if($pheptinh == $key)
                                $chon = 'selected="selected"';
                            echo '<option value="'.$key.'" '.$chon.'>'.$value.'</option>';
                        } 
                    ?>  
                </select>  
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tổng hai số</label>
                <input type="text" class="form-control" name="th_tong" readonly="readonly" value="<?php echo $ketqua; ?>">
            </div>
                <button type="submit" class="btn btn-primary" name="tong">Kết quả</button>
        </form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>