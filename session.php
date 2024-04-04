<?php
echo "<h1>HASIL CETAK</h1>";
session_start();
echo '<table border = "1">';
echo '<tr>';
echo '<th>NAMA</th>';
echo '<th>NIS</th>';
echo '<th>RAYON</th>';
echo '</tr>';

// echo"<br>";
echo"<a href = index.php>Kembali</a>";
echo"<br>";
foreach($_SESSION['dataSiswa'] as $index => $value){
    echo '<tr>';
    echo '<td>' . $value['nama'] . '</td>';
    echo '<td>' . $value['nis'] . '</td>';
    echo '<td>' . $value['rayon'] . '</td>';
    echo '</tr>';
}
    