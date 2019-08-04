<?php
    require_once('connection.php');
    $query = "SELECT * FROM prices";
    $data_query = mysqli_query($koneksi,$query);
    $i = 0;
    while($data = mysqli_fetch_array($data_query)){
        $price_tag[$i]['paket'] = $data['paket'];
        $price_tag[$i]['harga'] = number_format($data['harga'],0,',','.');
        $price_tag[$i]['harga_diskon'] = number_format($data['harga_diskon'],0,',','.');
        $i++;   
    }
?>

<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="libraries/custom.css">
    <title>Document</title>
</head>
<body>
<div class="row main-row">
    <div class="container" style="margin-top:0px; margin-bottom:0px;">
        <nav class="navbar navbar-expand-lg navbar-light" style="padding-top:3px; padding-bottom:3px">
            <!-- Navbar Links -->
            <div class="navbar-nav" style="width:100%">
                <span class="ribbon2">
                    <i class="fa fa-tag fa-lg" style="color:white; font-size:0.95em"></i>
                </span>
                <div class="col-lg-6 ebook-ribbon" style="padding:0">
                    <a class="nav-link" href="#" style="font-size:0.72em">
                        <span class="ribbon2-title" style="margin-left:30px;position: absolute;top:3px;">Gratis Ebook 9 Cara Cerdas Menggunakan Domain [ x ]</span>
                    </a>
                </div>
                <div class="col-lg-6 contact-area" style="padding:0"> 
                    <a class="nav-link" href="#" style="margin-left:15px; display:inline-block; font-size:0.85em"><i class="fa fa-phone fa-lg"></i> <span class="contact-title">0274-5305505</span></a>
                    <a class="nav-link" href="#" style="margin-left:15px; display:inline-block; font-size:0.85em"><i class="fa fa-comments fa-lg"></i> <span class="contact-title">Live Chat</span></a>
                    <a class="nav-link" href="#" style="margin-left:12px; display:inline-block; font-size:0.85em"><i class="fa fa-user-circle fa-lg"></i> <span class="contact-title">Member Area</span></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="row main-row" id="navigation">
    <div class="container" style="margin-top:4px; margin-bottom:4px">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Navbar Brand Logo -->
            <a class="navbar-brand nav-link" href="#home">
                <img class="img-responsive logo" src="assets/images/niagahoster-logo.png" alt="logo">
            </a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="#hosting">Hosting</a>
                    <a class="nav-link" href="#domain">Domain</a>
                    <a class="nav-link" href="#server">Server</a>
                    <a class="nav-link" href="#website">Website</a>
                    <a class="nav-link" href="#afiliasi">Afiliasi</a>
                    <a class="nav-link" href="#promo">Promo</a>
                    <a class="nav-link" href="#pembayaran">Pembayaran</a>
                    <a class="nav-link" href="#review">Review</a>
                    <a class="nav-link" href="#kontak">Kontak</a>
                    <a class="nav-link" href="#blog">Blog</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="row main-row" style="border-bottom:solid 1px #f1f1ea; padding-bottom:3.5rem">
    <div class="container"> 
    <div class="row">
            <div class="col-lg-6 advertise-box">
                <h1 id="hosting"><b>PHP Hosting</b></h1>
                <h3>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h3>
                <table class="table custom-table-3">
                    <tr>
                        <td style="padding-right:.1rem"><i class="fa fa-check-circle fa-lg"></i></td>
                        <td>Solusi PHP untuk performa query yang lebih cepat.</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-check-circle fa-lg"></i></td>
                        <td>Konsumsi memori lebih rendah.</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-check-circle fa-lg"></i></td>
                        <td>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-check-circle fa-lg"></i></td>
                        <td>Fitur Enkripsi ionCube dan Zend Guard Loaders.</td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-6">
                <img class="main-img" src="assets/svg/illustration banner PHP hosting-01.svg" alt="">
            </div>
    </div>
    </div>
