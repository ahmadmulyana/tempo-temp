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
<?php include 'includes/alert.php';?>
<?php include 'includes/kumpulan-popup.php';?>
<?php include 'includes/navicon-menu.php';?>
<?php include 'includes/search-popup.php';?>
<div class="download-apps">
    <div class="icon-tempo-apps"><img src="images/tempo-apps.png" alt="deskripsi gambar"></div>
    <div class="box-text-apps">
        <h4 class="title cl-black">Aplikasi Tempo</h4>
        <p>Update berita terkini, dimanapun dan kapanpun.</p>
    </div>
    <div class="margin-top-xs overflow" style="width:100%;">
    <div class="col3 padding-left-no padding-right-ss"><button class="close-tempo-apps sign-btn line" style="padding:0 10px; height:39px;">Tutup</button></div>
    <div class="col9 padding-right-no padding-left-no"><a href="terpopuler.php" class="sign-btn cl-white bg-black" style="padding:0 18px; height:39px;">Download Aplikasi Tempo Gratis</a></div>
    </div>
</div>
<div class="block-all" style="display:none;"></div>
	<header class="header wapps">
    	<div class="top-head">
        	<div class="logo"><a href="#"><img src="images/logo-kt.png" alt="Koran Tempo"></a></div>
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
			<a href="#pilih-bulan" class="buka-popup calendaricon margin-left-lg" data-effect="mfp-zoom-out">
					<svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.5 3.75H4.5C4.08579 3.75 3.75 4.08579 3.75 4.5V19.5C3.75 19.9142 4.08579 20.25 4.5 20.25H19.5C19.9142 20.25 20.25 19.9142 20.25 19.5V4.5C20.25 4.08579 19.9142 3.75 19.5 3.75Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16.5 2.25V5.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.5 2.25V5.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.75 8.25H20.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

            </a>
        </div>
	</header>
<?php include 'includes/pilih-tanggal-tahun.php';?>
<main class="cd-main-content wapps" style="display:flex; flex:1;">
	<div class="container overflow">
        <div class="container-col">
            <div class="bannerfull">
                <img src="banner/320x50.png" class="b320x50">
            </div>
        </div>
        <section class="main-full">
        	<div class="blockbox overflow margin-top-sm">
            	<h2 class="titlebox">Hari Ini</h2>
                <ul class="horizon-list">
                    <li>
                        <div class="box-hari-ini">
                            <div class="card-box cover">
                                <a href="edisi.php">
                                <figure class="img-card"><img src="foto/cover01.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-ini">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail03.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-ini">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail04.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-ini">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail05.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-ini">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail06.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-ini">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail07.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
			</div> <!-- end box hari ini -->
            <div class="blockbox overflow margin-top-sm">
            	<h2 class="titlebox">Kemarin</h2>
                <ul class="horizon-list">
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box cover">
                                <a href="edisi.php">
                                <figure class="img-card"><img src="foto/cover02.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail07.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail06.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail05.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail04.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail03.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
			</div> <!-- end box kemarin -->
            <div class="blockbox overflow margin-top-sm">
            	<h2 class="titlebox">Selasa, 13 April 2021</h2>
                <ul class="horizon-list">
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box cover">
                                <a href="edisi.php">
                                <figure class="img-card"><img src="foto/cover03.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail07.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail06.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail05.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail04.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail03.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
			</div> <!-- end box berikutnya 1 -->
            <div class="blockbox overflow margin-top-sm">
            	<h2 class="titlebox">Senin, 12 April 2021</h2>
                <ul class="horizon-list">
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box cover">
                                <a href="edisi.php">
                                <figure class="img-card"><img src="foto/cover05.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail07.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail06.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail05.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail04.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail03.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
			</div> <!-- end box berikutnya 2 -->
            <div class="blockbox overflow margin-top-sm">
            	<h2 class="titlebox">Minggu, 11 April 2021</h2>
                <ul class="horizon-list">
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box cover">
                                <a href="edisi.php">
                                <figure class="img-card"><img src="foto/cover04.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail07.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail06.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail05.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail04.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail03.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
			</div> <!-- end box berikutnya 3 -->
            <div class="blockbox overflow margin-top-sm">
            	<h2 class="titlebox">Sabtu, 10 April 2021</h2>
                <ul class="horizon-list">
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box cover">
                                <a href="edisi.php">
                                <figure class="img-card"><img src="foto/cover06.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail07.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail06.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail05.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail04.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail03.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
			</div> <!-- end box berikutnya 4 -->
            <div class="blockbox overflow margin-top-sm">
            	<h2 class="titlebox">Jumat, 9 April 2021</h2>
                <ul class="horizon-list">
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box cover">
                                <a href="edisi.php">
                                <figure class="img-card"><img src="foto/cover07.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail07.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail06.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail05.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail04.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box-hari-next">
                            <div class="card-box">
                                <a  href="rubrik.php">
                                <figure class="img-card"><img src="foto/detail03.jpg"></figure>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
			</div> <!-- end box berikutnya 5 -->
        </section>
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