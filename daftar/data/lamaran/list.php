<?php

?>
    <table class="table">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Nama Job</th>
            <th>Nomer Pelamar</th>
            <th>Tanggal</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
        <?php   
            $no =1;
            $uid = $_SESSION['uid'];
            $or = mysqli_query($koneksi,"SELECT *,new_job.id_job,kategori_job.nama_job FROM lamar INNER JOIN new_job ON new_job.id_job = lamar.id_job INNER JOIN kategori_job ON kategori_job.id_job = new_job.id_kjob WHERE uid='$uid'");
            while($o = mysqli_fetch_array($or)){
        ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $o['nama_job'] ?></td>
            <td><?= $o['no_lamar'] ?></td>
            <td><?= $o['tgl'] ?></td>
            <td>
                <a href="lamaran/cetak.php?id=<?php echo $o['id_lamar']; ?>&nama=<?php echo $o['nama_job']; ?>&no=<?php echo $o['no_lamar']; ?>&tgl=<?php echo $o['tgl']; ?>" target="popup" onclick="window.open('lamaran/cetak.php?id=<?php echo $o['id_lamar']; ?>&nama=<?php echo $o['nama_job']; ?>&no=<?php echo $o['no_lamar']; ?>&tgl=<?php echo $o['tgl']; ?>','name','width=600,height=400')" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                </svg>
                </a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
    </table>