</div>
<div id="domain" class="row main-row" style="border-bottom:none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 icon-helper" style="text-align:center;">
                <img src="assets/svg/icon PHP Hosting_zendguard.svg" alt="">
                <p class="hidden-title"> <br>PHP Zend Guard Loader</p>
            </div>
            <div class="col-lg-4" style="text-align:center">
                <img src="assets/svg/icon PHP Hosting_composer.svg" alt="">
                <p class="hidden-title"><br>PHP Composer</p>
            </div>
            <div class="col-lg-4 icon-helper" style="text-align:center;">
                <img src="assets/svg/icon PHP Hosting_ioncube.svg" alt="">
                <p class="hidden-title"><br>PHP ionCube Loader</p>
            </div>
        </div>
        <div class="row not-hidden-title" style="margin-top:15px">  
            <div class="col-lg-4" style="text-align:center;">
                <p>PHP Zend Guard Loader</p>
            </div>
            <div class="col-lg-4" style="text-align:center">
                <p>PHP Composer</p>
            </div>
            <div class="col-lg-4" style="text-align:center;">
                <p>PHP ionCube Loader</p>
            </div>
        </div>
    </div>
</div>
<div class="row main-row" style="border-bottom:none; margin-top:20px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="text-align:center">
                <h1 class="title-secondary">Paket Hosting Singapura yang Tepat</h1>
                <h3 class="sub-title-secondary">Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
            </div>
        </div>
    </div>
