<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simetal Kocir | Registration</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-orange">
            <div class="card-header text-center">
                <H1><B>SIMETAL</B> Kocir</H1>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>
                <?= view('Myth\Auth\Views\_message_block') ?>
                    <form action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>
                            <div class="input-group mb-3">
                                <input type="text"
                                    class="form-control <?php if (session('errors.username')): ?>is-invalid<?php endif ?>"
                                    name="username" placeholder="<?= lang('Auth.username') ?>"
                                    value="<?= old('username') ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email"
                                    class="form-control <?php if (session('errors.email')): ?>is-invalid<?php endif ?>"
                                    name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>"
                                    value="<?= old('email') ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="password"
                                    class="form-control <?php if (session('errors.password')): ?>is-invalid<?php endif ?>"
                                    placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="pass_confirm"
                                        class="form-control <?php if (session('errors.pass_confirm')): ?>is-invalid<?php endif ?>"
                                        placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                        <label for="agreeTerms">
                                            I agree to the <a href="#">terms</a>
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button>
                                </div>
                                <!-- /.col -->
                            </div>
                    </form>
                    <hr>
                    <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>/dist/js/adminlte.min.js"></script>
</body>

</html>