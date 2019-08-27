<!-- Begin Page Content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6">
                    <?= $this->session->flashdata('message');  ?>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h1 class="m-0 font-weight-bold text-center text-primary">KINERJA TAHUN 2019</h1>
                    <h2 class="m-0 font-weight-bold text-center text-primary">PT PLN (PERSERO) WILAYAH SULSELRABAR</h2>
                    <h3 class="tm-0 font-weight-bold text-center text-primary">UP3 PALOPO</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" data-show-refresh="true" id="datatabel" width="100%" cellspacing="0">
                            <thead>
                                <tr>
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
                            <!-- Query Menu Pers -->
                            <?php
                                $kode = $p['kode'];
                                $querypers = "SELECT * 
                        FROM `perspektif_isi` JOIN `perspektif` 
                        ON `perspektif_isi`.`kode_perspektif` = `perspektif`.`kode` 
                        WHERE `perspektif_isi`.`kode_perspektif` = $kode ";
                                $pers1 = $this->db->query($querypers)->result_array();
                                ?>
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
                            <?php foreach ($pers1 as $p1) : ?>
                            <tbody>
                                <tr align="center">
                                    <td><?= $p1['nomor']; ?></td>
                                    <td style="text-align:left;"><?= $p1['indikator']; ?></td>
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
    </div>

    </div>
</section>