</div>
<div id="promo" class="row main-row" style="border-bottom:none; margin-top:20px">
    <div class="container">
        <div class="row">
        <div class="col-lg-3 price no-padding">
                <div class="ribbon">
                    <div class="row" style="margin-left:0; margin-right:0; margin-top:10px; border-bottom:solid 1px #f1f1ea">
                        <div class="col-lg-12" style="text-align:center">
                            <h1 style="color::#404040; font-size:1.25em;"><?php echo $price_tag[0]['paket']?></h1>
                        </div>
                    </div>
                    <div class="row" style="margin-left:0; margin-right:0; margin-top:10px; border-bottom:solid 1px #f1f1ea">
                        <div class="col-lg-12" style="text-align:center">
                            <h3 style="color:#333; font-size:0.85em;"><strike><?php echo 'Rp '.$price_tag[0]['harga']; ?></strike></h3>
                            <h1 style="color:#333; font-size:1.15em;">
                                <?php 
                                    $harga_diskon = explode('.',$price_tag[0]['harga_diskon']);
                                    echo'Rp <span style="font-size:2.3em">'.$harga_diskon[0].'</span>.'.$harga_diskon[1].'/bln</h1>';
                                ?>
                            </h1>
                        </div>
                    </div>
                    <div class="row" style="margin-left:0; margin-right:0; border-bottom:solid 1px #f1f1ea">
                        <div class="col-lg-12" style="text-align:center">
                            <span style="font-size:0.85em; color:#333"><b>938</b> Pengguna Terdaftar</span>
                        </div>  
                    </div>
                    <div class="row" style="margin-left:0; margin-right:0;">
                        <div class="col-lg-12" style="text-align:center">
                            <ul class="fitur">
                                <li><b>0.5X RESOURCE POWER</b></li>
                                <li><b>500 MB</b> Disk Space</li>
                                <li><b>Unlimited</b> Bandwith</li>
                                <li><b>Unlimited</b> Databases</li>
                                <li><b>1</b> Domain</li>
                                <li><b>Instant</b> Backup</li>
                                <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                            </ul>
                            <button class="btn btn-secondary small" style="border-radius:20px; margin-bottom:20px">Pilih Sekarang</button>
                        </div>  
                    </div>
                </div>
            </div> 
            <div class="col-lg-3 price no-padding">
                <div class="ribbon">
                    <div class="row" style="margin-left:0; margin-right:0; margin-top:10px; border-bottom:solid 1px #f1f1ea">
                        <div class="col-lg-12" style="text-align:center">
                            <h1 style="color::#404040; font-size:1.25em;"><?php echo $price_tag[1]['paket']?></h1>
                        </div>
                    </div>
                    <div class="row" style="margin-left:0; margin-right:0; margin-top:10px; border-bottom:solid 1px #f1f1ea">
                        <div class="col-lg-12" style="text-align:center">
                            <h3 style="color:#333; font-size:0.85em;"><strike><?php echo 'Rp '.$price_tag[1]['harga']; ?></strike></h3>
                            <h1 style="color:#333; font-size:1.15em;">
                                <?php 
                                    $harga_diskon = explode('.',$price_tag[1]['harga_diskon']);
                                    echo'Rp <span style="font-size:2.3em">'.$harga_diskon[0].'</span>.'.$harga_diskon[1].'/bln</h1>';
                                ?>
                            </h1>
                        </div>
                    </div>
                    <div class="row" style="margin-left:0; margin-right:0; border-bottom:solid 1px #f1f1ea">
                        <div class="col-lg-12" style="text-align:center">
                            <span style="font-size:0.85em; color:#333"><b>4.168</b> Pengguna Terdaftar</span>
                        </div>  
                    </div>
                    <div class="row" style="margin-left:0; margin-right:0;">
                        <div class="col-lg-12" style="text-align:center">
                            <ul class="fitur">
                                <li><b>1X RESOURCE POWER</b></li>
                                <li><b>Unlimited</b> Disk Space</li>
                                <li><b>Unlimited</b> Bandwith</li>
                                <li><b>Unlimited</b> POP3 Email</li>
                                <li><b>Unlimited</b> Databases</li>
                                <li><b>10</b> Addon Domains</li>
                                <li><b>Instant</b> Backup</li>
                                <li><b>Domain Gratis</b> Selamanya</li>
                                <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                            </ul>
                            <button class="btn btn-secondary small" style="border-radius:20px; margin-bottom:20px">Pilih Sekarang</button>
                        </div>  
                    </div>
                </div>
            </div> 
            <div class="col-lg-3 price no-padding">
                <div class="ribbon best-seller">
                    <div class="wrap">
                        <span class="ribbon6"><b>Best Seller!</b></span>
                    </div>
                    <div class="row best-seller" style="margin-left:0; margin-right:0;">
                        <div class="col-lg-12" style="text-align:center">
                            <h1 style="color:white; font-size:1.25em;"><?php echo $price_tag[2]['paket']?></h1>
                        </div>
                    </div>
                    <div class="row best-seller" style="margin-left:0; margin-right:0;border-radius:0">
                        <div class="col-lg-12" style="text-align:center">
                            <h3 style="color:white; font-size:0.85em;"><strike><?php echo 'Rp '.$price_tag[2]['harga']; ?></strike></h3>
                            <h1 style="color:white; font-size:1.15em;">
                                <?php 
                                    $harga_diskon = explode('.',$price_tag[2]['harga_diskon']);
                                    echo'Rp <span style="font-size:2.3em">'.$harga_diskon[0].'</span>.'.$harga_diskon[1].'/bln';
                                ?>
                            </h1>
                        </div>
                    </div>
                    <div class="row user-registered-info" style="margin-left:0; margin-right:0; border-bottom:solid 1px #f1f1ea">
                        <div class="col-lg-12" style="text-align:center">
                            <span style="font-size:0.85em"><b>10.017</b> Pengguna Terdaftar</span>
                        </div>   
                    </div>
                    <div class="row" style="margin-left:0; margin-right:0;">
                        <div class="col-lg-12" style="text-align:center">
                            <ul class="fitur">
                                <li><b>2X RESOURCE POWER</b></li>
                                <li><b>Unlimited</b> Disk Space</li>
                                <li><b>Unlimited</b> Bandwith</li>
                                <li><b>Unlimited</b> POP3 Email</li>
                                <li><b>Unlimited</b> Databases</li>
                                <li><b>Unlimited</b> Addon Domains</li>
                                <li><b>Instant</b> Backup</li>
                                <li><b>Domain Gratis</b> Selamanya</li>
                                <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                                <li><b>Private</b> Name Server</li>
                                <li><b>SpamAssasin</b> Main Protection</li>
                            </ul>
                            <button class="btn btn-primary small" style="border-radius:20px; margin-bottom:20px">Pilih Sekarang</button>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-lg-3 price no-padding">
                <div class="ribbon">
                    <div class="row" style="margin-left:0; margin-right:0; margin-top:10px; border-bottom:solid 1px #f1f1ea">
                        <div class="col-lg-12" style="text-align:center">
                            <h1 style="color::#404040; font-size:1.25em;"><?php echo $price_tag[3]['paket']?></h1>
                        </div>
                    </div>
                    <div class="row" style="margin-left:0; margin-right:0; margin-top:10px; border-bottom:solid 1px #f1f1ea">
                        <div class="col-lg-12" style="text-align:center">
                            <h3 style="color:#333; font-size:0.85em;"><strike><?php echo 'Rp '.$price_tag[3]['harga']; ?></strike></h3>
                            <h1 style="color:#333; font-size:1.15em;">
                                <?php 
                                    $harga_diskon = explode('.',$price_tag[3]['harga_diskon']);
                                    echo'Rp <span style="font-size:2.3em">'.$harga_diskon[0].'</span>.'.$harga_diskon[1].'/bln';
                                ?>
                            </h1>
                        </div>
                    </div>
                    <div class="row" style="margin-left:0; margin-right:0; border-bottom:solid 1px #f1f1ea">
                        <div class="col-lg-12" style="text-align:center">
                            <span style="font-size:0.85em; color:#333"><b>3.552</b> Pengguna Terdaftar</span>
                        </div>  
                    </div>
                    <div class="row" style="margin-left:0; margin-right:0;">
                        <div class="col-lg-12" style="text-align:center">
                            <ul class="fitur">
                                <li><b>3X RESOURCE POWER</b></li>
                                <li><b>Unlimited</b> Disk Space</li>
                                <li><b>Unlimited</b> Bandwith</li>
                                <li><b>Unlimited</b> POP3 Email</li>
                                <li><b>Unlimited</b> Databases</li>
                                <li><b>Unlimited</b> Addon Domains</li>
                                <li><b>Magic Auto</b> Backup & Restore</li>
                                <li><b>Domain Gratis</b> Selamanya</li>
                                <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                                <li><b>Private</b> Name Server</li>
                                <li><b>Prioritas</b> Layanan Support</li>
                                <li><b>SpamExpert</b> Pro Mail Protection</li>
                            </ul>
                            <button class="btn btn-secondary small" style="border-radius:20px; margin-bottom:20px">Diskon 40%</button>
                        </div>  
                    </div>
                </div>
            </div>      
        </div>
    </div>
