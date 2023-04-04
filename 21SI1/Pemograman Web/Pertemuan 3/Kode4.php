<?php
function hello()
{
    echo "Hello World <br>";

    function tambah($angka1, $angka2)
    {
        return $angka1 + $angka2;
    }

    function cekGenap($angka)
    {
        // if($angka % 2 == 0){
        //         return true;
        // }else {
        //         return false;
        // }
        return $angka % 2 == 0 ? true : false;
    }

    $angka = 99;
    if (cekGenap($angka)) {
        echo "Bilangan $angka adalah genap<br>";
    } else {
        echo "Bilangan $angka adalah ganjil<br>";
    }
}?> 