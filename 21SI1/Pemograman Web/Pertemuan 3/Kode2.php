<?php
function hello(){
    echo "Hello World <br>";

function tambah($angka1, $angka2){
        return $angka1 + $angka2;
}

function cekGenap($angka){
    // if($angka % 2 == 0){
    //         return true;
    // }else {
    //         return false;
    // }
        return $angka % 2 == 0 ? true : false;
}

    $angka = 99;
    if(cekGenap($angka)){
        echo "Bilangan $angka adalah genap<br>";
    }else {
        echo "Bilangan $angka adalah ganjil<br>";
    }
}?>

<!DOCTYPE html>
<html lang=en">
<head>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<body>
    <h1>
        <?php hello();
        echo " 2 + 3 = ".tambah(2,3);
        ?>
    </h1>
</body>
</html>