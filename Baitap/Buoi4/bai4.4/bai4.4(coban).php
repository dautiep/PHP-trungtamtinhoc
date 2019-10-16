<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bai4.1.style.css">

    <title>Tính tổng</title>
  </head>
  <body>
    <?php
        $so = '';
        $kq = 0;
        $tong = 1;
        $err = '';
        if(isset($_POST['th_so'])){
            $so =$_POST['th_so'];
            if(!is_numeric($so)){
                $err = 'Vui lòng chỉ nhập số';
            }else{
                $i = 1;
                do{
                    $kq+=$i;
                    $tong+=1/$i;
                    echo $i;
                    $i++;
                }while($i <= $so); //điều kiện thực hiện vòng lặp
            }
        } 
    ?>
    <div class="container">
        <h2>Tính tổng các số từ 1 đến n</h2>
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số n</label>
                        <input type="text" class="form-control" name="th_so" placeholder="Nhập một số nguyên" value="<?php echo $so; ?>">
                        <small id="emailHelp" class="form-text text-muted"><?php echo $err; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kết quả tổng từ 1 đến n</label>
                        <input type="text" class="form-control" name="th_ketqua" readonly="readonly" value="<?php echo $kq; ?>">
                    </div>
                    <h2>Tính tổng S(n) = 1+ 1/1 + ... + 1/n</h2>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kết quả tổng S(n) =  1+ 1/1 + ... + 1/n</label>
                        <input type="text" class="form-control" name="th_ketqua2" readonly="readonly" value="<?php echo $tong; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Kết quả</button>
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