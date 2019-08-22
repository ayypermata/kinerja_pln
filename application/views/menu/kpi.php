<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?= form_error('perspektif', '<div class="alert alert-danger" role="alert">', '</div'); ?>
    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col">

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newperspektif">Tambah Perspektif Baru</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Perspektif</th>
                        <th scope="col">Indikator</th>
                        <th scope="col">Polaritas</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Bobot</th>
                        <th scope="col">Target Tahunan</th>
                        <th scope="col">Target Bulanan</th>
                        <th scope="col">Real</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pers as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $p['kode_perspektif']; ?></td>
                            <td><?= $p['indikator']; ?></td>
                            <td><?= $p['polaritas']; ?></td>
                            <td><?= $p['satuan']; ?></td>
                            <td><?= $p['bobot']; ?></td>
                            <td><?= $p['target_tahunan']; ?></td>
                            <td><?= $p['target_bulanan']; ?></td>
                            <td><?= $p['real']; ?></td>
                            <td>
                                <a href="" class="badge badge-success" data-toggle="modal" data-target="#editperspektif">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Modal -->
<div class="modal fade" id="newperspektif" tabindex="-1" role="dialog" aria-labelledby="newperspektiflabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newperspektiflabel">Tambah Perspektif Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action "<?= base_url('menu/addkpi'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="kode_perspektif" id="kode_perspektif" class="form-control">
                            <option value="">Select Kode Perspektif</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <<option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="indikator" name="indikator" placeholder="Indikator">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="polaritas" name="polaritas" placeholder="Polaritas">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Satuan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="bobot" name="bobot" placeholder="Bobot">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="target_tahunan" name="targettahunan" placeholder="Target Tahunan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="target_bulanan" name="targetbulanan" placeholder="Target Bulanan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="real" name="real" placeholder="Real">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>