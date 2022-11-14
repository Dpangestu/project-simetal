<?= $this->extend('layouts/tamplate'); ?>
<?= $this->section('content'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>Form Pembuatan Surat Perintah Tugas Pelayanan Tera/Tera Ulang</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <form action="">
                <div class="card-body">
                    <div class="form-group">
                    <label for="">No Order Pelayanan</label>
                      <input    type="text" 
                                class="form-control" 
                                id=""
                                name=""
                                placeholder="No Order Pelayanan">
                    </div>

                    <div class="form-group">
                    <label for="">Nama Pemohon/Perusahaan</label>
                      <input    type="text" 
                                class="form-control" 
                                id=""
                                name=""
                                placeholder="Nama Pemohon/Perusahaan">
                    </div>

                    <div class="form-group">
                    <label for="">Tanggal Pelaksanaan</label>
                      <input    type="text" 
                                class="form-control" 
                                id=""
                                name=""
                                placeholder="Tanggal Pelaksanaan">
                    </div>

                    <div class="form-group">
                    <label for="">Alamat Pelaksanaan</label>
                      <input    type="text" 
                                class="form-control" 
                                id=""
                                name=""
                                placeholder="Alamat Pelaksanaan">
                    </div>
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-warning ">Save</button>
                        <!-- type="submit"  -->
                        <button href="<?php echo base_url('spt') ?>" class="btn btn-default float-right">Cancel</button></a>
                    </div>
            </form>
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->

<?= $this->endSection(); ?>