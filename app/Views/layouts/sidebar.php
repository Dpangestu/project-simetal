<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= base_url() ?>/dist/img/DinasKota.png" alt="DinasKota Logo" class="brand-image img-circle elevation-3">
    <span class="brand-text font-weight-light">SIMETAL KOCIR</span>
  </a>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <section id="sidebarmenu">
    <nav class="mt-2">
      <ul class="nav navbar-nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php if (in_groups('admin')) : ?>
          <li class="nav-item">
            <a href="<?php echo base_url('dashboard') ?>" class="nav-link <?= current_url(true)->getSegment(1) == 'dashboard' && current_url(true)->getSegment(2) == NULL ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('tera') ?>" class="nav-link <?= current_url(true)->getSegment(1) == 'tera' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-industry"></i>
              <p>
                Tera/Tera Ulang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('spt') ?>" class="nav-link <?= current_url(true)->getSegment(1) == 'spt' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Surat Perintah Tugas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('penerbitan_spt') ?>" class="nav-link">
              <i class="nav-icon fas fa-user-secret"></i>
              <p>Admin</p>
            </a>
          </li>
        <?php endif; ?>

        <!-- akun kadis -->
        <?php if (in_groups('kadis')) : ?>
          <li class="nav-item">
            <a href="<?php echo base_url('kadis') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Surat Pelayanan Tera
              </p>
            </a>
          </li>
        <?php endif; ?>

        <!-- akun sub koordinator  -->
        <?php if (in_groups('subkoor')) : ?>
          <li class="nav-item">
            <a href="<?php echo base_url('subkoordinator') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Surat Pelayanan Tera
              </p>
            </a>
          </li>
        <?php endif; ?>

        <!-- akun kabid -->
        <?php if (in_groups('kabid')) : ?>
          <li class="nav-item">
            <a href="<?php echo base_url('kabid') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Surat Pelayanan Tera
              </p>
            </a>
          </li>
        <?php endif; ?>

        <!-- akun sekdis -->
        <?php if (in_groups('sekdis')) : ?>
          <li class="nav-item">
            <a href="<?php echo base_url('sekdis') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Surat Pelayanan Tera
              </p>
            </a>
          </li>
        <?php endif; ?>

        <!-- akun penera -->
        <?php if (in_groups('penera')) : ?>
          <li class="nav-item">
            <a href="<?php echo base_url('penera') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Surat Pelayanan Tera
              </p>
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
    <!-- /.sidebar -->

  </section>
</aside>