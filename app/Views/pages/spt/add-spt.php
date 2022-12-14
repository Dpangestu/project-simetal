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
            <form action="<?= site_url('/spt/store') ?>" method="post" id="add-spt" name="add-spt">
                <div class="card-body">

                    <div class="form-group">
                    <label for="owner">Nama Pemohon/Perusahaan</label>
                      <input    type="text" 
                                class="form-control" 
                                id="owner"
                                name="owner"
                                placeholder="Nama Pemohon/Perusahaan">
                    </div>

                    <div class="form-group">
                    <label for="applicant_date">Tanggal Pelaksanaan</label>
                      <input    type="date" 
                                class="form-control" 
                                id="applicant_date"
                                name="applicant_date"
                                placeholder="Tanggal Pelaksanaan">
                    </div>

                    <div class="form-group">
                    <label for="address">Alamat Pelaksanaan</label>
                      <input    type="text" 
                                class="form-control" 
                                id="address"
                                name="address"
                                placeholder="Alamat Pelaksanaan">
                    </div>
                    
                    <div class="form-group">
                        
                    <label for="officer">Petugas</label>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="officer" placeholder="Petugas" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="NIP" aria-label="Last name">
                        </div>
                        </div>
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