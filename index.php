<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">   
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Web Hosting Indonesia Unlimited dan Terbaik - Niagahoster</title>
    <link href="./style/css/bootstrap.css" rel="stylesheet">
    <link href="./style/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <!-- Topbar -->
    <div class="atas">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 hidden-sm">
            <a href="">
              <img src="images/ribbon.png">
            </a>
            Gratis Ebook 9 Cara Cerdas Menggunakan Domain [ x ]
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 ">
            <ul>
              <li><a href="#"> <img src="images/user.png" height="20px"> Member Area</a></li>
              <li><a href="#"> <img src="images/chat.png" height="20px"> Live Chat</a></li>
              <li><a href="#"> <img src="images/telp.png" height="20px"> 0274-5305505 </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--  Navbar -->
    <div class="navbar-full">
      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
              <img src="images/niagahosterlogo.png" alt="Niagahoster">
            </a>
          </div>
          <div id="navbar3" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Hosting</a></li>
              <li><a href="#">Domain</a></li>
              <li><a href="#">Server</a></li>
              <li><a href="#">Website</a></li>
              <li><a href="#">Afiliasi</a></li>
              <li><a href="#">Promo</a></li>
              <li><a href="#">Pembayaran</a></li>
              <li><a href="#">Review</a></li>
              <li><a href="#">Kontak</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    
    <!-- Fitur hosting -->
    <section class="php-hosting"> 
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <h2>PHP Hosting</h2>
            <h3 style="color: #5E5E5E">Cepat,Handal, penuh dengan<br> modul PHP yang anda butuhkan</h3><br>
            <div>
              <table class="table-responsive">
                <tbody>
                  <tr>
                    <td class=" glyphicon glyphicon-ok-sign"></td>
                    <td> Solusi PHP untuk performa query yang lebih cepat</td>
                  </tr>      
                  <tr>
                    <td class=" glyphicon glyphicon-ok-sign"></td>
                    <td> Konsumsi memori yang lebih rendah</td>
                  </tr>
                  <tr>
                    <td class=" glyphicon glyphicon-ok-sign"></td>
                    <td> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6 , PHP 7.0</td>
                  </tr>
                  <tr>
                    <td class=" glyphicon glyphicon-ok-sign"></td>
                    <td> Fitur enkripsi Ioncube dan Zend Guard Loader</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 slideanim">
            <img src="style/assets/svg/illustration banner PHP hosting-01.svg">
          </div>
        </div>
      </div>
    </section>

    <!-- PHP fitur -->
    <section class="php-fitur"> 
      <div class="container">
        <div class="row">
          <div id="portfolio" class="container-fluid text-center">
            <div class="row text-center slideanim">
              
              <div class="col-sm-4">
                <div class="thumbnail">
                  <img src="images/zendguard.png">
                  <br>
                  <p>PHP Zend Guard Loader</p>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="thumbnail">
                  <img src="images/composer.png" width="136px">
                  <br>
                  <p>PHP Composer</p>
                </div>
              </div>
              
              <div class="col-sm-4">
                <div class="thumbnail">
                  <img src="images/ioncube.png">
                  <br>
                  <p>PHP Ioncube Loader</p>
                </div>
              </div>

            </div>
            <br>
            <hr>
        </div>
      </div>
    </section>

    <!-- Price -->
    <section class="pricing" id="pricing">
      <div class="container" ng-app="myApp">
        <div class="row text-center slideanim" ng-controller="newsController">
          <h2>
            <b>Paket Hosting Singapura yang Tepat</b>
          </h2>
          <h3>Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
          <br><br>
          <div class="col-md-3 col-sm-6">
            <div class="pricing-table">
              <div class="pricing-header">
                <div class="pt-name">BAYI</div>
                <div class="pt-price" ng-repeat="berita in harga">
                  <h4 style="text-decoration: line-through;">{{berita.Paketbayi_sebelumdiskon}}</h4>
                  {{berita.Paketbayi_sesudahdiskon}}
                  <small>/bln</small>
                </div>
                <div class="pt-name" ng-repeat="berita in harga" >
                  <h5>
                  <b>{{berita.Pelanggan_paketbayi}}</b>
                  Pengguna Terdaftar
                </div>
              </div>
              <div class="pricing-body">{{berita.HeadLine}}
                <ul>
                  <li> <b>0.5X RESOURCE POWER</b></li>
                  <li> <b>500</b> MB Disk Space</li>
                  <li> <b>Unlimited</b> Bandwidth </li>
                  <li> <b>Unlimited</b> Databases </li>
                  <li> <b>1 Domain</b> </li>
                  <li> <b>Instant</b> Backup </li>
                  <li> <b>Unlimited SSL </b> Gratis Selamanya </li>
                </ul>
              </div>
              <div class="pricing-footer">
                <a href="#" class="btn btn-default">Pilih Sekarang</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="pricing-table">
              <div class="pricing-header">
                <div class="pt-name">PELAJAR</div>
                <div class="pt-price" ng-repeat="berita in harga">
                <h4 style="text-decoration: line-through;">{{berita.Paketpelajar_sebelumdiskon}}</h4>
                {{berita.Paketpelajar_sesudahdiskon}}
                <small>/bln</small>
              </div>
              <div class="pt-name" ng-repeat="berita in harga">
                <h5>
                  <b>{{berita.Pelanggan_paketpelajar}}</b>
                  Pengguna Terdaftar
                </h4>
              </div>
            </div>
              <div class="pricing-body">
                <ul>
                  <li> <b>1X RESOURCE POWER</b></li>
                  <li> <b>Unlimited</b> Disk Space </li>
                  <li> <b>Unlimited</b> Bandwidth  </li>
                  <li> <b>Unlimited</b> POP3 Email  </li>
                  <li> <b>Unlimite</b> Databases </b> </li>
                  <li> <b>10</b> Addon Domains </b> </li>
                  <li> <b>Instant </b> Backup </li>
                  <li> <b>Domain Gratis</b> Selamanya </li>
                  <li> <b>Unlimited SSL </b> Gratis Selamanya </li>
                </ul>
              </div>
              <div class="pricing-footer">
                <a href="#" class="btn btn-default">Pilih Sekarang</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="pricing-table featured">
              <div class="pricing-header">
                <div class="pt-name" style="background-color: #298eea;">PERSONAL</div>
                <div class="pt-price" style="background-color: #298eea;" ng-repeat="berita in harga">
                  <h4 style="text-decoration: line-through;">{{berita.Paketpersonal_sebelumdiskon}}</h4>
                  {{berita.Paketpersonal_sesudahdiskon}}<small>/bln</small></div>
                <div class="pt-name personal" style="background-color: #177eda;" ng-repeat="berita in harga"><h5><b>{{berita.Pelanggan_paketpersonal}}</b> Pengguna Terdaftar</div>
                <div class="featured-text">Best Seller!</div>
              </div>
              <div class="pricing-body" style="border: 1px solid #298eea;">
                <ul>
                  <li> <b>2X RESOURCE POWER</b></li>
                  <li> <b>Unlimited</b> Disk Space </li>
                  <li> <b>Unlimited</b> Bandwidth  </li>
                  <li> <b>Unlimited</b> POP3 Email  </li>
                  <li> <b>Unlimite</b> Databases </b> </li>
                  <li> <b>Unlimited</b> Addon Domains </b> </li>
                  <li> <b>Instant </b> Backup </li>
                  <li> <b>Domain Gratis</b> Selamanya </li>
                  <li> <b>Unlimited SSL </b> Gratis Selamanya </li>
                  <li> <b>Private </b> Name Server </li>
                  <li> <b>SpamAssasin</b> Mail Protection </li>
                </ul>
              </div>
              <div class="pricing-footer" style="border: 1px solid #298eea;" >
                <a href="#" class="btn btn-main">Pilih Sekarang</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="pricing-table">
              <div class="pricing-header">
                 <div class="pt-name">BISNIS</div>
                <div class="pt-price" ng-repeat="berita in harga">
                  <h4 style="text-decoration: line-through;">{{berita.Paketbisnis_sebelumdiskon}}</h4>
                  {{berita.Paketbisnis_sesudahdiskon}}<small>/bln</small></div>
                <div class="pt-name" ng-repeat="berita in harga"><h5><b>{{berita.Pelanggan_paketbisnis}}</b> Pengguna Terdaftar</div>
              </div>
              <div class="pricing-body">
                <ul>
                  <li> <b>3X RESOURCE POWER</b></li>
                  <li> <b>Unlimited</b> Disk Space </li>
                  <li> <b>Unlimited</b> Bandwidth  </li>
                  <li> <b>Unlimited</b> POP3 Email  </li>
                  <li> <b>Unlimite</b> Databases </b> </li>
                  <li> <b>Unlimited</b> Addon Domains </b> </li>
                  <li> <b>Magic Auto</b> Backup & Restore</li>
                  <li> <b>Domain Gratis</b> Selamanya </li>
                  <li> <b>Unlimited SSL </b> Gratis Selamanya </li>
                  <li> <b>Private </b> Name Server </li>
                  <li> <b>Prioritas </b> Layanan Support </li>
                  <li> 
                      <i class="fa fa-star"> </i>
                      <i class="fa fa-star"> </i>
                      <i class="fa fa-star"> </i>
                      <i class="fa fa-star"> </i><br>
                    <b>SpamExpert</b> Pro Mail Protection </li>
                </ul>
              </div>
              <div class="pricing-footer">
                <a href="#" class="btn btn-default">Diskon 40%</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Limit PHP -->
    <section class="limit-php"> 
      <div class="container">
        <div class="row text-center">
          <h3>Powerful dengan limit php yang lebih besar</h3><br>
          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <table class="table">     
                <tbody>
                  <tr class="limit_table">
                    <td class=" glyphicon glyphicon-ok-sign"></td>
                    <td>max execution time 300s</td>
                  </tr>      
                  <tr class="limit_table success">
                    <td class=" glyphicon glyphicon-ok-sign"></td>
                    <td>max execution time 300s</td>
                  </tr>
                  <tr class="limit_table">
                    <td class=" glyphicon glyphicon-ok-sign"></td>
                    <td>php memory limit 1024 MB</td>
                  </tr>  
                </tbody>
              </table>
            </div>
            <div class="col-md-4">
              <table class="table">
                <tbody>
                  <tr class="limit_table">
                    <td class=" glyphicon glyphicon-ok-sign bg-info"></td>
                    <td>post max size 128 MB</td>
                  </tr>
                  <tr class="limit_table success">
                    <td class=" glyphicon glyphicon-ok-sign"></td>
                    <td>Upload max filesize 128 MB</td>
                  </tr>
                  <tr class="limit_table">
                    <td class=" glyphicon glyphicon-ok-sign"></td>
                    <td>max input vars 2500</td>
                  </tr>  
                </tbody>
              </table>
            </div>
          </div>
          <hr>
        </div>
      </div>
    </section>
    
    <!-- Hosting Support -->
    <section class="hosting-support"> 
      <div class="container-fluid text-center">
        <h3>Semua Paket Hosting Sudah Termasuk</h3>
        <br>
        <div class="row slideanim">
          <div class="col-sm-4">
            <img src="style/assets/svg/icon PHP Hosting_PHP Semua Versi.svg">
            <h4>
              <b>PHP Semua Versi</b>
            </h4>
            <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7 <br>Ubah sesuka anda! </p>
          </div>
          <div class="col-sm-4">
            <img src="style/assets/svg/icon PHP Hosting_My SQL.svg">
            <h4>
              <b>Mysql Versi 5.6</b>
            </h4>
            <p>Nikmati Mysql versi terbaru, tercepat dan <br> kaya akan fitur</p>
          </div>
          <div class="col-sm-4">
            <img src="style/assets/svg/icon PHP Hosting_CPanel.svg">
            <h4>
              <b>Panel Hosting cPanel</b>
            </h4>
            <p>Kelola website dengan panel canggih yang <br> familiar di hati anda</p>
          </div>
        </div>
        <br><br>
        <div class="row slideanim">
          <div class="col-sm-4">
            <img src="style/assets/svg/icon PHP Hosting_garansi uptime.svg">
            <h4>
              <b>Garansi Uptime 99.9%</b>
            </h4>
            <p>Data center yang mendukung kelangsungan <br> website Anda 24/7</p>
          </div>
          <div class="col-sm-4">
            <img src="style/assets/svg/icon PHP Hosting_InnoDB.svg">
            <h4>
              <b>Database InnoDB Unlimited</b>
            </h4>
            <p>Jumlah dan ukuran database yang tumbuh <br> sesuai dengan kebutuhan Anda</p>
          </div>
          <div class="col-sm-4">
            <img src="style/assets/svg/icon PHP Hosting_My SQL remote.svg">
            <h4 style="color:#303030;">
              <b>Wildcard Remote Mysql</b>
            </h4>
            <p>Mendukung s/d 25 max_user_connections<br>dan 100 max_connection</p>
          </div>
        </div>
        <hr>
        <br>
      </div>
    </section>

    <!-- Hosting Framework -->
    <section class="hosting-framework"> 
      <div class="container">
        <div class="row">
          <div class="text-center">
            <h3>Mendukung Penuh Framework Laravel</h3>
          </div><br>
          <div class="col-sm-6 col-md-6">
            <p>Tak perlu menggunakan dedicated server atauoun VPS<br>yang mahal. Layanan PHP hosting murah kami<br>mendukung penuh framework favorit Anda</p>
            <div class="text-left"><br>
              <table class="table-responsive">       
                <tbody>
                  <tr>
                    <td class=" glyphicon glyphicon-ok-sign"></td>
                    <td> Install Laravel <strong>1 klik </strong>dengan softacolous Installer</td>
                  </tr>      
                  <tr class="success">
                    <td class=" glyphicon glyphicon-ok-sign"></td>
                    <td> Mendukung exstensi <strong>PHP MCrypt, phar, mbstring, json,</strong> dan <strong>fileinfo.</strong></td>
                  </tr>
                  <tr>
                    <td class=" glyphicon glyphicon-ok-sign"></td>
                    <td> Tersedia <strong>Composer</strong>  dan <strong>SSH</strong>  untuk menginstal packages piihan Anda.</td>
                  </tr>
                  <tr class="success">
                    <td><h5><b>Nb.</td>
                    <td> <h5>Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</td>
                  </tr>
                </tbody>
              </table>
              </br>
              <button type="button" class="btn btn-primary btn-lg">Piih Hosting Anda</button>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">  
            <img src="style/assets/svg/illustration banner support laravel hosting.svg">
          </div>
        </div>
      </div>
    </section>
    
    <!-- Modul Hosting -->
    <section class="modul-hosting"> 
      <div class="container text-center slideanim">
        <div class="row">
          <div class="col-sm-12">
            <h3 style="color: #4d4d4d !important;">Modul lengkap untuk menjalankan Aplikasi PHP Anda</h3><br>
            <div class="col-md-3" align="left">
              <table class="table">
                <tbody>
                  <tr>  
                    <td>IcePHP</td>
                  </tr>      
                  <tr>
                    <td>apc</td>
                  </tr>
                  <tr>
                    <td>apcu</td>
                  </tr>  
                  <tr>
                    <td>apm</td>
                  </tr>
                  <tr>
                    <td>ares</td>                    
                  </tr>  
                  <tr>
                    <td>bcmath</td>
                  </tr>
                  <tr>
                    <td>bcompiler</td>
                  </tr>
                  <tr>
                    <td>big_int</td>
                  </tr>
                  <tr>
                    <td>bitset</td>
                  </tr>
                  <tr>
                    <td>bloomy</td>
                  </tr>
                  <tr>
                    <td>bz2_filter</td>
                  </tr>
                  <tr>
                    <td>clamav</td>
                  </tr>
                  <tr>
                    <td>coin_acceptor</td>
                  </tr>
                  <tr> 
                    <td>crack</td>
                  </tr>
                  <tr>
                    <td>dba</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-3" align="left">
              <table class="table">   
                <tbody>
                <tr>
                    <td>http</td>
                  </tr>      
                  <tr>
                    <td>huffman</td>
                  </tr>
                  <tr>
                    <td>idn</td>
                  </tr>  
                  <tr>
                    <td>igbinary</td>
                  </tr>
                  <tr>                    
                    <td>imagick</td>
                  </tr>  
                  <tr>
                    <td>imap</td>
                  </tr>
                  <tr>
                    <td>inclued</td>
                  </tr>
                  <tr>
                    <td>inotify</td>
                  </tr>
                  <tr>
                    <td>interbase</td>
                  </tr>
                  <tr>
                    <td>intl</td>
                  </tr>
                  <tr>
                    <td>ioncube_loader</td>
                  </tr>
                  <tr>
                    <td>ioncube_loader_4</td>
                  </tr>
                  <tr>
                    <td>jsmin</td>
                  </tr>
                  <tr> 
                    <td>json</td>
                  </tr>
                  <tr>
                    <td>ldap</td>
                  </tr>  
                </tbody>
              </table>
            </div>
            <div class="col-md-3" align="left"> 
              <table class="table">  
                <tbody>
                  <tr>                  
                    <td>nd_pdo_mysql</td>
                  </tr>      
                  <tr>
                    <td>oauth</td>
                  </tr>
                  <tr>
                    <td>oci8</td>
                  </tr>  
                  <tr>
                    <td>odbc</td>
                  </tr>
                  <tr>
                    <td>opcache</td>
                  </tr>  
                  <tr>
                    <td>pdf</td>
                  </tr>
                  <tr>
                    <td>pdo</td>
                  </tr>
                  <tr>
                    <td>pdo_dblib</td>
                  </tr>
                  <tr>
                    <td>pdo_firebird</td>
                  </tr>
                  <tr>
                    <td>pdo_mysql</td>
                  </tr>
                  <tr>
                    <td>pdo_odbc</td>
                  </tr>
                  <tr>
                    <td>pdo_pgsql</td>
                  </tr>
                  <tr>
                    <td>pdo_sqlite</td>
                  </tr>
                  <tr> 
                    <td>pgsql</td>
                  </tr>
                  <tr>
                    <td>phalcon</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-3" align="left">
              <table class="table"> 
                <tbody>
                  <tr>
                    <td>stats</td>
                  </tr>      
                  <tr>
                    <td>stem</td>
                  </tr>
                  <tr>
                    <td>stomp</td>
                  </tr>  
                  <tr>
                    <td>suhosin</td>
                  </tr>
                  <tr>
                    <td>sybase_ct</td>
                  </tr>  
                  <tr>
                    <td>sysvmsg</td>
                  </tr>
                  <tr>
                    <td>sysvsem</td>
                  </tr>
                  <tr>
                    <td>sysvshm</td>
                  </tr>
                  <tr>
                    <td>tidy</td>
                  </tr>
                  <tr>
                    <td>timezonedb</td>
                  </tr>
                  <tr>
                    <td>trader</td>
                  </tr>
                  <tr>
                    <td>translit</td>
                  </tr>
                  <tr>
                    <td>uploadprogress</td>
                  </tr>
                  <tr> 
                    <td>uri_template</td>
                  </tr>
                  <tr>
                    <td>uuid</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div><br>
        <button type="button" class="btn btn-primary btn-lg">Selengkapnya</button>
      </div>
    </section>

    <!-- Linux Hosting -->
    <section class="linux-hosting"> 
      <div class="container">
        <div class="row">
          <div class="text-left"><h2 style="color: #4d4d4d !important;">Linux Hosting yang stabil <br>dengan Teknologi LVE</h2></div><br>
          <div class="col-sm-3 col-md-6">
            <p align="justify" >SuperMicro <b>Intel Xeon 24-Cores</b>server dengan RAM <b>128 GB</b> dan teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk kecepatan <b>Mysql</b> dan caching. Apache load balancer berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>Raid-10</b> protection dan auto backup untuk keamanan website PHP anda.</p>
            <div class="text-left"><br>
              <button type="button" class="btn btn-primary btn-lg">Piih Hosting Anda</button>
            </div>
          </div>
          <div class="col-sm-9 col-md-6 slideanim">
            <img src="style/assets/images/Image support.png">
          </div>
        </div>
      </div>
    </section>

    <!-- Share -->
    <section class="footer-linux "> 
      <div class="container">
        <div class="col-md-6">
          <h5>Bagikan jika Anda menyukai halaman ini</h5>
        </div>
      </div>
    </section>

    <!-- Bantuan -->
    <section class="footer-bantuan"> 
      <div class="container">
        <div class="col-md-9 col-ms-9 col-sm-12 col-xs-12">
          <span>Perlu <span>BANTUAN</span> ? Hubungi Kami : <strong>0274-5305505</strong></span>
        </div>
        <div class="col-md-3 col-ms-3 col-sm-12 col-xs-12">
          <div class="float-left text-right">
            <button type="button" class="btn btn-primary btn-lg "> Live Chat </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <section class="footer-menu"> 
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12"><h3>HUBUNGI KAMI</div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12"><h3>LAYANAN</div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12"><h3>SERVICE HOSING</div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12"><h3>TUTORIAL</div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12 text-left">
            <a href="tel:+62742920443">0274-2920443</a>
            <p> Senin - Minggu<br>24 Jam Non Stop</p><br>
            <p>Jl. Selokan Mataram Monjali<br>
                Karangjati MT I/304<br>
                RT019 RW 042<br>
                Sinduadi, Mlati, Sleman<br>
                Daerah Istimewa Yogyakarta <br>55284</p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
            <ul class="nav navbar-link">
              <a href="#"> <li>Domain</li></a>
              <a href="#"> <li>Shared Hosting</li></a>
              <a href="#"><li>Cloud VPS Hosting</li></a>
              <a href="#"> <li>Transfer Hosting</li></a>
              <a href="#"> <li>Web Builder</li></a>
              <a href="#"> <li>Keamanan SSL/HTTPS</li></a>
              <a href="#"> <li>Jasa Pembuatan Website</li></a>
              <a href="#"> <li>Program Affiliasi</li></a>
              <a href="#"> <li>WHois</li></a>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
            <ul class="nav navbar-link">
              <a href="#"> <li>Hosting Murah</li></a>
              <a href="#"> <li>Hosting Indonesia</li></a>
              <a href="#"> <li>Hosting Singapura SG</li></a>
              <a href="#"> <li>Hosting PHP</li></a>
              <a href="#"> <li>Hosting Wordpress</li></a>
              <a href="#"> <li>Hosting Laravel</li></a>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
            <ul class="nav navbar-link">
              <a href="#"> <li>knowledgebase</li></a>
              <a href="#"> <li>Blog</li></a>
              <a href="#"> <li>Cloud VPS Hosting</li></a>
              <a href="#"> <li>Cara Pembayaran</li></a>      
            </ul>
          </div>
        </div>
        <div class="row">    
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12"><h3>TENTANG KAMI</div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12"><h3>KENAPA PILIH NIAGAHOSTER?</div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12"><h3>NEWSLETTER</div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12"><h3></div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12 text-left">
            <ul class="nav navbar-link">
              <a href="#"> <li>Tim Niagahoster</li></a>
              <a href="#"> <li>Karir</li></a>
              <a href="#"><li>Events</li></a>
              <a href="#"> <li>Penawaran & Promo Spesial</li></a>
              <a href="#"> <li>Kontak Kami</li></a>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
            <ul class="nav navbar-link">
              <a href="#"> <li>Support Terbaik</li></a>
              <a href="#"> <li>Garansi Harga Termurah</li></a>
              <a href="#"><li>Domain Gratis Selamanya</li></a>
              <a href="#"> <li>Datacenter Hosting Terbaik</li></a>
              <a href="#"> <li>Review Pelanggan</li></a>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
            <form action="" id="newsletter_submit" class="pull-left">
              <div class="input-group">
                  <input class="form-control email_newsletter" name="email" id="samplees" value="" placeholder="Email" type="text">
                  <span class="input-group-btn">
                  <button class="btn btn-info btn2" type="submit" style="border-radius: 40px; padding: 8px 10px">Berlangganan</button>
                  </span>
              </div>
            </form>
            <br>
            <span>Dapatkan promo dan konten menarik dari penyedia Hosting Anda </span>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
            <div class="footer-second-box">
                <ul class="list-inline">
                    <li>
                        <a href="#" class="box-facebook">
                            <i class="fa fa-facebook round-box-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="socmed-box">
                            <i class="fa fa-twitter round-box"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="box-google-plus">
                            <i class="fa fa-google-plus round-box-google-plus"></i>
                        </a>
                    </li>
                </ul>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-xs-12">
            <h5><b>PEMBAYARAN</h5>
            <div class="col-md-1 col-sm-6 col-xs-4 col-xxs-4"> <a href="#"> <img src="images/logo-bca-bordered.svg"></a> </div>
            <div class="col-md-1 col-sm-6 col-xs-4 col-xxs-4"> <a href="#"> <img src="images/mandiriclickpay.svg"></a> </div>
            <div class="col-md-1 col-sm-6 col-xs-4 col-xxs-4"> <a href="#"> <img src="images/logo-bni-bordered.svg"></a> </div>
            <div class="col-md-1 col-sm-6 col-xs-4 col-xxs-4"> <a href="#"> <img src="images/Visa.svg"></a> </div>
            <div class="col-md-1 col-sm-6 col-xs-4 col-xxs-4"> <a href="#"> <img src="images/Mastercard.svg"></a> </div>
            <div class="col-md-1 col-sm-6 col-xs-4 col-xxs-4"> <a href="#"> <img src="images/atmbersama.svg"></a> </div>
            <div class="col-md-1 col-sm-6 col-xs-4 col-xxs-4"> <a href="#"> <img src="images/permatabank.svg"></a> </div>            
            <div class="col-md-1 col-sm-6 col-xs-4 col-xxs-4"> <a href="#"> <img src="images/prima.svg"></a> </div>
            <div class="col-md-1 col-sm-6 col-xs-4 col-xxs-4"> <a href="#"> <img src="images/Alto.svg"></a> </div>
          </div>
          <br>
          <p style="color: #8d8d8d">Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</p>
        </div>
      </div>  
    </div>
  </div>
