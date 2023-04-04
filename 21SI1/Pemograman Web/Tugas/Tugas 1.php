<?php
function faktorial($x){ //rumus faktorial
	$angka = 1;
	$faktorial = 1;
	 while($angka <= $x){
		 $faktorial = $faktorial * $angka;
		 $angka = $angka + 1;
	 }
	  return $faktorial;
}
?>
<h1>Tabel Faktorial</h1>
<style>
    h1{
        text-align:center;
    }
    .kuning{ 
        background:#fbf6cc;;
    }
    .biru{
        background:#cce8fb;;
    }
    th{
        
        background-color:blue;
        color:white;
    }
    th{
        
        background-color:#f00;
        color:white;
    }
    tr{
        padding-left:20pt;
    }
    td{
        
    }
    table{
        margin-left:auto;
        margin-right:auto;
        border: 2px solid black
        /* box-shadow: 0px; */
    }
</style>
<table>
    <tr>
        <th style="width:80pt">Faktorial</th>
        <th style="width:200pt">Hasil</th>
    </tr>
<?php
for ($a=1; $a <= 10; $a++) {
    $warna = "kuning";
    if($a % 2 == 0){
        $warna = "biru";
    }
    echo '<tr style="text-align:center" class="'.$warna.'">
    <td>'. $a .'</td>
    <td>'.faktorial($a).'</td>
    </tr>';
}
?>
</table>
