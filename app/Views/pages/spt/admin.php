<?= $this->extend('layouts/tamplate'); ?>
<?= $this->section('content'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1>Surat Perintah Tugas</h1>
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
                            <a class="btn btn-warning btn-sm" href="<?php echo base_url('spt/add') ?>">
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
                            <th style="width: 50px;">No</th>
                            <th style="width: 150px;">Pemohon</th>
                            <th>Alamat</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Petugas</th>
                            <th>Status</th>
                            <th style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ;?>
                        <?php foreach($spts as $spt): ?>
                        <tr>
                            <td class="text-center"><?= $i++ ;?></td>
                            <td><?= $spt['owner']?></td>
                            <td><?= $spt['address']?></td>
                            <td><?= $spt['applicant_date']?></td>
                            <td><?= $spt['officer']?></td>
                            <td class="text-center">
                            <?= $spt['status']?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-dark btn-sm mx-1" href="#"><i class="fas fa-search"></i></button>
                                <a class="btn btn-warning btn-sm mx-1" href="<?php echo base_url('spt/edit-spt/'.$spt['id']);?>"><i class="fas fa-pencil-alt"></i></a>
                                <button type="button" class="btn btn-primary btn-sm mx-1" href="#"><i class="fas fa-download"></i></button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->

            <div class="card-footer row clearfix">
                <div class="col-md-6 text-left">
                    <ul class="pagination pagination-sm m-0 float-left">
                        <li [ngClass]="{'page-item active': employee.per_page ===  '5'}"><a class="page-link" (click)="getLimit(5)" href="javascript:void(0)">5</a></li>
                        <li [ngClass]="{'page-item active': employee.per_page === '10'}"><a class="page-link" (click)="getLimit(10)" href="javascript:void(0)">10</a></li>
                        <li [ngClass]="{'page-item active': employee.per_page === '25'}"><a class="page-link" (click)="getLimit(25)" href="javascript:void(0)">25</a></li>
                        <li [ngClass]="{'page-item active': employee.per_page === '50'}"><a class="page-link" (click)="getLimit(50)" href="javascript:void(0)">50</a></li>
                        <li [ngClass]="{'page-item active': employee.per_page ==='100'}"><a class="page-link" (click)="getLimit(100)" href="javascript:void(0)">100</a></li>
                    </ul>
                </div>
                <div class="col-md-6 text-right">
                    <ul style="float: right" ng-show="employee.total > 0" class="pagination pagination-sm">
                        <li *ngIf="employee.current_page == 1" class="disabled"><span style="width:50px; opacity: 0.5"><i class="fa fa-step-backward"></i>&nbsp;</span></li>
                        <li *ngIf="employee.current_page != 1"><a style="width:50px" href="javascript:void(0)" (click)="getPaging(1)"><i class="fa fa-step-backward"></i>&nbsp;</a></li>

                        <li *ngIf="employee.current_page == 1" class="disabled"><span style="width:50px; opacity: 0.5"><i class="fa fa-chevron-left"></i>&nbsp;</span></li>
                        <li *ngIf="employee.current_page != 1"><a style="width:50px" href="javascript:void(0)" (click)="getPaging(employee.current_page - 1)"><i class="fa fa-chevron-left"></i>&nbsp;</a></li>

                        <li>
                            <select [(ngModel)]="employee.current_page" (change)="getPaging(employee.current_page)" style="float: left; text-align-last: right; min-width: 50px;
                                border: 1px solid rgb(221, 221, 221); margin-right: 5px; cursor: pointer">

                        <option *ngFor="let item of pageRange" [value]="item" style="direction: rtl;"
                                [selected]="employee.current_page == item"> {{ item }}</option>
                        </select>
                        </li>

                        <li *ngIf="employee.current_page == employee.last_page" class="disabled"><span style="width:50px; opacity: 0.5"><i class="fa fa-chevron-right"></i>&nbsp;</span></li>
                        <li *ngIf="employee.current_page != employee.last_page"><a style="width:50px" href="javascript:void(0)" (click)="getPaging(employee.current_page + 1)"><i class="fa fa-chevron-right"></i>&nbsp;</a></li>

                        <li *ngIf="employee.current_page == employee.last_page" class="disabled"><span style="width:50px; opacity: 0.5"><i class="fa fa-step-forward"></i>&nbsp;</span></li>
                        <li *ngIf="employee.current_page != employee.last_page"><a style="width:50px" href="javascript:void(0)" (click)="getPaging(employee.last_page)"><i class="fa fa-step-forward"></i>&nbsp;</a></li>
                    </ul>
                </div>
            </div>



        </div>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->

<?= $this->endSection(); ?>