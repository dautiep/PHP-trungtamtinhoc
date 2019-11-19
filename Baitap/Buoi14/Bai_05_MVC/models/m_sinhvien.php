<?php
class M_sinhvien{
    function Doc_sinhvien()
    {
        include("models/XL_Ket_noi.php");
        $sql = "select sv.*,tenkhoa from sinhvien sv inner join khoa k on sv.makhoa=k.makhoa";
        $sta = $conn->prepare($sql);
        $sta->execute();
        $ds_sinhvien = $sta->fetchAll(PDO::FETCH_OBJ);
        return $ds_sinhvien;    
    }
}
?>

