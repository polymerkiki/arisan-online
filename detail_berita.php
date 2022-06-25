<?php
include "koneksi.php";

$id = $_GET['id'];
$sqlt = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE id_Berita='$id'");
while ($dat = mysqli_fetch_array($sqlt)) {
    ?>
<br><br>
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="wthree-about-left-info">
                    <img width="500" src="admin/admin/images/<?= $dat['foto_berita']; ?>" alt="" />
                </div>
            </div>
            <div class="col-md-6">
                <h5><?php echo $dat['judul_berita']; ?></h5>
                <p><?php echo $dat['tgl_berita']; ?></p>
                <p><?php echo $dat['isi_berita']; ?></p>
            </div>
            <div class="clearfix"> </div>
            <?php } ?>
        </div>
    </div>
</div>
<br><br><br>
<!-- //about -->