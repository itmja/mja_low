<div class="row g-1 py-1 row-cols-3 row-cols-lg-6">
<?php
    $uid = $_SESSION['uid'];
    $no =1;
    $deteil = mysqli_query($koneksi,"SELECT * FROM berkas WHERE uid='$uid'");
    while($n = mysqli_fetch_array($deteil)){ 
?>
<div class="feature col shadow-sm p-3 mb-5 bg-body rounded">
    <div class="feature-icon bg-gradient">
        <?php
            $filename = $n['detail'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if ($ext === 'doc' || $ext === 'docx') {
        ?>
            <img src="func/uploads/docs.png" alt="" width="150" height="150">
        <?php
            }elseif($ext === 'PDF'){
        ?>
            <img src="func/uploads/pdf.png" alt="" width="150" height="150">
        <?php } ?>
    </div>
    <h4><?= $n['nama_berkas'] ?></h4>
    <a href="func/uploads/<?= $n['detail'] ?>" class="icon-link">
        Downloads
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
    </a>
</div>
<?php } ?>
</div>