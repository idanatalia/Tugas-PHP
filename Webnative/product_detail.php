<?php
$id = $_REQUEST['id'];
$model = new Produk();
$produk = $model->getProduk($id);
?>

</div>
<h1 class="mt-4">Detail Produk</h1>
<div class="card-body">
    <div class="card mb-4">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama </th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $kartu['kode']?></td>
                                            <td><?= $kartu['nama']?></td>
                                            <td><?= $kartu['harga_jual']?></td>
                                            <td><?= $kartu['stok']?></td>
                                        </tr>
                                    </tbody>
                                    </table>
</div>
</div>