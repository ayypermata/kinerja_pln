<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?>
    </h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message');  ?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-center">KINERJA TAHUN 2019</h4>
            <h4 class="text-center">PT PLN (PERSERO) WILAYAH SULSELRABAR</h4>
            <h4 class="text-center">UP3 PALOPO</h4>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr align="middle">
                            <th rowspan="2" style="vertical-align:middle;">No</th>
                            <th rowspan="2" style="vertical-align:middle;">Indikator Kinerja</th>
                            <th rowspan="2" style="vertical-align:middle;">3/1</th>
                            <th rowspan="2" style="vertical-align:middle;">Satuan</th>
                            <th rowspan="2" style="vertical-align:middle;">Bobot</th>
                            <th colspan="2">Target</th>
                            <th>Real</th>
                            <th>Capaian</th>
                            <th>Bobot Realisasi</th>
                        </tr>
                        <tr align="center">
                            <th>Tahun</th>
                            <th>Bulan</th>
                            <th>Bulan</th>
                            <th>%</th>
                            <th>%</th>
                        </tr>
                    </thead>
                    <!-- Query Menu Pers -->
                    <?php foreach ($pers as $p) : ?>
                        <tbody>
                            <tr align="center">
                                <th><?= $p['no']; ?></th>
                                <th><?= $p['nama_perspektif']; ?></th>
                                <th></th>
                                <th></th>
                                <th><?= $p['bobot']; ?></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th><?= $p['bobot_real']; ?></th>
                            </tr>
                        </tbody>
                        <!-- Query Menu Pers -->
                        <?php
                        $kode = $p['kode'];
                        $querypers = "SELECT * 
                        FROM `perspektif_isi` JOIN `perspektif` 
                        ON `perspektif_isi`.`kode_perspektif` = `perspektif`.`kode` 
                        WHERE `perspektif_isi`.`kode_perspektif` = $kode
                        ";
                        $perss = $this->db->query($querypers)->result_array();
                        ?>
                        <?php foreach ($perss as $p1) : ?>
                            <tbody>
                                <tr align="center">
                                    <td><?= $p1['nomor']; ?></td>
                                    <td><?= $p1['indikator']; ?></td>
                                    <td><?= $p1['polaritas']; ?></td>
                                    <td><?= $p1['satuan']; ?></td>
                                    <td><?= $p1['bobot']; ?></td>
                                    <td><?= $p1['target_tahunan']; ?></td>
                                    <td><?= $p1['target_bulanan']; ?></td>
                                    <td><?= $p1['real']; ?></td>
                                    <td><?= $p1['capaian']; ?></td>
                                    <td><?= $p1['real_bobot']; ?></td>
                                </tr>
                            </tbody>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->