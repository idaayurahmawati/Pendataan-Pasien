<!DOCTYPE html>
<html lang="en>
<head>
    <title>form pendaftaran pesien baru</title>
</head>
      <header>
         <h3>form pemdaftaran pesien baru<h3>
</header>
<form action="proses_pendaftaran.php" method="POST">
    <fieldset>
        <p>
            <label for="nama">Nama Lengkap :</label>
            <input type="text" name="nama" />
</p>
<P>
    <label for="alamat"> Alamat:</label>
    <textarea name="alamat" row="5"></textarea>
</p>
<P>
    <label for="jk">Jenis kelamin :</label>
    <label><input type="radio" name="jenis_kelamin" value="laki-laki" />laki-laki</label>
    <label><input type="radio" name="jenis-kelamin" value="perempuan" />perempuan</label>
</p>
<p>
    <label for="notelp">No telepon:</label>
    <input type="number" name="no_nelpn" />
</p>
<p>
    <label for="agama">Agama : </label>
    <select name="agama">
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="katolik">Katolik</option>
        <option value="hindu">Hindu</option>
        <option value="budha">Budha</option>
        <option value="konghucu">Konghucu</option>
</select>
</p>
<p>
    <label for="tgl_masuk">Tanggal_Masuk </label>
    <input type="date" name="tangal_masuk" />
</p>
<p>
    <label for="gejala">Gejala:</label>
    <input type="text" name="gejala" />
</p>
<p>
    <label for="tmp_lahir">Tempat_Lahir:</label>
    <input type="text" name="tempat_lahir" />
</p>
<p>
    <label for="tgl_lahir">Tanggal_Lahir:</label>
    <input type="date" name="tanaggl_lahir" />
</p>
<p>
    <label for="no_kamar">No_kamar:</label>
    <input type="number" name="no_kamar" />
</p>
<p>
    <input type="sumbit" value="tambah pesien" name="tambah" />
</p>
</fieldset>
</body>
</html>
