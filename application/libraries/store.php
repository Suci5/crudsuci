<?php

class store
{

    function hitung($harga, $adit, $toni, $baju, $kantong)
    {
        $diskon = $harga * 0.2;
        $total = $harga - $diskon;
        echo "Total harga baju anak yang dibeli adalah " , $total;

        echo "<br />";

        $pria1 = $adit * 0.35;
        echo "Total harga yang harus di bayar adit adalah ", $pria1;

        echo "<br />";
        $pria2 = $toni;
        echo "Total harga yang harus di bayar toni adalah ", $pria2;
        
        echo "<br />";
        $pria = $pria1 + $pria2;
        echo "Total dari keduannya adalah ", $pria;
    
        $perempuan = $baju + $kantong;
        echo "Intan membeli baju dengan harga tertinggi sehingga gratis satu helai baju dengan total pembayaran adalah " , $perempuan;
    }
}