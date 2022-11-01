<?= $this->include('layouts/header') ?>
<?= $this->include('layouts/sidebar') ?>
<body>
    <div class="container-fluid">
    <div class="card">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simetal Kocir</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="col card-header text-right">
                <h3 class="card-title">LIST SURAT PERINTAH TUGAS PELAYANAN TERA/TERA ULANG </h3>
              </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Pemohon</th>
                    <th>Alamat</th>
                    <th>Tanggal Pelaksanaan Tugas</th>
                    <th>Petugas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>y</td>
                        <td>rr</td>
                        <td>ppp</td>
                        <td>ss</td>
                        <td>sds</td>
                        <td>
                            <button type="button" class="btn btn-primary">REVIEW</button>
                            <button type="button" class="btn btn-danger">REVISI</button>
                            <button type="button" class="btn btn-warning">VERIFIKASI</button>                   
                        </td> 
                        
                    </tr>
                    
                  </tfoot>
                </table>
              </div>
            </div>
            
            </div>
            
          </div>
          
        </div>
</body>
<?= $this->include('layouts/footer') ?>