</section>

    <!-- copyright -->
    <section class="copyright_info"> 
      <div class="container">
        <div class="row">
        <hr>
          <div class="col-md-8">
            Copyright ©2017 Niagahoster | Hosting powered by PHP7,
            CloudLinux, CloudFlare, BitNinja and 
            <a href="#" style="color: #d7d7d7;">DC DCI-Indonesia</a> cloud<br>
            <a href="#" style="color: #d7d7d7;">VPS Murah</a> powered by Webuzo
            Softaculous, Intel SSD and cloud computing technology
          </div>
          <div class="col-md-4"> </div>
          <div class="col-md-8 text-center"></div>
          <div class="col-md-4">
            <span>
              <a href="#" style="color: #d7d7d7;">Syarat dan Ketentuan </a>|
            </span>
            <span>  
              <a href="#" style="color: #d7d7d7;">Kebijakan Privasi</a>
            </span>
          </div>
        </div>
      </div>
    </section>

    <script src="./style/js/jquery.min.js"></script>
    <script src="./style/js/bootstrap.min.js"></script>
    <script src="./style/js/angular.min.js"></script>
    <script src="./style/js/app.js"></script>
    <script>
    $(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){
      
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
      
      $(window).scroll(function() {
        $(".slideanim").each(function(){
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
        });
      });
    })
    </script>
  </body>
</html>