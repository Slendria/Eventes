<?php
$data_pegawai = file("pegawai.txt");
echo "<table border=1>
<tr>
    <th>No.</th>
    <th>Nama</th>
    <th>Tanggal Lahir</th>
    <th>Posisi</th>
</tr>";
foreach ($data_pegawai as $key => $value) {
    $pegawai = explode(";", $value);
    echo "
    <tr>
        <td>$pegawai[0]</td>
        <td>$pegawai[1]</td>
        <td>$pegawai[2]</td>
        <td>$pegawai[3]</td>
    </tr>";
}
echo "</table>";
file_put_contents("pegawai.txt", $data, FILE_APPEND);

$data_pegawai = file("pegawai.txt");
echo "<table border=1>
<tr>
    <th>No.</th>
    <th>Nama</th>
    <th>Tanggal Lahir</th>
    <th>Posisi</th>
</tr>";
    foreach ($data_pegawai as $key => $value) {
        $pegawai = explode(";", $value);
        echo "
        <tr>
            <td>$pegawai[0]</td>
            <td>$pegawai[1]</td>
            <td>$pegawai[2]</td>
            <td>$pegawai[3]</td>
        </tr>";
    }echo "</table>";

$nama = $_POST['nama'];
$tgl = $_POST['tgl_lahir'];
$DPD = $_POST['dpd'];

$data = $nama. ";" .$tgl. ";". $DPD ;
file_put_contents("pegawai.txt", $data, FILE_APPEND);