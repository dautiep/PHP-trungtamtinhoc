<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bai4.1.style.css">

    <title>Xuất ucln và bcnn</title>
  </head>
  <body>
    <?php
        $a_nhap = '';
        $b_nhap = '';
        $a = '';
        $b = '';
        $ucln = '';
        $bcnn = '';
        $err = '';
        //kiểm tra khi nhấn vào nút kết quả
        if(isset($_POST["submit"])){
            $a_nhap = $_POST["th_soa"];
            $b_nhap = $_POST["th_sob"];
            if(empty($a_nhap) || empty($b_nhap))
                $err = 'Note: Bạn phải nhập đủ hai số a và b!!';
            else{
                $a = $_POST["th_soa"];
                $b = $_POST["th_sob"];
                if(!is_numeric($a) || !is_numeric($b))
                    $err = 'Note: a, b phải la một số!!';
                else{
                    if ($a == 0 || $b == 0){
                    $ucln = $a + $b;
                    }
                    do{
                        if($a >$b)
                            $a -= $b;
                        else
                            $b -= $a;
                    }while($a != $b);

                    // while($a != $b){
                    //     if($a >$b)
                    //         $a -= $b; //a = a - b
                    //     else
                    //         $b -= $a;
                    // }
                    $ucln = $a;
                    $bcnn = ($_POST["th_soa"] * $_POST["th_sob"])/$ucln;
                }
            }
        }
    ?>
    <div class="container">
        <h2>Nhập vào hai số a, b. Xuất ra ucln và bcnn của hai số</h2>
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số a</label>
                        <input type="text" class="form-control" name="th_soa" placeholder="Nhập một số nguyên" value="<?php echo $a_nhap; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số b</label>
                        <input type="text" class="form-control" name="th_sob" placeholder="Nhập một số nguyên" value="<?php echo $b_nhap; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">UCLN</label>
                        <input type="text" class="form-control" name="th_ketqua1" readonly="readonly" value="<?php echo $ucln; ?>">
                    </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">BCNN</label>
                        <input type="text" class="form-control" name="th_ketqua2" readonly="readonly" value="<?php echo $bcnn; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Kết quả</button>
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