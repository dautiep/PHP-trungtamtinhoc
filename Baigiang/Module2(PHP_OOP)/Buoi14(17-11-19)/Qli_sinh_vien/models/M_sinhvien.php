<?php
    class M_sinhvien{
        //function
        function lay_Danh_sach_SV(){
            require_once('models/XL_Ket_noi.php'); 
            $sql = "SELECT sinhvien.makhoa, masv, tensv, lop, tenkhoa
                    FROM sinhvien INNER JOIN khoa ON sinhvien.makhoa = khoa.makhoa";
            $sta = $conn->prepare($sql);
            $sta->execute();
            $ds_sinhvien = $sta->fetchAll(PDO::FETCH_OBJ);
            return $ds_sinhvien;
        }

        function lay_Sinh_Vien_Theo_MaSV($masv){
            require_once('models/XL_Ket_noi.php'); 
            $sql = "SELECT *
                    FROM sinhvien 
                    WHERE masv = ?";
            $sta = $conn->prepare($sql);
            $sta->execute(array($masv));
            $sinhvien = $sta->fetch(PDO::FETCH_OBJ);
            return $sinhvien;
        }
    }
?>