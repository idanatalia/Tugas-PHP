<br>
<?php
$obj_pelanggan = new Pelanggan();
$pelanggan = $obj_pelanggan->Pelanggan();
?>
        
    <form action="pelanggan_controller.php" method="POST">
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Nama Pelanggan</label> 
        <div class="col-8">
          <input id="text" name="nama_pelanggan" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Kode Pelanggan</label> 
        <div class="col-8">
          <input id="text1" name="kode" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Jenis Kelamin</label> 
        <div class="col-8">
          <input id="text2" name="jk" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Tempat Lahir</label> 
        <div class="col-8">
          <input id="text3" name="tmp_lahir" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Tanggal Lahir</label> 
        <div class="col-8">
          <input id="text4" name="tgl_lahir" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Email</label> 
        <div class="col-8">
          <input id="text5" name="email" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text6" class="col-4 col-form-label">Kartu Id</label> 
        <div class="col-8">
          <input id="text6" name="kartu_id" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="form-group row">
          <label for="text6" class="col-4 col-form-label">Alamat</label> 
          <div class="col-8">
            <input id="text6" name="alamat" type="text" class="form-control">
          </div>
        </div> 
        <div class="form-group row">
          <label for="text6" class="col-4 col-form-label">Umur</label> 
          <div class="col-8">
            <input id="text6" name="umur" type="text" class="form-control">
          </div>
        </div> 
        <div class="offset-4 col-8">
          <button name ="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </body>



<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script> -->