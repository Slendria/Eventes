<?php

//menulis data ke file 
$filePath = "pegawai.txt";
    $lines = count(file($filePath));
    $lines++;

$nama = $_POST['nama'];
$tanggal = $_POST['tgl_lahir'];
$dprt = $_POST['dpd'];

$data = "\n".$lines.";". $nama.";". $tanggal.";". $dprt;
file_put_contents("pegawai.txt", $data, FILE_APPEND);

echo "</table>";

$pegawai_data = file("pegawai.txt");
echo "<table border=1>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Tnggal Lahir</th>
            <th>Posisi</th>
        </tr>";

foreach ($pegawai_data as $key => $value) {
    $pegawai = explode (";", $value);
    echo "<tr>
        <td>$pegawai[0]</td>
        <td>$pegawai[1]</td>
        <td>$pegawai[2]</td>
        <td>$pegawai[3]</td>
    </tr>";
};
echo "</table>";
?>