<?php
include("koneksi.php");?>

<html>
    <head>
</head>
<body>
    <h1>Data pasien</h1>
    <h4> <a href=tambah.php>Ke Halaman Pertama</a></h4>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>alamat</th>
            <th>jenis kelamin</th>
            <th>no telpn</th>
            <th>agama</th>
            <th>tanggal masuk</th>
            <th>gejala</th>
            <th>tempat lahir</th>
            <th>tanggal lahir</th>
            <th>no kamar</th>
</tr>

<?php
include("koneksi.php");
$sql='SELECT * FROM tb_pasien';
$query = mysqli_query($koneksi, $sql);

while($datapasien=mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>".$datapasien['id']."</td>"; 
    echo "<td>".$datapasien['nama']."</td>";
    echo "<td>".$datapasien['alamat']."</td>";
    echo "<td>".$datapasien['jenis_kelamin']."</td>";
    echo "<td>".$datapasien['no_nelpn']."</td>";
    echo "<td>".$datapasien['agama']."</td>";
    echo "<td>".$datapasien['tangal_masuk']."</td>";
    echo "<td>".$datapasien['gejala']."</td>";
    echo "<td>".$datapasien['tempat_lahir']."</td>";
    echo "<td>".$datapasien['tanggal_lahir']."</td>";
    echo "<td>".$datapasien['no_kamar']."</td>";
    echo "<td>";
    echo "<a href= 'edit-pendataanpasien?id=".$datapasien['id']."'>Edit</a> |";
    echo "<a href= 'hapus-pendataanpasien?id=".$datapasien['id']."'>Hapus</a>";
    echo "</tr>";
    

}
?>
</table>
</body>
</html>