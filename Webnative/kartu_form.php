<br>
<?php
$obj_kartu = new Kartu();
$kartu = $obj_kartu->Kartu();
?>
        
    <form action="kartu_controller.php" method="POST">
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Kode </label> 
        <div class="col-8">
          <input id="kode" name="kode" type="text" class="form-control" value="<?= $prod['kode']?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
          <input id="nama" name="nama" type="text" class="form-control" value="<?= $prod['nama']?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Diskon</label> 
        <div class="col-8">
          <input id="diskon" name="diskon" type="text" class="form-control" value="<?= $prod['diskon']?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Iuran</label> 
        <div class="col-8">
          <input id="iuran" name="iuran" type="text" class="form-control" value="<?= $prod['iuran']?>">
        </div>
      </div>
        <div class="offset-4 col-8">

         <?php
            if(empty($idedit)){
        ?>
          <button name ="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
          <?php
  }
  else{
          ?>
          <button name ="proses" type="submit" value="ubah" class="btn btn-primary">Update</button>
          <input type="hidden" name="idx" value="<?= $idedit ?>">
          <?php
  }
          ?>
          <button name ="proses" type="submit" value="batal" class="btn btn-primary">Cancel</button>
        </div>
      </div>
    </form>



<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script> -->