<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header" align = "center">
              TAMBAH SISWA
            </div>
            <div class="card-body">
              <form action="simpan-siswa.php" method="POST" >
                
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nisn" placeholder="Masukkan NISN Siswa" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Siswa" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"></textarea required>
                </div>
                
                <button type="submit" value="simpan" class="btn btn-success" onclick="return melanjutkan()">SIMPAN</button>
                <button type="reset" value="ulang"class="btn btn-warning" onclick="return mereset()">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Custom Alert Modal -->
    <div class="modal fade" id="customAlertModal" tabindex="-1" aria-labelledby="customAlertModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="customAlertModalLabel">SAYA MENYATAKAN</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            SELAMAT DATANG WAHAI MURID BAJINGAN!!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Oke</button>
          </div>
        </div>
      </div>
    </div>
    <script>
       window.onload = function() {
        var myModal = new bootstrap.Modal(document.getElementById('customAlertModal'), {
          backdrop: 'static',
          keyboard: false
        });
        myModal.show();
      }
    function melanjutkan(){
    if (confirm('Apakah Anda Yakin Melanjutkan?')){
      return true;
    }else{
      alert('Anda Membatalkan');
      return false;
    }
}
  function mereset(){
  if (confirm('Apakah Anda Yakin Untuk Mereset? ')){
    return true;
  }else{
    alert ('Anda Membatalkan');
    return false;
  }
}
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
  </body>
</html>