<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            text-decoration: none;
            margin: 0px;
            padding: 0px;

        }

        body {
            background: #364f6b;
            font-family: arial;
            color: white;
        }

        .wrapper {
            width: 1100px;
            margin: auto;
            position: relative;

        }

        .logo a {
            font-size: 50px;
            font-weight: 800;
            float: left;
            font-family: courier;
            color: #364f6b;
        }

        .menu {
            float: right;
        }

        nav {
            width: 100%;
            margin: auto;
            display: flex;
            line-height: 80px;
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            background: #ffffff;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            color: black;
            font-weight: bold;
            text-align: center;
            padding: 0px 16px 0px 16px;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .kolom {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .kolom-deskripsi {
            font-size: 20px;
            font-weight: bold;
            font-family: 'comic sans ms';
            color: #364f6b;
        }

        h2 {
            font-family: 'comic sans ms';
            font-weight: 200;
            font-size: 20px;
            margin-bottom: 20px;
            color: white;
            width: 100%;
            line-height: 50px;
        }
    </style>
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=""> Simetal Kocir </a></div>
            <div class="menu">
                <ul>
                    <li><a href="#Beranda">Beranda</a></li>
                    <li><a href="#pengaduan">Pengaduan</a></li>
                    <li><a href="#tera/teraulang">Tera/Tera Ulang</a></li>
                    <li><a href="<?php echo site_url('auth/register') ?>" class="tbl-biru">Sign Up</a></li>
                    <li><a href="<?php echo site_url('auth/login_user') ?>" class="tbl-biru">Login</a></li>
                    <?php if (in_groups('admin')) : ?>
                        <li><a href="<?php echo site_url('auth/login_user') ?>" class="tbl-biru">Dashboard</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <section id="home">
            <div class="kolom">
                <p class="deskripsi">PROFIL KEMENTROLOGIAN</p>
                <H2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quo non iusto eum itaque modi cum eaque, harum dolorem quae cupiditate est ducimus. Magnam numquam sit natus, repellat reiciendis nisi. </H2>
            </div>
            <div class="kolom">
                <p class="deskripsi">SEBARAN UTTP DI KOTA CIREBON </p>
                <H2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quo non iusto eum itaque modi cum eaque, harum dolorem quae cupiditate est ducimus. Magnam numquam sit natus, repellat reiciendis nisi. </H2>
            </div>
            <div class="kolom">
                <p class="deskripsi">TARIF RETRIBUSI </p>
                <H2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quo non iusto eum itaque modi cum eaque, harum dolorem quae cupiditate est ducimus. Magnam numquam sit natus, repellat reiciendis nisi. </H2>
            </div>
            <div class="kolom">
                <p class="deskripsi">TRACKING ORDER PELAYANAN </p>
                <form action="submit.php" method="POST">
                    <p> <input type="text" name="username" /></p> <button type="button" class="btn btn-primary">Cari</button>
                </form>
            </div>


        </section>
    </div>
</body>

</html>