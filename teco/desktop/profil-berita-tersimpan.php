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
                    <h3 class="title margin-bottom-lg"><a href="profil-topik-favorit.php">Topik Favorit</a></h3>
                    <h3 class="title margin-bottom-lg"><a href="profil-berita-tersimpan.php" class="selected">Berita Tersimpan</a></h3>
                </div>
                <div class="box-inside">
                    <h2 class="title"><a href="profil-reward-point.php" class="cl-black">Tempo Reward Point</a></h2>
                </div>
                <div class="box-inside">
                    <h2 class="title"><a href="profil-bantuan.php" class="cl-black">Bantuan Pelanggan</a></h2>
                </div>
            </div>
        </aside>
        <main id="inline-popups" class="col-center-right-profile">
            <div class="box-inside noborder padding-no">
                <h1 class="title margin-bottom-sm">Berita Tersimpan</h1>
            </div>
        <div class="margin-bottom-sm">
            <div class="element-box">
                <select name="cars" id="pekerjaan" class="element-select medium minimalis noicons fw400">
                    <option value="satu" selected>Semua Outlet</option>
                    <option value="dua">Tempo.co</option>
                    <option value="tiga">Koran Tempo</option>
                    <option value="empat">Majalah Tempo</option>
                </select>
            </div>
        </div>
        <div class="blockbox overflow margin-bottom-lg">
            <h2 class="titlebox">Tempo.co</h2>
                <div class="card-box ft240 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto01.jpg"></a></figure>
                    <article class="text-card">
                        <h2 class="title"><a href="detail-news.php">UEFA Ubah Aturan Anggaran Gaji Pasca Lionel Messi Hengkang, Barcelona Gigit Jari</a></h2>
                        <h4 class="date">5 Menit Lalu</h4>
                        <div class="box-bottom-icons margin-top-sm">
                            <a href="#hapus-berita" data-effect="mfp-zoom-out" class="buka-popup bottom-link">
                            <div class="icon-bot"><svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.25 5.25L3.75 5.25001" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M9.75 9.75V15.75"  stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M14.25 9.75V15.75" troke-linecap="round" stroke-linejoin="round"/>
        <path d="M18.75 5.25V19.5C18.75 19.6989 18.671 19.8897 18.5303 20.0303C18.3897 20.171 18.1989 20.25 18 20.25H6C5.80109 20.25 5.61032 20.171 5.46967 20.0303C5.32902 19.8897 5.25 19.6989 5.25 19.5V5.25" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M15.75 5.25V3.75C15.75 3.35218 15.592 2.97064 15.3107 2.68934C15.0294 2.40804 14.6478 2.25 14.25 2.25H9.75C9.35218 2.25 8.97064 2.40804 8.68934 2.68934C8.40804 2.97064 8.25 3.35218 8.25 3.75V5.25" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
                            </div>
                            <p class="bot">Hapus</p>
                            </a>
                            <a href="#" class="bottom-link margin-left-sm">
                            <div class="icon-bot"><svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6 15C7.65685 15 9 13.6569 9 12C9 10.3431 7.65685 9 6 9C4.34315 9 3 10.3431 3 12C3 13.6569 4.34315 15 6 15Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5 21.75C18.1569 21.75 19.5 20.4069 19.5 18.75C19.5 17.0931 18.1569 15.75 16.5 15.75C14.8431 15.75 13.5 17.0931 13.5 18.75C13.5 20.4069 14.8431 21.75 16.5 21.75Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5 8.25C18.1569 8.25 19.5 6.90685 19.5 5.25C19.5 3.59315 18.1569 2.25 16.5 2.25C14.8431 2.25 13.5 3.59315 13.5 5.25C13.5 6.90685 14.8431 8.25 16.5 8.25Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M13.977 6.87219L8.52344 10.378" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M8.52344 13.6219L13.977 17.1278" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
                            </div>
                                <p class="bot">Bagikan</p>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="card-box ft240 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto02.jpg"></a></figure>
                    <article class="text-card">
                        <h2 class="title"><a href="detail-news.php">Cina Sediakan Vaksin COVID-19 untuk Warganya di Luar Negeri dan Atlit Olimpiade</a></h2>
                        <h4 class="date">5 Menit Lalu</h4>
                        <div class="box-bottom-icons margin-top-sm">
                            <a href="#hapus-berita" data-effect="mfp-zoom-out" class="buka-popup bottom-link">
                            <div class="icon-bot"><svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.25 5.25L3.75 5.25001" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M9.75 9.75V15.75"  stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M14.25 9.75V15.75" troke-linecap="round" stroke-linejoin="round"/>
        <path d="M18.75 5.25V19.5C18.75 19.6989 18.671 19.8897 18.5303 20.0303C18.3897 20.171 18.1989 20.25 18 20.25H6C5.80109 20.25 5.61032 20.171 5.46967 20.0303C5.32902 19.8897 5.25 19.6989 5.25 19.5V5.25" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M15.75 5.25V3.75C15.75 3.35218 15.592 2.97064 15.3107 2.68934C15.0294 2.40804 14.6478 2.25 14.25 2.25H9.75C9.35218 2.25 8.97064 2.40804 8.68934 2.68934C8.40804 2.97064 8.25 3.35218 8.25 3.75V5.25" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
                            </div>
                            <p class="bot">Hapus</p>
                            </a>
                            <a href="#" class="bottom-link margin-left-sm">
                            <div class="icon-bot"><svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6 15C7.65685 15 9 13.6569 9 12C9 10.3431 7.65685 9 6 9C4.34315 9 3 10.3431 3 12C3 13.6569 4.34315 15 6 15Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5 21.75C18.1569 21.75 19.5 20.4069 19.5 18.75C19.5 17.0931 18.1569 15.75 16.5 15.75C14.8431 15.75 13.5 17.0931 13.5 18.75C13.5 20.4069 14.8431 21.75 16.5 21.75Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5 8.25C18.1569 8.25 19.5 6.90685 19.5 5.25C19.5 3.59315 18.1569 2.25 16.5 2.25C14.8431 2.25 13.5 3.59315 13.5 5.25C13.5 6.90685 14.8431 8.25 16.5 8.25Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M13.977 6.87219L8.52344 10.378" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M8.52344 13.6219L13.977 17.1278" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
                            </div>
                                <p class="bot">Bagikan</p>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="card-box ft240 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto03.jpg"></a></figure>
                    <article class="text-card">
                        <h2 class="title"><a href="detail-news.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h2>
                        <h4 class="date">5 Menit Lalu</h4>
                        <div class="box-bottom-icons margin-top-sm">
                            <a href="#hapus-berita" data-effect="mfp-zoom-out" class="buka-popup bottom-link">
                            <div class="icon-bot"><svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.25 5.25L3.75 5.25001" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M9.75 9.75V15.75"  stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M14.25 9.75V15.75" troke-linecap="round" stroke-linejoin="round"/>
        <path d="M18.75 5.25V19.5C18.75 19.6989 18.671 19.8897 18.5303 20.0303C18.3897 20.171 18.1989 20.25 18 20.25H6C5.80109 20.25 5.61032 20.171 5.46967 20.0303C5.32902 19.8897 5.25 19.6989 5.25 19.5V5.25" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M15.75 5.25V3.75C15.75 3.35218 15.592 2.97064 15.3107 2.68934C15.0294 2.40804 14.6478 2.25 14.25 2.25H9.75C9.35218 2.25 8.97064 2.40804 8.68934 2.68934C8.40804 2.97064 8.25 3.35218 8.25 3.75V5.25" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
                            </div>
                            <p class="bot">Hapus</p>
                            </a>
                            <a href="#" class="bottom-link margin-left-sm">
                            <div class="icon-bot"><svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6 15C7.65685 15 9 13.6569 9 12C9 10.3431 7.65685 9 6 9C4.34315 9 3 10.3431 3 12C3 13.6569 4.34315 15 6 15Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5 21.75C18.1569 21.75 19.5 20.4069 19.5 18.75C19.5 17.0931 18.1569 15.75 16.5 15.75C14.8431 15.75 13.5 17.0931 13.5 18.75C13.5 20.4069 14.8431 21.75 16.5 21.75Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5 8.25C18.1569 8.25 19.5 6.90685 19.5 5.25C19.5 3.59315 18.1569 2.25 16.5 2.25C14.8431 2.25 13.5 3.59315 13.5 5.25C13.5 6.90685 14.8431 8.25 16.5 8.25Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M13.977 6.87219L8.52344 10.378" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M8.52344 13.6219L13.977 17.1278" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
                            </div>
                                <p class="bot">Bagikan</p>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
            <div class="blockbox overflow margin-bottom-lg">
            <h2 class="titlebox">Koran Tempo</h2>
                <div class="card-box ft240 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto04.jpg"></a></figure>
                    <article class="text-card">
                        <h2 class="title"><a href="detail-news.php">UEFA Ubah Aturan Anggaran Gaji Pasca Lionel Messi Hengkang, Barcelona Gigit Jari</a></h2>
                        <h4 class="date">5 Menit Lalu</h4>
                        <div class="box-bottom-icons margin-top-sm">
                            <a href="#hapus-berita" data-effect="mfp-zoom-out" class="buka-popup bottom-link">
                            <div class="icon-bot"><svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.25 5.25L3.75 5.25001" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M9.75 9.75V15.75"  stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M14.25 9.75V15.75" troke-linecap="round" stroke-linejoin="round"/>
        <path d="M18.75 5.25V19.5C18.75 19.6989 18.671 19.8897 18.5303 20.0303C18.3897 20.171 18.1989 20.25 18 20.25H6C5.80109 20.25 5.61032 20.171 5.46967 20.0303C5.32902 19.8897 5.25 19.6989 5.25 19.5V5.25" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M15.75 5.25V3.75C15.75 3.35218 15.592 2.97064 15.3107 2.68934C15.0294 2.40804 14.6478 2.25 14.25 2.25H9.75C9.35218 2.25 8.97064 2.40804 8.68934 2.68934C8.40804 2.97064 8.25 3.35218 8.25 3.75V5.25" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
                            </div>
                            <p class="bot">Hapus</p>
                            </a>
                            <a href="#" class="bottom-link margin-left-sm">
                            <div class="icon-bot"><svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6 15C7.65685 15 9 13.6569 9 12C9 10.3431 7.65685 9 6 9C4.34315 9 3 10.3431 3 12C3 13.6569 4.34315 15 6 15Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5 21.75C18.1569 21.75 19.5 20.4069 19.5 18.75C19.5 17.0931 18.1569 15.75 16.5 15.75C14.8431 15.75 13.5 17.0931 13.5 18.75C13.5 20.4069 14.8431 21.75 16.5 21.75Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5 8.25C18.1569 8.25 19.5 6.90685 19.5 5.25C19.5 3.59315 18.1569 2.25 16.5 2.25C14.8431 2.25 13.5 3.59315 13.5 5.25C13.5 6.90685 14.8431 8.25 16.5 8.25Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M13.977 6.87219L8.52344 10.378" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M8.52344 13.6219L13.977 17.1278" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
                            </div>
                                <p class="bot">Bagikan</p>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="card-box ft240 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto05.jpg"></a></figure>
                    <article class="text-card">
                        <h2 class="title"><a href="detail-news.php">Cina Sediakan Vaksin COVID-19 untuk Warganya di Luar Negeri dan Atlit Olimpiade</a></h2>
                        <h4 class="date">5 Menit Lalu</h4>
                        <div class="box-bottom-icons margin-top-sm">
                            <a href="#hapus-berita" data-effect="mfp-zoom-out" class="buka-popup bottom-link">
                            <div class="icon-bot"><svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.25 5.25L3.75 5.25001" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M9.75 9.75V15.75"  stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M14.25 9.75V15.75" troke-linecap="round" stroke-linejoin="round"/>
        <path d="M18.75 5.25V19.5C18.75 19.6989 18.671 19.8897 18.5303 20.0303C18.3897 20.171 18.1989 20.25 18 20.25H6C5.80109 20.25 5.61032 20.171 5.46967 20.0303C5.32902 19.8897 5.25 19.6989 5.25 19.5V5.25" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M15.75 5.25V3.75C15.75 3.35218 15.592 2.97064 15.3107 2.68934C15.0294 2.40804 14.6478 2.25 14.25 2.25H9.75C9.35218 2.25 8.97064 2.40804 8.68934 2.68934C8.40804 2.97064 8.25 3.35218 8.25 3.75V5.25" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
                            </div>
                            <p class="bot">Hapus</p>
                            </a>
                            <a href="#" class="bottom-link margin-left-sm">
                            <div class="icon-bot"><svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6 15C7.65685 15 9 13.6569 9 12C9 10.3431 7.65685 9 6 9C4.34315 9 3 10.3431 3 12C3 13.6569 4.34315 15 6 15Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5 21.75C18.1569 21.75 19.5 20.4069 19.5 18.75C19.5 17.0931 18.1569 15.75 16.5 15.75C14.8431 15.75 13.5 17.0931 13.5 18.75C13.5 20.4069 14.8431 21.75 16.5 21.75Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5 8.25C18.1569 8.25 19.5 6.90685 19.5 5.25C19.5 3.59315 18.1569 2.25 16.5 2.25C14.8431 2.25 13.5 3.59315 13.5 5.25C13.5 6.90685 14.8431 8.25 16.5 8.25Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M13.977 6.87219L8.52344 10.378" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M8.52344 13.6219L13.977 17.1278" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
                            </div>
                                <p class="bot">Bagikan</p>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="card-box ft240 margin-bottom-sm">
                    <figure class="img-card"><a href="detail-news.php"><img src="foto/foto06.jpg"></a></figure>
                    <article class="text-card">
                        <h2 class="title"><a href="detail-news.php">Mile 72 hingga Mile 73 Sempat Ditutup karena Banjir, Freeport: Tak Ada Kerusakan</a></h2>
                        <h4 class="date">5 Menit Lalu</h4>
                        <div class="box-bottom-icons margin-top-sm">
                            <a href="#hapus-berita" data-effect="mfp-zoom-out" class="buka-popup bottom-link">
                            <div class="icon-bot"><svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.25 5.25L3.75 5.25001" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M9.75 9.75V15.75"  stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M14.25 9.75V15.75" troke-linecap="round" stroke-linejoin="round"/>
        <path d="M18.75 5.25V19.5C18.75 19.6989 18.671 19.8897 18.5303 20.0303C18.3897 20.171 18.1989 20.25 18 20.25H6C5.80109 20.25 5.61032 20.171 5.46967 20.0303C5.32902 19.8897 5.25 19.6989 5.25 19.5V5.25" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M15.75 5.25V3.75C15.75 3.35218 15.592 2.97064 15.3107 2.68934C15.0294 2.40804 14.6478 2.25 14.25 2.25H9.75C9.35218 2.25 8.97064 2.40804 8.68934 2.68934C8.40804 2.97064 8.25 3.35218 8.25 3.75V5.25" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
                            </div>
                            <p class="bot">Hapus</p>
                            </a>
                            <a href="#" class="bottom-link margin-left-sm">
                            <div class="icon-bot"><svg class="svg-light" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6 15C7.65685 15 9 13.6569 9 12C9 10.3431 7.65685 9 6 9C4.34315 9 3 10.3431 3 12C3 13.6569 4.34315 15 6 15Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5 21.75C18.1569 21.75 19.5 20.4069 19.5 18.75C19.5 17.0931 18.1569 15.75 16.5 15.75C14.8431 15.75 13.5 17.0931 13.5 18.75C13.5 20.4069 14.8431 21.75 16.5 21.75Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M16.5 8.25C18.1569 8.25 19.5 6.90685 19.5 5.25C19.5 3.59315 18.1569 2.25 16.5 2.25C14.8431 2.25 13.5 3.59315 13.5 5.25C13.5 6.90685 14.8431 8.25 16.5 8.25Z" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M13.977 6.87219L8.52344 10.378" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M8.52344 13.6219L13.977 17.1278" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
                            </div>
                                <p class="bot">Bagikan</p>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
            <div class="blockbox overflow margin-bottom-lg">
            <h2 class="titlebox">Majalah Tempo</h2>
            <div class="card-box"><div class="text-card"><p class="fo14 margin-top-no">Belum ada berita tersimpan</p></div></div>
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