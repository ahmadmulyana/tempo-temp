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
    <link rel="shortcut icon" href="tempo-white.ico" type="image/x-icon">
	<title>Tempo.Co</title>
</head>
<body>
<?php include 'includes/alert.php';?>
<?php include 'includes/kumpulan-popup.php';?>
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
                    <li><a href="terpopuler.php">Terpopuler</a></li>
                    <li><a href="favorit.php" class="selected">Berita Favorit</a></li>
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
<main class="cd-main-content">
	<div class="container overflow">
        <div class="container-col">
            <div class="bannerfull">
                <img src="banner/320x50.png" class="b320x50">
            </div>
        </div>
        <main class="main-full">
        	<div class="blockbox">
				<div class="card-box">
                	<div class="text-card">
                    	<h2 class="title t-center">Belum Ada Berita</h2>
                        <p style="font-size:14px; line-height:24px;" class="cl-gray margin-top-no margin-bottom-sm t-center">Atur <strong class="cl-black">Topik Favorit</strong> agar kami dapat menampilkan Berita Favorit yang sesuai dengan minat Anda.</p>
                        <div id="inline-popups" class="centering margin-bottom-sm">
                        <a href="edit-topik-favorit.php" class="sign-btn medium minimalis bg-black cl-white" data-effect="mfp-zoom-out">Atur Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow margin-bottom-xs">
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto01.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">UEFA Ubah Aturan Anggaran Gaji Pasca Lionel Messi Hengkang, Barcelona Gigit Jari</a></h3>
                        <h4 class="date"><span class="kanal">Nasional</span>5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto02.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">Cina Sediakan Vaksin COVID-19 untuk Warganya di Luar Negeri dan Atlit Olimpiade</a></h3>
                        <h4 class="date"><span class="kanal">Metro</span>5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto03.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                        <h4 class="date"><span class="kanal">Nasional</span>5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto04.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">UEFA Ubah Aturan Anggaran Gaji Pasca Lionel Messi Hengkang, Barcelona Gigit Jari</a></h3>
                        <h4 class="date"><span class="kanal">Bisnis</span>5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto05.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">Cina Sediakan Vaksin COVID-19 untuk Warganya di Luar Negeri dan Atlit Olimpiade</a></h3>
                        <h4 class="date"><span class="kanal">Dunia</span>5 Menit Lalu</h4>
                    </article>
                </div>
            </div>
        	<div class="blockbox overflow margin-bottom-no">
            	<h2 class="titlebox">Video</h2>
                <ul class="row-list row2 list-tiga-kolom margin-bottom-xs">
                	<li>
                    	<div class="card-box">
							<figure class="img-card margin-bottom-no"><a href="detail-video.php"><div class="bottom-label-right">03:12</div><img src="foto/foto01.jpg" alt="deskripsi gambar"></a></figure>
                            <article class="text-card">
                                <h3 class="title line3"><a href="detail-video.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                                <h4 class="date"><span class="kanal">Nasional</span>5 Menit Lalu</h4>
                            </article>
                        </div>
                    </li>
                	<li>
                    	<div class="card-box">
							<figure class="img-card margin-bottom-no"><a href="detail-video.php"><div class="bottom-label-right">03:12</div><img src="foto/foto02.jpg" alt="deskripsi gambar"></a></figure>
                            <article class="text-card">
                                <h3 class="title line3"><a href="detail-video.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                                <h4 class="date"><span class="kanal">Bisnis</span>5 Menit Lalu</h4>
                            </article>
                        </div>
                    </li>
                	<li>
                    	<div class="card-box">
							<figure class="img-card margin-bottom-no"><a href="detail-video.php"><div class="bottom-label-right">03:12</div><img src="foto/foto03.jpg" alt="deskripsi gambar"></a></figure>
                            <article class="text-card">
                                <h3 class="title line3"><a href="detail-video.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                                <h4 class="date"><span class="kanal">Metro</span>5 Menit Lalu</h4>
                            </article>
                        </div>
                    </li>
                	<li>
                    	<div class="card-box">
							<figure class="img-card margin-bottom-no"><a href="detail-video.php"><div class="bottom-label-right">03:12</div><img src="foto/foto04.jpg" alt="deskripsi gambar"></a></figure>
                            <article class="text-card">
                                <h3 class="title line3"><a href="detail-video.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                                <h4 class="date"><span class="kanal">Nasional</span>5 Menit Lalu</h4>
                            </article>
                        </div>
                    </li>
                	<li>
                    	<div class="card-box">
							<figure class="img-card margin-bottom-no"><a href="detail-video.php"><div class="bottom-label-right">03:12</div><img src="foto/foto05.jpg"></a></figure>
                            <article class="text-card">
                                <h3 class="title line3"><a href="detail-video.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                                <h4 class="date"><span class="kanal">Metro</span>5 Menit Lalu</h4>
                            </article>
                        </div>
                    </li>
                	<li>
                    	<div class="card-box">
							<figure class="img-card margin-bottom-no"><a href="detail-video.php"><div class="bottom-label-right">03:12</div><img src="foto/foto06.jpg" alt="deskripsi gambar"></a></figure>
                            <article class="text-card">
                                <h3 class="title line3"><a href="detail-video.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                                <h4 class="date"><span class="kanal">Metro</span>5 Menit Lalu</h4>
                            </article>
                        </div>
                    </li>
                </ul>
			</div> <!-- end box video -->
            <div class="overflow margin-bottom-xs">
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto01.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">UEFA Ubah Aturan Anggaran Gaji Pasca Lionel Messi Hengkang, Barcelona Gigit Jari</a></h3>
                        <h4 class="date"><span class="kanal">Nasional</span>5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto02.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">Cina Sediakan Vaksin COVID-19 untuk Warganya di Luar Negeri dan Atlit Olimpiade</a></h3>
                        <h4 class="date"><span class="kanal">Metro</span>5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto03.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                        <h4 class="date"><span class="kanal">Nasional</span>5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto04.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">UEFA Ubah Aturan Anggaran Gaji Pasca Lionel Messi Hengkang, Barcelona Gigit Jari</a></h3>
                        <h4 class="date"><span class="kanal">Bisnis</span>5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto05.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">Cina Sediakan Vaksin COVID-19 untuk Warganya di Luar Negeri dan Atlit Olimpiade</a></h3>
                        <h4 class="date"><span class="kanal">Dunia</span>5 Menit Lalu</h4>
                    </article>
                </div>
            </div>
        	<div class="blockbox overflow margin-bottom-no">
            	<h2 class="titlebox">Foto</h2>
                <ul class="row-list row2 list-tiga-kolom margin-bottom-xs">
                	<li>
                    	<div class="card-box">
							<figure class="img-card margin-bottom-no"><a href="detail-foto.php"><img src="foto/foto01.jpg" alt="deskripsi gambar"></a></figure>
                            <article class="text-card">
                                <h3 class="title line3"><a href="detail-foto.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                                <h4 class="date"><span class="kanal">Nasional</span>5 Menit Lalu</h4>
                            </article>
                        </div>
                    </li>
                	<li>
                    	<div class="card-box">
							<figure class="img-card margin-bottom-no"><a href="detail-foto.php"><img src="foto/foto02.jpg" alt="deskripsi gambar"></a></figure>
                            <article class="text-card">
                                <h3 class="title line3"><a href="detail-foto.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                                <h4 class="date"><span class="kanal">Bisnis</span>5 Menit Lalu</h4>
                            </article>
                        </div>
                    </li>
                	<li>
                    	<div class="card-box">
							<figure class="img-card margin-bottom-no"><a href="detail-foto.php"><img src="foto/foto03.jpg" alt="deskripsi gambar"></a></figure>
                            <article class="text-card">
                                <h3 class="title line3"><a href="detail-foto.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                                <h4 class="date"><span class="kanal">Metro</span>5 Menit Lalu</h4>
                            </article>
                        </div>
                    </li>
                	<li>
                    	<div class="card-box">
							<figure class="img-card margin-bottom-no"><a href="detail-foto.php"><img src="foto/foto04.jpg" alt="deskripsi gambar"></a></figure>
                            <article class="text-card">
                                <h3 class="title line3"><a href="detail-foto.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                                <h4 class="date"><span class="kanal">Nasional</span>5 Menit Lalu</h4>
                            </article>
                        </div>
                    </li>
                	<li>
                    	<div class="card-box">
							<figure class="img-card margin-bottom-no"><a href="detail-foto.php"><img src="foto/foto05.jpg"></a></figure>
                            <article class="text-card">
                                <h3 class="title line3"><a href="detail-foto.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                                <h4 class="date"><span class="kanal">Metro</span>5 Menit Lalu</h4>
                            </article>
                        </div>
                    </li>
                	<li>
                    	<div class="card-box">
							<figure class="img-card margin-bottom-no"><a href="detail-foto.php"><img src="foto/foto06.jpg" alt="deskripsi gambar"></a></figure>
                            <article class="text-card">
                                <h3 class="title line3"><a href="detail-foto.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                                <h4 class="date"><span class="kanal">Metro</span>5 Menit Lalu</h4>
                            </article>
                        </div>
                    </li>
                </ul>
			</div> <!-- end box foto -->
            <div class="overflow margin-bottom-xs">
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto01.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">UEFA Ubah Aturan Anggaran Gaji Pasca Lionel Messi Hengkang, Barcelona Gigit Jari</a></h3>
                        <h4 class="date"><span class="kanal">Nasional</span>5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto02.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">Cina Sediakan Vaksin COVID-19 untuk Warganya di Luar Negeri dan Atlit Olimpiade</a></h3>
                        <h4 class="date"><span class="kanal">Metro</span>5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto03.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h3>
                        <h4 class="date"><span class="kanal">Nasional</span>5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto04.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">UEFA Ubah Aturan Anggaran Gaji Pasca Lionel Messi Hengkang, Barcelona Gigit Jari</a></h3>
                        <h4 class="date"><span class="kanal">Bisnis</span>5 Menit Lalu</h4>
                    </article>
                </div>
                <div class="card-box sq102 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto05.jpg" alt="deskripsi gambar"></a></figure>
                    <article class="text-card">
                        <h3 class="title line3"><a href="detail-news.php">Cina Sediakan Vaksin COVID-19 untuk Warganya di Luar Negeri dan Atlit Olimpiade</a></h3>
                        <h4 class="date"><span class="kanal">Dunia</span>5 Menit Lalu</h4>
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
<div id="edit-topik-favorit" class="white-popup-block mfp-with-anim mfp-hide" style="min-height:300px;">
    <div class="padding-top-lg padding-bottom-lg padding-left-lg padding-right-lg">
    	<h2 class="title margin-bottom-sm">Topik Favorit</h2>
        <div class="container-col">
            <div class="col12">
                <div id="menu-favorit" class="element-box margin-bottom-sm">
                    <select id="favorit" name="categories" multiple class="element-select">
                        <option value="a">Politik</option>
                        <option value="b">Ekonomi Bisnis</option>
                        <option value="c">Metro</option>
                        <option value="d">Sepak Bola</option>
                        <option value="e">Kesehatan</option>
                        <option value="f">Seleb</option>
                        <option value="g">Teknologi</option>
                        <option value="h">Otmotif</option>
                        <option value="i">Berita Dunia</option>
                        <option value="j">Berita Daerah</option>
                    </select>
                </div>
            	<button class="sign-btn bg-black cl-white" style="margin-top:200px;font-size:14px; font-weight:600;">Update</button>
            </div>
        </div>  
    </div>
</div>
</body>
</html>