</div>
<div id="server" class="row main-row" style="border-bottom:none; margin-top:20px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="text-align:center">
                <h3>Powerfull dengan limit PHP yang lebih besar</h3>
            </div>
        </div>
        <div class="row" style="margin-top:20px;">
            <div class="col-lg-5 first-capacities-advantage-list" style="text-align:center">
                <table class="table table-striped custom-table-2">
                    <tr class="ganjil">
                        <td style="padding:.5rem"><i class="fa fa-check-circle fa-lg"></i></<i>
                        <td>max execution time 300s</td>
                    </tr>
                    <tr class="genap">
                        <td style="padding:.5rem"><i class="fa fa-check-circle fa-lg"></i></td>
                        <td>max execution time 300s</td>
                    </tr>
                    <tr class="ganjil">
                        <td style="padding:.5rem"><i class="fa fa-check-circle fa-lg"></i></td>
                        <td>PHP memory limit 1024 mbstring</td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-5" style="text-align:center">
                <table class="table table-striped custom-table-2">
                    <tr class="ganjil">
                        <td style="padding:.5rem"><i class="fa fa-check-circle fa-lg"></i></td>
                        <td>post max size 128 MB</td></tr>
                    <tr class="genap">
                        <td style="padding:.5rem"><i class="fa fa-check-circle fa-lg"></i></td>
                        <td>upload max file size 128 MB</td>
                    </tr>
                    <tr class="ganjil">
                        <td style="padding:.5rem"><i class="fa fa-check-circle fa-lg"></i></td>
                        <td>max input vars 2500</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="container border-container"></div>
        </div>
    </div>
