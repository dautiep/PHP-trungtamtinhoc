<?php 
    require_once('XL_Ket_noi.php');
    $chuoiSQL = "SELECT *
                FROM sinhvien";
    $sta = $conn->prepare($chuoiSQL);
    $sta->execute();
    // $kq = $sta->fetch(PDO::FETCH_OBJ); //kết qủa trả về là một đối tượng
    // $kq = $sta->fetch(PDO::FETCH_ASSOC); //kết quả trả về là một mảng
    // print_r($kq);

    $row = $sta->fetchAll(PDO::FETCH_ASSOC);
    foreach($row as $dong){
        print_r($dong);
        echo '<br>';
    }
?>