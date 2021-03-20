<?= $this->extend('static'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-sm-12">

        <h4 class="page-title"><?= $title; ?></h4><br>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
        <form class="form-horizontal group-border-dashed" method="post" action="/artis/simpan" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama</label>
                <div class="col-sm-4">
                    <input type="text" name="nama" class="form-control" required placeholder="Nama" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Tempat Lahir</label>
                <div class="col-sm-4">
                    <input type="text" name="tempat" class="form-control" required placeholder="Tampat Lahir" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Tanggal Lahir</label>
                <div class="col-sm-4">
                    <input type="date" name="tanggal" class="form-control" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Foto</label>
                <div class="col-sm-2">
                    <img src="/img/user.png" class="img-thumbnail img-preview">
                </div>
                <div class="col-sm-4">
                    <input type="file" class="filestyle" id="foto" name="foto" data-buttonname="btn-white" onchange="previewImg()">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Alamat Tinggal</label>
                <div class="col-sm-4">
                    <textarea name="alamat" class="form-control" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Provinsi</label>
                <div class="col-sm-4">
                    <select id="provinsi" name="provinsi" class="selectpicker" data-live-search="true" data-style="btn-white" required>
                    <option value="">Pilih provinsi</option>
                        <?php foreach ($fak as $f) { ?>
                            <option value="<?= $f->id;?>"><?= $f->nama; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">kabkota</label>
                <div class="col-sm-4">
                <select name="kabkota" id="kabkota" class="selectpicker" data-live-search="true" data-style="btn-white" required>
                    <option>Pilih kabkota</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">kecamatan</label>
                <div class="col-sm-4">
                <select name="kecamatan" id="kecamatan" class="selectpicker" data-live-search="true" data-style="btn-white" required>
                    <option>Pilih kecamatan</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 m-t-15">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                    <a href="/artis" class="btn btn-default m-l-5">
                        Kembali
                    </a>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>