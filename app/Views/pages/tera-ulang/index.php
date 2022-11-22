<?= $this->extend('layouts/tamplate'); ?>
<?= $this->section('content'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h1>Pelayanan Tera/Tera Ulang</h1>
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
            <div class="card-tools">
                    <form ng-submit="itemSearch()" class="form-inline" role="form">
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search" [(ngModel)]="searchText">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default" (click)="itemSearch()">
                          <i class="fas fa-search"></i>
                      </button>
                            </div>
                        </div>
                        &nbsp;
                        <div class="input-group-append">
                            <a class="btn btn-warning btn-sm" href="<?php echo base_url('tera/add') ?>">
                                <i class="fas fa-plus-circle"></i>
                            </a>
                        </div>
                        &nbsp;
                        <div class="input-group-append">
                            <a class="btn btn-warning btn-sm" href="#">
                                <i class="fas fa-print"></i>
                            </a>
                        </div>
                        &nbsp;
                        <div class="input-group-append">
                            <a class="btn btn-warning btn-sm" href="#">
                                <i class="fas fa-sync-alt"></i>
                            </a>
                        </div>
                        &nbsp;
                    </form>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-striped table-bordered text-nowrap">
                    <thead>
                        <tr class="bg-orange">
                            <th>No</th>
                            <th>Pemohon</th>
                            <th>Alamat</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Petugas</th>
                            <th>Status</th>
                            <th style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->

<?= $this->endSection(); ?>