</div>
<div id="afiliasi" class="row main-row" style="border-bottom:none; margin-top:20px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="text-align:center">
                <h3>Semua Paket Hosting Sudah Termasuk</h3>
            </div>
        </div>
        <div class="row" style="margin-top:35px;">
            <div class="col-lg-4 paket-hosting-unit" style="text-align:center">
                <img src="assets/svg/icon PHP Hosting_PHP Semua Versi.svg" alt="">
                <h3><b>PHP Semua Versi</b></h3>
                <p>Pilih mulai dari PHP Versi 5.3 hinga PHP 7. Pilih Sesuka Anda !</p>
            </div>
            <div class="col-lg-4 paket-hosting-unit"  style="text-align:center">
                <img src="assets/svg/icon PHP Hosting_My SQL.svg" alt="">
                <h3><b>MySQL Versi 5.6</b></h3>
                <p>Nikmati MySQL versi terbaru, terpecat, dan kaya akan fitur</p>
            </div>
            <div class="col-lg-4 paket-hosting-unit"  style="text-align:center">
                <img src="assets/svg/icon PHP Hosting_CPanel.svg" alt="">
                <h3><b>Panel Hosting cPanel</b></h3>
                <p>Kelola website dengan panel canggih yang familiar di hati anda.</p>
            </div>
        </div>
        <div class="row package-bottom">
            <div class="col-lg-4 paket-hosting-unit"  style="text-align:center">
                <img src="assets/svg/icon PHP Hosting_garansi uptime.svg" alt="">
                <h3><b>Garansi Uptime 99.9%</b></h3>
                <p>Data center yang mendukung kelangsungan website anda 24/7.</p>
            </div>
            <div class="col-lg-4 paket-hosting-unit"  style="text-align:center">
                <img src="assets/svg/icon PHP Hosting_InnoDB.svg" alt="">
                <h3><b>Database InnoDB Unlimited</b></h3>
                <p>Jumlah dan ukuran database yang tumbuh sesuai kebutuhan anda.</p>
            </div>
            <div class="col-lg-4 paket-hosting-unit"  style="text-align:center">
                <img src="assets/svg/icon PHP Hosting_My SQL remote.svg" alt="">
                <h3><b>Wildcard Remote MySQL</b></h3>
                <p>Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
            </div>
        </div>
        <div class="row">
                <div class="container border-container" style="margin-top:5px"></div>
        </div>
    </div>
