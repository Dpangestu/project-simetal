<?= $this->extend('layouts/tamplate'); ?>
<?= $this->section('content'); ?>
<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Beranda</span>
              <span class="info-box-number">
                10
                <small>%</small>
              </span>
            </div>

          </div>

        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Pengaduan</span>
              <span class="info-box-number">41,410</span>
            </div>
          </div>
        </div>


        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Pendaftaran Tera/Tera Ulang</span>
              <span class="info-box-number">760</span>
            </div>
          </div>
        </div>          
        </div>
      </div>
    </div>
</section>

<?= $this->endSection(); ?>