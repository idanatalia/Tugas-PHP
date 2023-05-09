<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new pesanan();
$pesanan = $model->Pesanan();

// foreach($data_produk as $row){
//     print $row['kode'];
// }

?>
                        <h1 class="mt-4">Table Data Pesanan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
                                <!-- membuat tombol mengarahkan ke file produk_form.php -->
                                <a href="index.php?url=pesanan_form.php"class="btn btn-primary btn-sm">Tambah</a>
                                
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Produk</th>
                                            <th>QTY</th>
                                            <th>Harga </th>
                                            <th>Id Pelanggan</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Produk</th>
                                            <th>QTY</th>
                                            <th>Harga </th>
                                            <th>Id Pelanggan</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        $no =1;
                                        foreach($pesanan as $row){
                                        
                                        ?>
                                        <tr>
                                            <td><?= $no?></td>
                                            <td><?= $row['kd_produk']?></td>
                                            <td><?= $row['qty']?></td>
                                            <td><?= $row['harga']?></td>
                                            <td><?= $row['id_pelanggan']?></td>
                                            <td>
                                                <form action="pesanan_controller.php" method="POST">
                                                    <a class="btn btn-info btn-sm" href="index.php?url=pesanan_detail&id=<?= $row['id']?>">Detail</a>
                                                    <a class="btn btn-warning btn-sm">Ubah</a>
                                                    <a class="btn btn-danger btn-sm">Hapus</a>

                                                 <input type="hidden" name="idx" value="<?= $row['id']?>">
                                        </form>
                                            </td>
                                            
                                        </tr>
                                       <?php
                                       $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
</div>
                   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>