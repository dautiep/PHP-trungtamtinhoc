<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bai4.1.style.css">

    <title>Giải phương trình bậc 2</title>
  </head>
  <body>
    <?php
        $a = '';
        $b = '';
        $c = '';
        $pt = '';
        $kq = '';
        $err = '';
        //Kiểm tra khi nhấn nút kết quả
        if(isset($_POST["submit"])){
            $a_nhap = $_POST["th_soa"];
            $b_nhap = $_POST["th_sob"];
            $c_nhap = $_POST["th_soc"];
            //kiểm tra có nhập đủ a, b, c hay chưa
            if(($a_nhap === '')|| (empty($b_nhap)) || (empty($c_nhap)) )
                $err = 'Note: Bạn phải nhập đầy đủ 3 số a, b, c!!';
            else{
                $a = $_POST["th_soa"];
                $b = $_POST["th_sob"];
                $c = $_POST["th_soc"];
                //kiểm tra xem nhập số đúng hay chưa
                if(!is_numeric($a) || !is_numeric($b) || !is_numeric($c))
                    $err = 'Note: Bạn phải nhập a, b, c là một số!!';
                else {
                    //nếu a = 0
                    //pt có dạng: bx + c = 0 => x = -c/b
                    if($a == 0){
                        $pt = $b.'*x + '.$c.' = 0';
                        $kq = 'x = '.-$b/$c;
                    }else {
                        $pt = $a.'*x2 +'.$b.'*x + '.$c.' = 0';
                        echo $delta = pow($b, 2) - 4*$a*$c;
                        //nếu delta > 0
                        //pt có 2 nghiệm phân biệt x1 = (-b+sqrt(delta))/2*a, x2 = (-b-sqrt(delta))/2*a
                        if($delta > 0){
                            $kq = 'Hai nghiệm phân biệt: x1 = '.(-$b + sqrt($delta))/(2*$a).'  x2 = '.(-$b - sqrt($delta))/(2*$a);
                        }elseif($delta == 0){
                            $kq = 'Nghiệm kép x = '.-$b/(2*$a);
                        }elseif($delta < 0)
                            $kq = 'Phương trình vô nghiệm';
                    }
                }
            }
        } 
    ?>
    <div class="container">
        <h2>Nhập vào a, b, c. Giải phương trình Ax2 + Bx + C = 0</h2>
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số a</label>
                        <input type="text" class="form-control" name="th_soa" placeholder="Nhập một số bất kì" value="<?php echo $a; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số b</label>
                        <input type="text" class="form-control" name="th_sob" placeholder="Nhập một số bất kì" value="<?php echo $b; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số c</label>
                        <input type="text" class="form-control" name="th_soc" placeholder="Nhập một số bất kì" value="<?php echo $c; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phương trình</label>
                        <input type="text" class="form-control" name="th_phuongtrinh" readonly="readonly" value="<?php echo $pt; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kết quả phương trình</label>
                        <input type="text" class="form-control" name="th_ketqua" readonly="readonly" value="<?php echo $kq; ?>">
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