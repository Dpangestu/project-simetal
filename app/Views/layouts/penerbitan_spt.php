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
            <div class="col-md-10">

              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">FORM PENGISIAN PEMBUATAN SURAT PERINTAH TUGAS PELAYANAN TERA/TERA ULANG</h3>
                </div>


                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">No Order Pelayanan</label>
                      <input type="email" class="form-control" id="exampleInputNoorderpelayanan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Pemohon/ Perusahaan</label>
                      <input type="password" class="form-control" id="exampleInputNamapemohon/perusahaan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tanggal Pelaksanaan</label>
                      <input type="password" class="form-control" id="exampleInputTanggalpelaksanaan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Alamat Pelaksanaan</label>
                      <input type="password" class="form-control" id="exampleInputAlamatpelaksanaan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Petugas Yang Ditunjuk</label>
                      <input type="Nama" class="form-control" id="exampleInputPetugasyangdituju" placeholder=" Nama">
                      <input type="NIP" class="form-control" id="exampleInputPetugasyangdituju" placeholder=" NIP">
                    </div>
                    <div class="float-left">
								      <a href="" class="btn btn-sm btn-warning"><i class="fa fa-plus"></i> Tambah Petugas</a>
							      </div>
                    <div class="float-right">
								      <a href="" class="btn btn-sm btn-primary"><i class="fa fas-create"></i> Simpan</a>
							      </div>
                </form>
              </div>

            </div>

          </div>
</body>
<?= $this->include('layouts/footer') ?>