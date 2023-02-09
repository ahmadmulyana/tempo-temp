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
    <link rel="shortcut icon" href="tempo-white.ico" type="image/x-icon">
	<title>Tempo.Co</title>
</head>
<body>
<?php include 'includes/alert.php';?>
<?php include 'includes/kumpulan-popup.php';?>
<div class="block-all" style="display:none;"></div>
	<header class="header">
    	<?php include 'includes/header-onlogin.php';?>
		<?php include 'includes/main-menu.php';?>
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
                    <h3 class="title"><a href="profil-data-diri.php">Data Diri</a></h3>
                </div>
                <div class="box-inside">
                    <h2 class="title margin-bottom-lg">Pengaturan</h2>
                    <h3 class="title margin-bottom-lg"><a href="profil-topik-favorit.php" class="selected">Topik Favorit</a></h3>
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
                <h1 class="title margin-bottom-sm">Topik Favorit</h1>
            </div>
            <div class="box-inside">
            	<h2 class="title margin-bottom-sm">Belum Ada Topik</h2>
                <p class="margin-bottom-sm">Atur <strong>Topik Favorit</strong> agar kami dapat menampilkan Berita Favorit yang sesuai dengan minat Anda.</p>
                <div class="centering margin-bottom-sm">
                	<a href="#edit-topik-favorit" class="buka-popup sign-btn medium minimalis bg-black cl-white" data-effect="mfp-zoom-out">Atur Sekarang</a>
                </div>
                <p class="margin-bottom-sm">Daftar topik pilihan Anda, yang kami gunakan untuk menyajikan berita sesuai dengan minat Anda.</p>
                <div class="box-tag-detail favorit">
                	<a href="#">Politik</a>
                    <a href="#">Sepak Bola</a>
                    <a href="#">Ekonomi Bisnis</a>
                    <a href="#">Seleb</a>
                    <a href="#">Teknologi</a>
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