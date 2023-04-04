<?php

require "config.php";

$sql = "SELECT * FROM kontak";
$stmt = $conn->prepare($sql);
$stmt->execute();
$hasil = $stmt->get_result();
echo '<table border=1>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>';
$i= 1;
while ($row = $hasil->fetch_assoc()) {
    
    echo "<tr><td>$i</td><td>".$row['nama']."</td><td>".$row['no_hp']."</td><td>".$row['alamat']."</td><td><a href='edit_data.php?id=".$row['id']. "'>Edit</a> <a href='data_proses.php?action=hapus&id=".$row['id']. "'>hapus</a>   </td></tr>";
    $i++;
}

echo "</table>";

?>

<a href="tambah_data.php">Tambah data</a>