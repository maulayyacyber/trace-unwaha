<?php include("library/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php print $title ?> - <?php print $prodi ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="author" content="Fika Ridaul Maulayya">
  <meta name="robots" content="no-cache">
  <meta name="description" content="Tracer Study UNWAHA adalah pendataan alumni untuk akredetasi Universitas">
  <meta name="keywords" content="UNWAHA, Universitas KH. A. Wahab Hasbullah, FTI, FAI, FE, FP, FIP, Fakultas Teknologi Informasi, Fakultas Agama Islam, Fakultas Pertanian, Fakultas Pendidikan, Fakultas Ilmu Pendidikan">
  <meta property="og:url" content="http://alumni.unwaha.com/">
  <meta property="og:site_name" content="Tracer Study UNWAHA">
  <meta property="og:title" content="Tracer Study UNWAHA - Universitas KH. A. Wahab Hasbullah">
  <meta property="og:description" content="Tracer Study UNWAHA adalah pendataan alumni untuk akredetasi Universitas">
  <link rel="icon" href="<?php print $config['base_url'] ?>images/favicon.jpg">
  <!-- style -->
	<link rel="stylesheet" type="text/css" href="<?php print $config['base_url'] ?>css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php print $config['base_url'] ?>css/sticky-footer-navbar.css" />
  <link rel="stylesheet" type="text/css" href="<?php print $config['base_url'] ?>css/line-icons/line-icons.css" />
	<link rel="stylesheet" type="text/css" href="<?php print $config['base_url'] ?>css/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?php print $config['base_url'] ?>css/jquery-ui.css">
  <link rel="stylesheet" href="<?php print $config['base_url'] ?>css/custom.css">
  <!-- core js -->
	<script src="<?php print $config['base_url'] ?>js/jquery.min.js"></script>
  <script src="<?php print $config['base_url'] ?>js/jquery-ui.js"></script>
	<script src="<?php print $config['base_url'] ?>js/bootstrap.min.js"></script>
	<script src="<?php print $config['base_url'] ?>js/custom.js"></script>	 
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);border-color: #5cb85c;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php print $config['base_url'] ?>home"><i class="fa fa-home"></i> Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-graduation-cap"></i>  Fakultas Agama Islam <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php print $config['base_url'] ?>fakultas-agama-islam/pendidikan-agama-islam"><i class="icon-arrow-right"></i> Pendidikan Agama Islam</a></li>
                  <li><a href="<?php print $config['base_url'] ?>fakultas-agama-islam/pendidikan-bahasa-arab"><i class="icon-arrow-right"></i> Pendidikan Bahasa Arab</a></li>
                  <li><a href="<?php print $config['base_url'] ?>fakultas-agama-islam/ekonomi-syariah"><i class="icon-arrow-right"></i> Ekonomi Syariah</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-graduation-cap"></i>  Fakultas Teknologi Informasi <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php print $config['base_url'] ?>fakultas-teknologi-informasi/sistem-informasi"><i class="icon-arrow-right"></i> Sistem Informasi</a></li>
                  <li><a href="<?php print $config['base_url'] ?>fakultas-teknologi-informasi/teknik-informatika"><i class="icon-arrow-right"></i> Teknik Informatika</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-graduation-cap"></i>  Fakultas Pertanian <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php print $config['base_url'] ?>fakultas-pertanian/agribisnis"><i class="icon-arrow-right"></i> Agribisnis</a></li>
                  <li><a href="<?php print $config['base_url'] ?>fakultas-pertanian/agroekoteknologi"><i class="icon-arrow-right"></i> Agroekoteknologi</a></li>
                  <li><a href="<?php print $config['base_url'] ?>fakultas-pertanian/teknik-pertanian"><i class="icon-arrow-right"></i> Teknik Pertanian</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-graduation-cap"></i>  Fakultas Ilmu Pendidikan <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php print $config['base_url'] ?>fakultas-ilmu-pendidikan/pendidikan-biologi"><i class="icon-arrow-right"></i> Pendidikan Biologi</a></li>
                  <li><a href="<?php print $config['base_url'] ?>fakultas-ilmu-pendidikan/pendidikan-fisika"><i class="icon-arrow-right"></i> Pendidikan Fisika</a></li>
                  <li><a href="<?php print $config['base_url'] ?>fakultas-ilmu-pendidikan/pendidikan-matematika"><i class="icon-arrow-right"></i> Pendidikan Matematika</a></li>
                  <li><a href="<?php print $config['base_url'] ?>fakultas-ilmu-pendidikan/pendidikan-bahasa-inggris"><i class="icon-arrow-right"></i> Pendidikan Bahasa Inggris</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-graduation-cap"></i>  Fakultas Ekonomi <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php print $config['base_url'] ?>fakultas-ekonomi/manajemen"><i class="icon-arrow-right"></i> Manajemen</a></li>
                </ul>
              </li>                            
        </ul>          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

