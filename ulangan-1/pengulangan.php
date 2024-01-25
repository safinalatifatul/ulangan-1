<?php
function PengulanganPeserta($Peserta, $kondisiTerminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7){
    for($Peserta; $Peserta <= $kondisiTerminasi; $Peserta++){
        if ($Peserta == $kt1 || $Peserta == $kt2 || $Peserta == $kt3){
            echo "Peserta didik no $Peserta Tidak hadir <br />";
        }else if($Peserta == $kt4 || $Peserta == $kt5){
            echo "Peserta didik no $Peserta Terlambat<br />";
        }else if ($Peserta == $kt6 || $Peserta == $kt7){
            echo "Peserta didik no $Peserta Sakit<br />";
        }else {
            echo"Peserta didik   no $Peserta Hadir<br />";
        }
    }
}


echo PengulanganPeserta(1, 15, 2, 3, 10, 6, 8, 9, 13,)
?>