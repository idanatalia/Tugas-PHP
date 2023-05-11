<br>
<?php
$obj_pesanan = new Pesanan();
$pesanan = $obj_pesanan->Pesanan();

?>
        
    <form action="pesanan_controller.php" method="POST">
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Kode Produk</label> 
        <div class="col-8">
          <input id="kd_produk" name="kd_produk" type="text" class="form-control" value="<?= $prod['kd_produk']?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Qty</label> 
        <div class="col-8">
          <input id="qty" name="qty" type="text" class="form-control" value="<?= $prod['qty']?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Harga</label> 
        <div class="col-8">
          <input id="harga" name="harga" type="text" class="form-control" value="<?= $prod['harga']?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Id Pelanggan</label> 
        <div class="col-8">
          <input id="id_pelanggan" name="id_pelanggan" type="text" class="form-control" value="<?= $prod['id_pelanggan']?>">
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