        
        <!-- Portfolio Modal 2-->
        <p>© IT Specialist <a href="https://mitrajuaabadi.co.id/" target="_blank">PT. MITRA JUA ABADI</a></p>
<script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="offcanvas.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../../js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <?php
        if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
        ?>
        <script>
            swal({
            title: "Good job!",
            text: "Anda Berhasil Masuk",
            icon: "success",
            button: "Aww yiss!",
            });
        </script>
        <?php
        unset($_SESSION['status']);
        }
      
      ?>
       <?php
        if(isset($_GET['msg1']) && $_GET['msg1'] != ''){
        ?>
        <script>
            swal({
            title: "Peringatan !!",
            text: "Anda Harus Melengkapi Data",
            icon: "warning",
            button: "Close",
            });
        </script>
        <?php
        unset($_SESSION['status']);
        }
      
      ?>
      <?php
        if(isset($_GET['msg2']) && $_GET['msg2'] != ''){
        ?>
        <script>
            swal({
            title: "Peringatan !!",
            text: "Anda harus Mengpload Berkas Terlebih Dahulu",
            icon: "warning",
            button: "Close",
            });
        </script>
        <?php
        unset($_SESSION['status']);
        }
      
      ?>
         <?php
        if(isset($_GET['msg']) && $_GET['msg'] != ''){
        ?>
        <script>
            swal({
            title: "Peringatan !!",
            text: "Anda Sudah Melamar",
            icon: "warning",
            button: "Close",
            });
        </script>
        <?php
        unset($_SESSION['status']);
        }
      
      ?>
      
  </body>
</html>
