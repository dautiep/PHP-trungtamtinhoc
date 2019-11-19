<?php
class M_khoa{
    function Doc_khoa()
    {
        require_once('models/XL_Ket_noi.php');
        $sql = "SELECT makhoa, tenkhoa
                FROM khoa";
        $sta = $conn->prepare($sql);
        $sta->execute();
        $ds_khoa = $sta->fetchAll(PDO::FETCH_OBJ);
        return $ds_khoa;
    }
}
?>