</div>
<div id="review" class="row main-row">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-12" style="text-align:center">
                <h3>Mendukung Penuh Framework Laravel</h3>
            </div>
        </div>
        <div class="row" style="margin-top:10px">
            <div class="col-lg-7 advertise-box">
                <h3 style="font-size:1.1em; line-height:1.5">
                    Tak perlu menggunakan dedicated server ataupun VPS yang mahal.
                    Layanan PHP hosting murah kami mendukung penuh framework favorit Anda
                </h3>
                </p>
                    <table class="table custom-table-3">
                        <tr>
                            <td style="padding-right:.1rem"><i class="fa fa-check-circle fa-lg"></i></td>
                            <td>Install Laravel <b class="bold">1 klik</b> dengan Softaculous Installer.</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle fa-lg"></i></td>
                            <td>Mendukung ekstensi <b class="bold">PHP MCrypt, phar, mbstring, json,</b> dan <b class="bold">fileinfo</b>.</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle fa-lg"></i></td>
                            <td>Tersedia <b class="bold">Composer </b>dan <b class="bold">SSH</b> untuk menginstal packages pilihan anda.</td>
                        </tr>
                    </table>
                    <!-- <ul style="padding-left:0">
                        <li><i class="fa fa-check-circle fa-lg"></i> </li>
                        <li><i class="fa fa-check-circle fa-lg"></i> </li>
                        <li><i class="fa fa-check-circle fa-lg"></i> </li>
                    </ul> -->
                </p>
                <p style="font-size:0.80em; margin-top:15px">Nb. Composer dan SSH hanya tersedia pada paket personal dan bisnis</p>
                <button class="btn btn-primary" style="border-radius:20px;margin-top:12px">Pilih Hosting Anda</button>
                <br><br>
            </div>
            <div class="col-lg-5">
                <img class="main-img" src="assets/svg/illustration banner support laravel hosting.svg" alt="">
            </div>
        </div>
    </div>
</div>
<div class="row main-row" style="margin-top:40px; border-bottom:0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="text-align:center">
                <h3>Modul Lengkap Untuk Menjalankan Aplikasi PHP Anda</h3>
            </div>
            <div class="col-lg-12" style="text-align:center;">
            <div class="table-responsive">
                <table class="table custom-table-1">
                    <tr>
                        <td>IcePHP</td>
                        <td>http</td>
                        <td>nd_pdo_mysql</td>
                        <td>stats</td>
                    </tr>
                    <tr>
                        <td>apc</td>
                        <td>huffman</td>
                        <td>oauth</td>
                        <td>stem</td>
                    </tr>
                    <tr>
                        <td>apcu</td>
                        <td>idn</td>
                        <td>oci8</td>
                        <td>stomp</td>
                    </tr>
                    <tr>
                        <td>apm</td>
                        <td>igbinary</td>
                        <td>odbc</td>
                        <td>suhosin</td>
                    </tr>
                    <tr>
                        <td>ares</td>
                        <td>imagick</td>
                        <td>opache</td>
                        <td>sybase_ct</td>
                    </tr>
                    <tr>
                        <td>bcmath</td>
                        <td>imap</td>
                        <td>pdf</td>
                        <td>sysvmsg</td>
                    </tr>
                    <tr>
                        <td>bcompiler</td>
                        <td>included</td>
                        <td>pdo</td>
                        <td>sysvsem</td>
                    </tr>
                    <tr>
                        <td>big_int</td>
                        <td>inotify</td>
                        <td>pdo_dblib</td>
                        <td>sysvshm</td>
                    </tr>
                    <tr>
                        <td>bitset</td>
                        <td>interbase</td>
                        <td>pdo_firebird</td>
                        <td>tidy</td>
                    </tr>
                    <tr>
                        <td>bloomy</td>
                        <td>intl</td>
                        <td>pdo_mysql</td>
                        <td>timezonedb</td>
                    </tr>
                    <tr>
                        <td>bz2_fiter</td>
                        <td>ioncube_loader</td>
                        <td>pdo_odbc</td>
                        <td>trader</td>
                    </tr>
                    <tr>
                        <td>clamav</td>
                        <td>ioncube_loader_4</td>
                        <td>pdo_pgsql</td>
                        <td>translit</td>
                    </tr>
                    <tr>
                        <td>coin_acceptor</td>
                        <td>jsmin</td>
                        <td>pdo_sqlite</td>
                        <td>uploadprogress</td>
                    </tr>
                    <tr>
                        <td>crack</td>
                        <td>json</td>
                        <td>pgsql</td>
                        <td>uri_tempplate</td>
                    </tr>
                    <tr>
                        <td>dba</td>
                        <td>idap</td>
                        <td>phalcon</td>
                        <td>uuid</td>
                    </tr>
                </table>
                </div>
            </div>
            <div class="col-lg-12" style="text-align:center">
                <button class="btn btn-secondary"><b>Selengkapnya</b></button>
            </div>
        </div>
    </div>
