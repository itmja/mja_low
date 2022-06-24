<?php include "head.php" ?>
<main class="container">
    <div class="d-flex align-items-center p-3 my-3 text-white bg-warning rounded shadow-sm">
        <div class="lh-1">
        <h1 class="h6 mb-0 text-white lh-1">Upload Data</h1>
        <small>Format Pdf & Docs.</small>
        </div>
    </div>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <?php include("upload/data.php") ?>
    </div>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <?php include("upload/list.php") ?>
    </div>    
</main>
<?php include "foot.php" ?>