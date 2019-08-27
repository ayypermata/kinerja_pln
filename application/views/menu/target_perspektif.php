<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary"><?= $title; ?></h4>
        </div>
    </div>

    <?php echo $this->session->flashdata('message'); ?>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Target Pers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="home">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Penambahan Pelanggan Target</h4>
            </div>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newdatapelanggan">Tambah Data</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Unit</th>
                        <th scope="col"></th>
                        <th scope="col">Jan</th>
                        <th scope="col">Feb</th>
                        <th scope="col">Mar</th>
                        <th scope="col">Apr</th>
                        <th scope="col">Mei</th>
                        <th scope="col">Jun</th>
                        <th scope="col">Jul</th>
                        <th scope="col">Agu</th>
                        <th scope="col">Sep</th>
                        <th scope="col">Okt</th>
                        <th scope="col">Nov</th>
                        <th scope="col">Des</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($target_pelanggan as $n) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $n->nama_unit; ?></td>
                        <td></td>
                        <td><?= $n->jan; ?></td>
                        <td><?= $n->feb; ?></td>
                        <td><?= $n->mar; ?></td>
                        <td><?= $n->apr; ?></td>
                        <td><?= $n->mei; ?></td>
                        <td><?= $n->jun; ?></td>
                        <td><?= $n->jul; ?></td>
                        <td><?= $n->agu; ?></td>
                        <td><?= $n->sep; ?></td>
                        <td><?= $n->okt; ?></td>
                        <td><?= $n->nov; ?></td>
                        <td><?= $n->des; ?></td>
                        <td>
                            <a href="<?php echo site_url('menu/update_data_target/' . $n->id_target); ?>" class="badge badge-success">Edit </a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>






        <div class="tab-pane container fade" id="menu1">...</div>
        <div class="tab-pane container fade" id="menu2">...</div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="newdatapelanggan" tabindex="-1" role="dialog" aria-labelledby="newperspektiflabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newperspektiflabel">Edi Penambahan Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action "<?= base_url('menu/addtarget_perspektif'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="nama_unit" id="nama_unit" class="form-control">
                            <option value="">Select Nama Unit</option>
                            <option value="Sawerigading">Sawerigading</option>
                            <option value="Makale">Makale</option>
                            <option value="Malili">Malili</option>
                            <option value="Belopa">Belopa</option>
                            <option value="Tomoni">Tomoni</option>
                            <option value="Masamba">Masamba</option>
                            <option value="Rantepao">Rantepao</option>
                            <option value="Area Palopo">Area Palopo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="jan" name="jan" placeholder="Target Januari">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="feb" name="feb" placeholder="Target Februari">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mar" name="mar" placeholder="Target Maret">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="apr" name="apr" placeholder="Target April">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mei" name="mei" placeholder="Target Mei">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="jun" name="jun" placeholder="Target Juni">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="jul" name="jul" placeholder="Target Juli">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="agu" name="agu" placeholder="Target Agustus">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="sep" name="sep" placeholder="Target September">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="okt" name="okt" placeholder="Target Oktober">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nov" name="nov" placeholder="Target November">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="des" name="des" placeholder="Target Desember">
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