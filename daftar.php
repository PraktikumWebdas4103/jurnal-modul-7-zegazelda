<form action="proses.php" method="POST">
	<p>
	Nama: <input type="text" name="nama"><br>
</p>
<p>
	Nim: <input type="text" name="nim"><br>
</p>
<p>
	<label for="kelamin">Kelamin: </label>
    <input type="radio" name="kelamin" value="laki-laki">laki-laki<br>
    <input type="radio" name="kelamin" value="perempuan">perempuan<br>
</p>
<p>
   <label for="prodi">Prodi: </label>
   <select name="prodi">
   <option value="pilih">pilih</option>
   <option value="MI">Manajemen Informatika</option>
   <option value="IF">Teknik Informatika</option>
   </select>
</p>
<p>
   <label for="fakultas">Fakultas: </label>
   <select name="fakultas">
   <option value="pilih">pilih</option>
   <option value="terapan">terapan</option>
   <option value="informatika">informatika</option>
   </select>
</p>
<p>
	Asal: <input type="text" name="asal">
</p>
<p>
    <label for="alamat">Moto Hidup: </label>
    <textarea name="moto" required></textarea>
</p>
<p>
	<input type="submit" name="daftar" placeholder="submit">
</p>
</form>