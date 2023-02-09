<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
	<link rel="stylesheet" href="css/base.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/popup.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" media="screen" />
    <link rel="shortcut icon" href="koran-tempo.ico" type="image/x-icon">
	<title>Koran Tempo</title>
</head>
<body>
<?php include 'includes/navicon-menu.php';?>
<?php include 'includes/search-popup.php';?>
<div class="block-all" style="display:none;"></div>
	<header class="header">
    	<div class="top-head">
        	<div class="logo"><a href="#"><img src="images/logo-tempoco.png" alt="tempo.co"></a></div>
            <button class="navicon"><svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.75 12H20.25" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.75 6H20.25" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.75 18H20.25"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
			</button>
			<button class="searchicon">
					<svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.875 18.75C15.2242 18.75 18.75 15.2242 18.75 10.875C18.75 6.52576 15.2242 3 10.875 3C6.52576 3 3 6.52576 3 10.875C3 15.2242 6.52576 18.75 10.875 18.75Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.4434 16.4434L20.9997 20.9997" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
            </button>
        </div>
        <div class="bottom-head">
        	<nav class="menu">
            	<ul>
                	<li><a href="index.php">Terbaru</a></li>
                    <li><a href="terpopuler.php" class="selected">Terpopuler</a></li>
                    <li><a href="favorit.php">Berita Favorit</a></li>
                    <li><a href="kanal.php">Nasional</a></li>
                    <li><a href="kanal.php">Multimedia</a></li>
                    <li><a href="kanal.php">Olahraga</a></li>
                    <li><a href="kanal.php">Nusantara</a></li>
                    <li><a href="kanal.php">Otomotif</a></li>
                    <li><a href="kanal.php">Gaya Hidup</a></li>
                    <li><a href="kanal.php">Teknologi</a></li>
                    <li><a href="https://cantika.com" target="_blank">Cantik</a></li>
                    <li><a href="kanal.php">Cek Fakta</a></li>
                    <li><a href="kanal.php">Inforial</a></li>
                    <li><a href="kanal.php">Difabel</a></li>
                    <li><a href="kanal.php">Grafis</a></li>
                    <li><a href="kanal.php">Data</a></li>
                    <li><a href="kanal.php">Creative Lab</a></li>
                    <li><a href="kanal.php">Event</a></li>
                    <li><a href="kanal.php">Kolom</a></li>
                    <li><a href="kanal.php">Fokus</a></li>
                    <li><a href="kanal.php">Newsletter</a></li>
                    <li><a href="indeks.php">Indeks</a></li>
                </ul>
            </nav>
        </div>
	</header>
<main class="cd-main-content" style="display:flex; flex:1;">
	<div class="container overflow">
        <div class="container-col">
            <div class="bannerfull">
                <img src="banner/320x50.png" class="b320x50">
            </div>
        </div>
        <main class="main-full">
            <div class="container-col margin-bottom-sm overflow">
                <div class="col6 padding-right-xs">
				<div class="element-box">
                <select name="jam" id="waktu" class="element-select medium noicons radius2 margin-right-xs">
                    <option value="enam">6 jam terakhir</option>
                    <option value="duabelas">12 jam terakhir</option>
                    <option value="sehari">1 hari terakhir</option>
                    <option value="seminggu">seminggu terakhir</option>
                    <option value="sebulan">sebulan terakhir</option>
                    <option value="setahun">setahun terakhir</option>
                </select>
                </div>
                </div>
                <div class="col6 padding-left-xs">
                	<div class="element-box">
                        <select name="kanal" id="kanal" class="element-select medium noicons radius2">
                            <option value="semua">Semua Berita</option>
                            <option value="Nasional">Nasional</option>
                            <option value="Metro">Metro</option>
                            <option value="Bisnis">Bisnis</option>
                            <option value="Dunia">Dunia</option>
                            <option value="Video">Video</option>
                            <option value="Foto">Foto</option>
                            <option value="Podcast">Podcast</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="overflow margin-bottom-sm">
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto01.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">UEFA Ubah Aturan Anggaran Gaji Pasca Lionel Messi Hengkang, Barcelona Gigit Jari</a></h3>
                        <h4 class="date">5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto02.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">Cina Sediakan Vaksin COVID-19 untuk Warganya di Luar Negeri dan Atlit Olimpiade</a></h3>
                        <h4 class="date">5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto03.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                        <h4 class="date">5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto04.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">UEFA Ubah Aturan Anggaran Gaji Pasca Lionel Messi Hengkang, Barcelona Gigit Jari</a></h3>
                        <h4 class="date">5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto05.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">Cina Sediakan Vaksin COVID-19 untuk Warganya di Luar Negeri dan Atlit Olimpiade</a></h3>
                        <h4 class="date">5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto06.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">UEFA Ubah Aturan Anggaran Gaji Pasca Lionel Messi Hengkang, Barcelona Gigit Jari</a></h3>
                        <h4 class="date">5 Menit Lalu</h4>
                    </article>
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