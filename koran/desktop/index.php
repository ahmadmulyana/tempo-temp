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
    	<?php include 'includes/header-default.php';?>
	</header>
<main class="cd-main-content" style="display:flex; flex:2;">
	<div class="container small left padding-no">
    <!--
    	<div class="download-apps">
        	<div class="close-tempo-apps"><svg width="24" height="24" class="svg-light" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.75 5.25L5.25 18.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.75 18.75L5.25 5.25" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
        	<div class="icon-tempo-apps"><img src="images/tempo-apps.png" alt="deskripsi gambar"></div>
            <div class="box-text-apps">
            	<h4 class="title cl-black">Aplikasi Tempo</h4>
                <p>Update berita terkini, dimanapun dan kapanpun.</p>
            </div>
            <a href="terpopuler.php" class="sign-btn minimalis cl-white bg-black right" style="height:39px;">Download Aplikasi Tempo Gratis</a>
        </div>
        -->
    	<div class="banner970x120 clear margin-bottom-lg"><a href="#"><img src="banner/banner970x120.png"></a></div>
        <section class="main-full">
        	<div class="blockbox">
            	<h4 class="title margin-bottom-sm">Cari Edisi Lain</h4>
                <div>
                    <div class="element-box">
                    <select name="cars" id="waktu" class="element-select medium noicons minimalis radius2 margin-right-xs">
                        <option value="enam">Pilih Tahun</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                    </select>
                    <select name="cars" id="kanal" class="element-select medium noicons minimalis radius2">
                        <option value="semua">Pilih Bulan</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                    </div>
                </div>
            </div>
        	<div class="blockbox mbxl">
            	<h2 class="titlebox">Hari Ini</h2>
                <div id="slider-hari-ini" class="slider slider-pilihan">
                	<div class="boxslider">
                        <div class="card-box cover">
                            <figure class="img-card">
                            	<a href="edisi.php"><img src="foto/cover01.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div> <!-- end box Hari Ini -->
            <div class="blockbox mbxl">
            	<h2 class="titlebox">Kemarin</h2>
                <div id="slider-kemarin" class="slider slider-pilihan">
                	<div class="boxslider">
                        <div class="card-box cover">
                            <figure class="img-card">
                            	<a href="edisi.php"><img src="foto/cover02.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div> <!-- end box Kemarin -->
            <div class="blockbox mbxl">
            	<h2 class="titlebox">Selasa, 13 April 2021</h2>
                <div id="slider-berikutnya01" class="slider slider-pilihan">
                	<div class="boxslider">
                        <div class="card-box cover">
                            <figure class="img-card">
                            	<a href="edisi.php"><img src="foto/cover03.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div> <!-- end box berikutnya 01 -->
            <div class="blockbox mbxl">
            	<h2 class="titlebox">Senin, 12 April 2021</h2>
                <div id="slider-berikutnya02" class="slider slider-pilihan">
                	<div class="boxslider">
                        <div class="card-box cover">
                            <figure class="img-card">
                            	<a href="edisi.php"><img src="foto/cover05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div> <!-- end box Berikutnya 02 -->
            <div class="blockbox mbxl">
            	<h2 class="titlebox">Minggu, 11 April 2021</h2>
                <div id="slider-berikutnya03" class="slider slider-pilihan">
                	<div class="boxslider">
                        <div class="card-box cover">
                            <figure class="img-card">
                            	<a href="edisi.php"><img src="foto/cover04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div> <!-- end box Berikutnya 03 -->
            <div class="blockbox mbxl">
            	<h2 class="titlebox">Sabtu, 10 April 2021</h2>
                <div id="slider-berikutnya04" class="slider slider-pilihan">
                	<div class="boxslider">
                        <div class="card-box cover">
                            <figure class="img-card">
                            	<a href="edisi.php"><img src="foto/cover06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div> <!-- end box berikutnya 04 -->
            <div class="blockbox mbxl">
            	<h2 class="titlebox">Jumat, 9 April 2021</h2>
                <div id="slider-berikutnya05" class="slider slider-pilihan">
                	<div class="boxslider">
                        <div class="card-box cover">
                            <figure class="img-card">
                            	<a href="edisi.php"><img src="foto/cover07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail04.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail05.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail06.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="boxslider">
                        <div class="card-box">
                            <figure class="img-card">
                            	<a href="detail.php"><img src="foto/detail07.jpg" alt="deskripsi gambar"></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div> <!-- end box Berikutnya 05 -->
        </section>
    </div>
</main>
<?php include 'includes/footer.php' ?>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/fix.js"></script>
<script src="js/fixmain.js"></script>
<script src="js/jquery.multi-select.js"></script>
<script src="js/base.js"></script>
<script>
$(document).ready(function() {
	$('.bukatutup').click(function () {
		//$('.bigbox').toggleClass('bukaopen');
        $('.outfixed').toggleClass('open');
		$(this).find('i').toggleClass('arrowdw arrowup');
		});
});
</script>
<div  class="outfixed open">
      <div class="container-ribbon">
		<p>
        Jurnalisme berkualitas memerlukan dukungan khalayak ramai. Dengan berlangganan Tempo, Anda berkontribusi pada upaya produksi informasi yang akurat, mendalam dan tepercaya. Sejak awal, Tempo berkomitmen pada jurnalisme yang independen dan mengabdi pada kepentingan orang banyak. Demi publik, untuk Republik.
        </p>
        </div>
</div>
  	<div class="rb-login">
		<div class="rb-login-in">
                    <a href="https://majalah.tempo.co/web-login" id="urlLangganan" class="rb-btn">Login</a>
                    <a href="https://langganan.tempo.co/home/formstep2/3/" id="urlLanggananStep2" data-price="50000" data-periode="1 Bulan" data-nama="Gold" target="_blank" class="rb-btn">Langganan</a>
<button class="bukatutup">
	<i class="arrowdw"></i>
</button>
			</div>
	</div>
</body>
</html>