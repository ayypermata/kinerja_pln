<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary"><?= $title; ?></h4>
        </div>
    </div>
    <?php echo $this->session->flashdata('message'); ?>

    <form method="post" action="<?php echo site_url('menu/proses_data_target'); ?>">
        <div class="form-group">

            <?php foreach ($data_pelanggan as $row) : ?>
            <select name="nama_unit" id="nama_unit" class="form-control">
                <option value="">Select Nama Unit</option>
                <option value="<?php echo $row->nama_unit; ?>"></option>
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
            <input type="text" class="form-control" id="jan" name="jan" placeholder="Target Januari" value="<?php echo $row->jan; ?>">
        </div>
        <div class=" form-group">
            <input type="text" class="form-control" id="feb" name="feb" placeholder="Target Februari" value="<?php echo $row->feb; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="mar" name="mar" placeholder="Target Maret" value="<?php echo $row->mar; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="apr" name="apr" placeholder="Target April" value="<?php echo $row->apr; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="mei" name="mei" placeholder="Target Mei" value="<?php echo $row->mei; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="jun" name="jun" placeholder="Target Juni" value="<?php echo $row->jun; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="jul" name="jul" placeholder="Target Juli" value="<?php echo $row->jul; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="agu" name="agu" placeholder="Target Agustus" value="<?php echo $row->agu; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="sep" name="sep" placeholder="Target September" value="<?php echo $row->sep; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="okt" name="okt" placeholder="Target Oktober" value="<?php echo $row->okt; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="nov" name="nov" placeholder="Target November" value="<?php echo $row->nov; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="des" name="des" placeholder="Target Desember" value="<?php echo $row->des; ?>">
        </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Simpan
        </button>
</div>