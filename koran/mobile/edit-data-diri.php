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
	<header class="header alt">
		<div class="top-head"><h1 class="title">Data Diri</h1></div>
	</header>
<main class="cd-main-content nomenu fxbot" style="display:flex; flex:1;">
	<div class="container overflow padding-top-sm">
    	<div class="container-col">
        	<div class="col12">
				<div class="box-inside overflow noborder padding-no margin-bottom-lg">
                    <label class="medium">Tanggal Lahir</label>
                    <div class="element-box">
                        <input type="date" class="element-input medium noicons darkline radius2">
                    </div>
                </div>
            </div>
        	<div class="col12">
                <div class="box-inside overflow noborder padding-no margin-bottom-lg">
                    <h4 class="title bold margin-bottom-xs">Jenis Kelamin</h4>
                    <div class="container-col">
                    	<div class="col6">
                        <label for="laki" class="element-radio margin-right-xs">
                            <input type="radio" name="kelamin" id="laki"><span style="font-size:14px;line-height:20px;">Laki-laki</span>
                        </label>
                        </div>
                        <div class="col6">
						<label for="perempuan" class="element-radio margin-right-xs">
                            <input type="radio" name="kelamin" id="perempuan"><span style="font-size:14px;line-height:20px;">Perempuan</span>
                        </label>
                        </div>
                    </div>
                </div>
        	</div>
        	<div class="col12">
                <div class="box-inside overflow noborder padding-no margin-bottom-lg">
                    <h4 class="title bold margin-bottom-xs">Status</h4>
                    <div class="container-col">
                    	<div class="col6">
                        <label for="belum" class="element-radio margin-right-xs">
                            <input type="radio" name="status_perkawinan" id="belum"><span style="font-size:14px;line-height:20px;">Belum Menikah</span>
                        </label>
                        </div>
                        <div class="col6">
						<label for="menikah" class="element-radio margin-right-xs">
                            <input type="radio" name="status_perkawinan" id="menikah"><span style="font-size:14px;line-height:20px;">Menikah</span>
                        </label>
                        </div>
                    </div>
                </div>
        	</div>
        	<div class="col12">
				<div class="box-inside overflow noborder padding-no margin-bottom-lg">
                    <label class="medium">Kota Tinggal Saat Ini</label>
                    <div class="element-box">
                        <select name="cars" id="kota" class="element-select medium noicons fw400">
                            <option value="satu">Kota satu</option>
                            <option value="dua">Kota dua</option>
                            <option value="tiga">Kota tiga</option>
                            <option value="empat">Kota Empat</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col12">
                <div class="box-inside overflow noborder padding-no margin-bottom-sm">
                    <h4 class="title bold margin-bottom-xs">Pendidikan Terakhir</h4>
                    <div class="container-col">
                    	<div class="col6">
                            <div class="margin-bottom-sm">
                                <label for="pen1" class="element-radio margin-right-xs">
                                    <input type="radio" name="pendidikan" id="pen1"><span style="font-size:14px;line-height:20px;">SD</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pen2" class="element-radio margin-right-xs">
                                    <input type="radio" name="pendidikan" id="pen2"><span style="font-size:14px;line-height:20px;">SMP</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pen3" class="element-radio margin-right-xs">
                                    <input type="radio" name="pendidikan" id="pen3"><span style="font-size:14px;line-height:20px;">SMA</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pen4" class="element-radio margin-right-xs">
                                    <input type="radio" name="pendidikan" id="pen4"><span style="font-size:14px;line-height:20px;">S1</span>
                                </label>
                            </div>
                        </div>
                        <div class="col6">
                            <div class="margin-bottom-sm">
                                <label for="pen5" class="element-radio margin-right-xs">
                                    <input type="radio" name="pendidikan" id="pen5"><span style="font-size:14px;line-height:20px;">S2</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pen6" class="element-radio margin-right-xs">
                                    <input type="radio" name="pendidikan" id="pen6"><span style="font-size:14px;line-height:20px;">S3</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pen7" class="element-radio margin-right-xs">
                                    <input type="radio" name="pendidikan" id="pen7"><span style="font-size:14px;line-height:20px;">Lainnya</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
            <div class="col12">
                <div class="box-inside overflow noborder padding-no margin-bottom-sm">
                    <h4 class="title bold margin-bottom-xs">Pekerjaan Saat Ini</h4>
                    <div class="container-col">
                    	<div class="col6">
                            <div class="margin-bottom-sm">
                                <label for="pek1" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek1"><span style="font-size:14px;line-height:20px;">Karyawan Swasta</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek2" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek2"><span style="font-size:14px;line-height:20px;">Wiraswasta</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek3" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek3"><span style="font-size:14px;line-height:20px;">Dosen</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek4" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek4"><span style="font-size:14px;line-height:20px;">Guru</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek5" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek5"><span style="font-size:14px;line-height:20px;">Lawyer</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek6" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek6"><span style="font-size:14px;line-height:20px;">PNS/ASN</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek7" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek7"><span style="font-size:14px;line-height:20px;">Ibu Rumah Tangga</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek8" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek8"><span style="font-size:14px;line-height:20px;">LSM</span>
                                </label>
                            </div>
                        </div>
                        <div class="col6">
                            <div class="margin-bottom-sm">
                                <label for="pek9" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek9"><span style="font-size:14px;line-height:20px;">Mahasiswa/i</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek10" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek10"><span style="font-size:14px;line-height:20px;">Masih Sekolah</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek11" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek11"><span style="font-size:14px;line-height:20px;">Pensiunan</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek12" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek12"><span style="font-size:14px;line-height:20px;">Purnawirawan</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek13" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek13"><span style="font-size:14px;line-height:20px;">Karyawan BUMN</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek14" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek14"><span style="font-size:14px;line-height:20px;">Karyawan BUMD</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek15" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek15"><span style="font-size:14px;line-height:20px;">Lainnya</span>
                                </label>
                            </div>
                            <div class="margin-bottom-sm">
                                <label for="pek16" class="element-radio margin-right-xs">
                                    <input type="radio" name="pekerjaan" id="pek16"><span style="font-size:14px;line-height:20px;">Tidak/Belum Kerja</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
        </div> <!-- end container col -->

        <div class="fixed-bottom">
        <a href="edit-data-diri2.php" class="sign-btn medium bg-black cl-white radius4">Selanjutnya</a>
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