</div>
<div class="row main-row" style="margin-top:60px">
    <div class="container"> 
        <div class="row">
                <div class="col-lg-6 advertise-box">
                    <h3>Linux Hosting yang Stabil dengan Teknologi LVE</h3>
                    <p style="margin-top:20px;">
                        SuperMicro <b class="bold">Intel Xeon 24-Cores</b> server dengan RAM <b class="bold">128 GB</b> dan teknologi <b class="bold">LVE CloudLinux</b>
                        untuk stabilitas server Anda. Dilengkapi dengan <b class="bold">SSD</b> untuk kecepatan <b class="bold">MySQL</b> dan caching. Apache
                        load balancer berbasis LiteSpeed Technologies, <b class="bold">CageFS</b> security, <b class="bold">Raid-10</b> protection dan
                        auto backup untuk keamanan website PHP Anda. 
                    </p>
                    <button class="btn btn-primary" style="border-radius:20px;margin-top:12px">Pilih Hosting Anda</button>
                    <br><br><br>
                </div>
                <div class="col-lg-6 dynamic-img">
                    <img class="main-img img-fluid" src="assets/images/image support.png" alt="">
                </div>
        </div>
    </div>
</div>
<footer>
    <div class="main-row custom-footer-1">
        <div class="container" style="margin-top:0">
            <div class="row">
                <div class="col-lg-12" style="padding:20px 15px">
                     <h1 class="footer-contact-title-sm">Bagikan jika anda menyukai halaman ini.</h1>   
                </div>
            </div>
        </div>
    </div>
    <div id="kontak" class="main-row  custom-footer-2">
        <div class="container" style="margin-top:0">
            <div class="row">
                <div class="col-lg-8 padd-lg">
                     <h1 class="footer-contact-title"><span class="font-light">Perlu</span> Bantuan? <span class="font-light">Hubungi Kami : </span>0274-5305505</h1>   
                </div>
                <div class="col-lg-4 padd-lg-2">
                    <button class="btn btn-secondary-lg"><i class="fa fa-comments fa-lg"></i> &nbsp;&nbsp;&nbsp;<b>Live Chat</b></button>
                </div>
            </div>
        </div>
    </div>
    <div class="main-row custom-footer-3">
        <div class="container" style="margin-top:0">
            <div class="row">
                <div class="col-lg-3" style="padding:20px 15px; margin-top:30px;">
                     <h1 class="footer-title">Hubungi Kami</h1>
                     <ul class="footer-list">
                        <li>0274-5305505</li>
                        <li>Senin - Minggu</li>
                        <li>24 Jam Nonstop</li>
                     </ul>  
                     <ul class="footer-list">
                        <li>Jl. Selokan Mataram Monjali</li>
                        <li>Karangjati MT I/304</li>
                        <li>Sinduadi, Mlati, Sleman</li>
                        <li>Yogyakarta 55284</li>
                     </ul>   
                </div>
                <div class="col-lg-3" style="padding:20px 15px; margin-top:30px;">
                    <h1 class="footer-title">Layanan</h1>
                    <ul class="footer-list">
                        <li>Domain</li>
                        <li>Shared Hosting</li>
                        <li>Cloud VPS Hosting</li>
                        <li>Web Builder</li>
                        <li>Keamanan SSL/HTTPS</li>
                        <li>Jasa Pembuatan Website</li>
                        <li>Program Afiliasi</li>
                     </ul>     
                </div>
                <div class="col-lg-3" style="padding:20px 15px; margin-top:30px;">
                    <h1 class="footer-title">Service Hosting</h1>
                    <ul class="footer-list">
                        <li>Hosting Murah</li>
                        <li>Hosting Indonesia</li>
                        <li>Hosting Singapura SG</li>
                        <li>Hosting PHP</li>
                        <li>Hosting Wordpress</li>
                        <li>Hosting Laravel</li>
                    </ul>     
                </div>
                <div class="col-lg-3" style="padding:20px 15px; margin-top:30px;">
                    <h1 class="footer-title">Tutorial</h1>
                    <ul class="footer-list">
                        <li>Knowledgebase</li>
                        <li>Blog</li>
                        <li>Cara Pembayaran</li>
                    </ul>      
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3" style="padding:20px 15px; margin-top:30px;">
                    <h1 class="footer-title">Tentang Kami</h1>
                    <ul class="footer-list">
                        <li>Tim Niagahoster</li>
                        <li>Karir</li>
                        <li>Events</li>
                        <li>Penawaran & Promo Spesial</li>
                        <li>Kontak Kami</li>
                    </ul>   
                </div>
                <div class="col-lg-3" style="padding:20px 15px; margin-top:30px;">
                    <h1 class="footer-title">Kenapa Pilih Niagahoster?</h1>
                    <ul class="footer-list">
                        <li>Support Terbaik</li>
                        <li>Garansi Harga Termurah</li>
                        <li>Domain Gratis Selamanya</li>
                        <li>Datacenter Hosting Terbaik</li>
                        <li>Review Pelanggan</li>
                    </ul>   
                </div>
                <div class="col-lg-3" style="padding:20px 15px; margin-top:30px;">
                    <h1 class="footer-title">Newsletter</h1>
                    <ul class="footer-list">
                        <li class="container">
                            <div class="row newsletter-btn">
                                <a href="#" class="left">Email</a>
                                <a href="#" class="right">Berlangganan</a>
                            </div>
                        </li>
                        <li style="color:#737373; font-size:0.8em">Dapatkan promo dan konten menarik dari penyedia hosting terbaik anda</li>  
                    </ul>
                </div>
                <div class="col-lg-3" style="padding:20px 15px; margin-top:30px;">
                      
                </div>
            </div>
            <div id="pembayaran" class="row">
                <div class="col-lg-12" style="padding:20px 15px">
                    <h1 class="footer-title">Pembayaran</h1>
                    <ul class="footer-list">
                        <li>
                            <img class="payment-img" src="assets/images/pay1.png" alt="">
                            <img class="payment-img" src="assets/images/pay2.png" alt="">
                            <img class="payment-img" src="assets/images/pay3.png" alt="">
                            <img class="payment-img" src="assets/images/pay4.png" alt="">
                            <img class="payment-img" src="assets/images/pay5.png" alt="">
                            <img class="payment-img" src="assets/images/pay6.png" alt="">
                            <img class="payment-img" src="assets/images/pay7.png" alt="">
                        </li>
                        <li style="color:#737373; font-size:0.8em">Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</li>  
                    </ul>
                </div>
            </div>
            <div class="row" style="border-top: solid 1px black;">
                <div class="col-lg-9" style="padding:10px 15px">
                    <ul class="footer-list" style="margin-top:0px; margin-bottom:40px">
                        <li style="font-size:0.73em">Copyright &copy;2016 Niagahoster | Hosting powered by PHP 7, CloudLinux, CloudFlare, BitNinja and Biznet Technovillage Jakarta </li>
                        <li style="font-size:0.73em">Cloud VPS murah powered by Webuzo Softaculous,Intel SSD and cloud computing technology</li>
                    </ul>
                </div>
                <div class="col-lg-3" style="padding:10px 15px">
                    <ul class="footer-list" style="margin-top:0px; margin-bottom:40px">
                        <li style="font-size:0.73em">Syarat dan Ketentuan | Kebijakan Privasi</li>
                        <li style="font-size:0.73em"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="libraries/jquery.easing.1.3.js"></script>
<script src="libraries/jquery-3.1.1.min.js"></script>
<script src="libraries/custom.js"></script>
</body>
</html>
