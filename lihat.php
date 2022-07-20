
<?php 

echo "<head><title>Daftar anggota komunitas</title></head>";
$fp = fopen("anggota.txt", "r");
echo "<h1 align=center><b>Daftar anggota komunitas</b></h1>";
echo "<center><a href='index.php'>Isi Form Pendaftaran </a></center><br>";
echo "<table border='1' align=center width=1250px>";
echo "<tr><td width=200px>Tanggal";
echo "<td width=200px>Nama";
echo "<td width=200px>Email";
echo "<td width=200px>No.telp";
echo "<td width=200px>Alamat";
echo "<td width=225px>Status</td>";
echo "<td width=225px>Kelamin</td></tr>";


while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>$pisah[0]</td>";
    echo "<td>$pisah[1]</td>";
    echo "<td>$pisah[2]</td>";
    echo "<td>$pisah[3]</td>";
    echo "<td>$pisah[4]</td>";
    echo "<td>$pisah[5]</td>";
    echo "<td>$pisah[6]</td></tr>";
}

echo "</table>";


?>
