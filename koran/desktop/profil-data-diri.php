<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/base.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/popup.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/mobile.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" media="screen" />
    <link rel="shortcut icon" href="koran-tempo.ico" type="image/x-icon">
	<title>Koran Tempo</title>
</head>
<body>
<?php include 'includes/alert.php';?>
<?php include 'includes/kumpulan-popup.php';?>
<div class="block-all" style="display:none;"></div>
	<header class="header">
    	<?php include 'includes/header-onlogin.php';?>
	</header>
<main class="cd-main-content margin-bottom-lg" style="display:flex; flex:2;">
	<div class="container small left padding-no">
        <aside class="col-left-profile">
            <div class="box-info-profile">
                <div class="box-inside noborder">
                    <div class="box-avatar s70">
                        <div class="avatar"><img src="images/profile.jpg"></div>
                        <div class="text-avatar">
                            <h3 class="title">Rudi Hamdhani</h3>
                            <h4 class="title cl-dark">rudihamdhani@gmail.com</h4>
                            <h4 class="title bold cl-dark">Tempo ID :88593224566</h4>
                        </div>
                    </div>
                </div>
                <div class="box-inside">
                    <h2 class="title margin-bottom-lg">Akun Saya</h2>
                    <h3 class="title margin-bottom-lg"><a href="profil-informasi-akun.php">Informasi Akun</a></h3>
                    <h3 class="title"><a href="profil-data-diri.php" class="selected">Data Diri</a></h3>
                </div>
                <div class="box-inside">
                    <h2 class="title margin-bottom-lg">Pengaturan</h2>
                    <h3 class="title margin-bottom-lg"><a href="profil-topik-favorit.php">Topik Favorit</a></h3>
                    <h3 class="title margin-bottom-lg"><a href="profil-berita-tersimpan.php">Berita Tersimpan</a></h3>
                </div>
                <div class="box-inside">
                    <h2 class="title"><a href="profil-reward-point.php" class="cl-black">Tempo Reward Point</a></h2>
                </div>
                <div class="box-inside">
                    <h2 class="title"><a href="profil-bantuan.php" class="cl-black">Bantuan Pelanggan</a></h2>
                </div>
            </div>
        </aside>
        <main class="col-center-right-profile">
            <div class="box-inside noborder padding-no">
                <h1 class="title margin-bottom-sm">Data Diri
                    <a href="#edit-data-diri" class="buka-popup margin-left-xs edit" data-effect="mfp-zoom-out">
                        <div class="icons">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.75 15.1877H3.375C3.22582 15.1877 3.08274 15.1284 2.97725 15.0229C2.87176 14.9174 2.8125 14.7743 2.8125 14.6252V11.4832C2.8125 11.4093 2.82705 11.3361 2.85532 11.2679C2.88359 11.1997 2.92502 11.1376 2.97725 11.0854L11.4148 2.64791C11.5202 2.54242 11.6633 2.48315 11.8125 2.48315C11.9617 2.48315 12.1048 2.54242 12.2102 2.64791L15.3523 5.78991C15.4577 5.8954 15.517 6.03848 15.517 6.18766C15.517 6.33684 15.4577 6.47992 15.3523 6.58541L6.75 15.1877Z" stroke="#AD120A" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.5625 4.5L13.5 8.4375" stroke="#AD120A" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                        </div>
                    Ubah</a>
                </h1>
            </div>
            <div class="col-center-profile">
                <div class="box-inside noborder padding-no margin-bottom-lg">
                    <h3 class="title bold margin-bottom-xs">Tanggal Lahir</h3>
                    <p>1 Januari 1992</p>
                </div>
                <div class="box-inside noborder padding-no margin-bottom-lg">
                    <h3 class="title bold margin-bottom-xs">Jenis Kelamin</h3>
                    <p>Laki-Laki</p>
                </div>
                <div class="box-inside noborder padding-no margin-bottom-lg">
                    <h3 class="title bold margin-bottom-xs">Status</h3>
                    <p>Belum Menikah</p>
                </div>
                <div class="box-inside noborder padding-no margin-bottom-lg">
                    <h3 class="title bold margin-bottom-xs">Alamat Sekarang</h3>
                    <p>Jl. Kampung Baru, Kecamatan Tapos, Depok, Jawa Barat.</p>
                </div>
            </div>
            <div class="col-right-profile">
                <div class="box-inside noborder padding-no margin-bottom-lg">
                    <h3 class="title bold margin-bottom-xs">Pendidikan Terakhir</h3>
                    <p>S1</p>
                </div>
                <div class="box-inside noborder padding-no margin-bottom-lg">
                    <h3 class="title bold margin-bottom-xs">Pekerjaan Sekarang</h3>
                    <p>Dokter</p>
                </div>
                <div class="box-inside noborder padding-no margin-bottom-lg">
                    <h3 class="title bold margin-bottom-xs">Pendapatan Bulanan</h3>
                    <p>Belum Menikah</p>
                </div>
                <div class="box-inside noborder padding-no margin-bottom-lg">
                    <h3 class="title bold margin-bottom-xs">Minat</h3>
                    <p>Belum Menikah</p>
                </div>
            </div>
        </main>
    </div>
</main>
<?php include 'includes/footer.php';?>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/fix.js"></script>
<script src="js/fixmain.js"></script>
<script src="js/jquery.multi-select.js"></script>
<script src="js/base.js"></script>
</body>
</html>