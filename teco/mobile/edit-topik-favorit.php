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
	<header class="header alt">
		<div class="top-head"><h1 class="title">Topik Favorit</h1></div>
	</header>
<main class="cd-main-content nomenu fxbot">
	<div class="container overflow padding-top-sm">
		<div class="box-inside noborder padding-no">
            <p class="f18 margin-bottom-sm"><strong>Pilih minimal 3</strong> topik agar kami dapat menyajikan berita sesuai dengan minat Anda.</p>
			<ul class="row-list row2 list-topik-f">
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Politik" name="Politik">
                            <label for="Politik">Politik</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Metro" name="Metro">
                            <label for="Metro">Metro</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Bisnis" name="Bisnis">
                            <label for="Bisnis">Bisnis</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Kolom" name="Kolom">
                            <label for="Kolom">Kolom</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Olahraga" name="Olahraga">
                            <label for="Olahraga">Olahraga</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Bola" name="Bola">
                            <label for="Bola">Bola</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Otomotif" name="Otomotif">
                            <label for="Otomotif">Otomotif</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Seleb" name="Seleb">
                            <label for="Seleb">Seleb</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Teknologi" name="Teknologi">
                            <label for="Teknologi">Teknologi</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Gaya" name="Gaya">
                            <label for="Gaya">Gaya Hidup</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Dunia" name="Dunia">
                            <label for="Dunia">Dunia</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Cantik" name="Cantik">
                            <label for="Cantik">Cantik</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Travel" name="Travel">
                            <label for="Travel">Travel</label>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box-interest centering">
                        <div class="inter-check">
                            <input type="checkbox" id="Nasional" name="Nasional">
                            <label for="Nasional">Nasional</label>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="fixed-bottom">
				<a href="simpan-topik-favorit.php" class="sign-btn medium bg-black cl-white radius4">Simpan</a>
            </div>
        </div>
    </div>
</main>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/fix.js"></script>
<script src="js/fixmain.js"></script>
<script src="js/jquery.multi-select.js"></script>
<script src="js/base.js"></script>
</body>
</html>