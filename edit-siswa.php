<?php 
  
  include('koneksi.php');
  $id = $_GET['id'];
  $query = "SELECT * FROM tbl_siswa WHERE id_siswa = $id LIMIT 1";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_array($result);
  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Edit Siswa</title>                 
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT SISWA
            </div>
            <div class="card-body">
              <form action="update-siswa.php" method="POST">
                
                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nisn" value="<?php echo $row['nisn'] ?>" placeholder="Masukkan NISN Siswa" class="form-control">
                  <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"><?php echo $row['alamat'] ?></textarea>
                </div>

                <button type="submit" class="btn btn-success" onclick="return update()">UPDATE</button>
                <button type="reset" class="btn btn-warning" onclick="return reset()">RESET</button>
                <a href="index.php" class="btn btn-danger" type="button">KEMBALI</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
    <script>
      function update(){
        if(confirm('Apakah Kamu Yakin Untuk Mengubah Data??')){
        return true;
      }else {
        alert ('Kamu Membatalkan')
        return false;
      }
      }
      function reset(){
        if(confirm('Apakah Kamu Yakin Untuk Mereset Data Yang Sudah Di Ubah')){
          return true;
        }else{
          return false;
        }
      }
    </script>
  </body>
</html>