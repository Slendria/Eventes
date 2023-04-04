<?php
$nama = "Joko";

echo "Hello " . $nama;
echo "<br>";
if($nama=="Vanessa"){
    echo "Gender = Wanita";
} elseif ($nama == "Joko"){
    echo "Gender = Pria";
}
    else{
        echo "Gender = Gak Jelas";
    }

$x = 10;
echo "<br>";
while($x >= 1){
    echo $x;
    echo "<br>";
    $x--;
}
?>
<style>
    .kuning{
        background-color: yellow;
    }   
</style>
<table border=1>
    <tr>
        <th>No.</th>
        <th>Data</th>
    </tr>
<?php

for ($i=1; $i <= 20; $i++) {
    $warna = "";
    if ($i%2 == 0){
        $warna = "kuning";
    }
    echo '<tr class="'.$warna.'">
    <td>' . $i . '</td>
    <td>Data ke '.$i.'</td>
    </tr>';
}
?>
</table>