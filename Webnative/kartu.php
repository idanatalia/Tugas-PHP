<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new kartu();
$kartu = $model->Kartu();

// foreach($data_produk as $row){
//     print $row['kode'];
// }

?>
                        <h1 class="mt-4">Table Data Kartu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama </th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                                                                   
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama </th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        $no =1;
                                        foreach($kartu as $row){
                                        
                                        ?>
                                        <tr>
                                            <td><?= $no?></td>
                                            <td><?= $row['kode']?></td>
                                            <td><?= $row['nama']?></td>
                                            <td><?= $row['diskon']?></td>
                                            <td><?= $row['iuran']?></td>
                                            
                                            
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