<?php
include "koneksi.php";
$query = mysqli_query($db,"SELECT * FROM baru");
?>
<form action="cari.php">
    <button><a href="daftar.php">input data</a></button>
    <input type="text" name="crnim">
    <input type="submit" name="cari" placeholder="cari">
</form>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>nim</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama"];?></td>
             <td><?php echo $data["nim"];?></td>
            <td>
                  <a href='delete.php?nim=$data[nim]'>Delete</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>