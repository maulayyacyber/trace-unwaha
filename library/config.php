<?php
/*
@package : Library Cofig Native PHP
@author  : Fika Ridaul Maulayya | pondokkode.com
*/


/* start config sistem */

$config = array (

	/* config url */
	'base_url' => "http://".$_SERVER['HTTP_HOST'].
				str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']),
	

	/* config homepage */
	'welcome'  => array(
					'title' 	   =>'TRACER STUDY UNWAHA',
					'descriptions' =>'Tujuan tracer studi alumni UNWAHA adalah untuk melengkapi dokumen akreditasi',
					'universitas'  =>'Universitas KH. A. Wahab Hasbullah.'
	),

	/* config fakultas agama islam */
	'fakultas-agama-islam'	   	   => array(
										'PAI' 			=>'Pendidikan Agama Islam',
										'PBA'  			=>'Pendidikan Bahasa Arab',
										'ES'			=>'Ekonomi Syariah'
	),
	/* config fakultas teknologi informasi */
	'fakultas-teknologi-informasi' => array(
										'SI'			=>'Sistem Informasi',
										'TI'			=>'Teknik Informatika'
	),
	/* config fakultas pertanian */
	'fakultas-pertanian'			=> array(
										'agbisnis'		=>'Agribisnis',
										'agteknologi'	=>'Agroekoteknologi',
										'TP'			=>'Teknik Pertanian'
	),
	/* config fakultas ilmu pendidikan */
	'fakultas-ilmu-pendidikan'		=> array(
										'PB'			=>'Pendidikan Biologi',
										'PF'			=>'Pendidikan Fisika',
										'PM'			=>'Pendidikan Fisika',
										'PBI'			=>'Pendidikan Bahasa Inggris'
	),
	/* config fakultas ekonomi */
	'fakultas-ekonomi'				=> array(
										'manajemen'		=>'Manajemen'
	)
);

/* end config sistem */

/* start config angket */ 
if($_GET['ref'] == "home"){
	/* title */
	$title 		  = 'Home';
	/* judul */
	$judul		  = 'Selamat Datang Di Tracer Study UNWAHA';
	/* descriptions */
	$descriptions = 'Tujuan tracer studi alumni UNWAHA adalah untuk melengkapi dokumen akreditasi.';
	/* universitas */
	$universitas  = 'Universitas KH. A.Wahab Hasbullah.';
	/* prodi */
	$prodi 		  = 'Tracer Study UNWAHA';
	
	}elseif($_GET['ref'] == "step-2-a"){
		/* title */
		$title = 'Angket Step 2 A';
		/* prodi */
		$prodi = 'Universitas KH. A.Wahab Hasbullah';

	}elseif($_GET['ref'] == "step-2-b"){
		/* title */
		$title = 'Angket Step 2 B';
		/* prodi */
		$prodi = 'Universitas KH. A.Wahab Hasbullah';

	}elseif($_GET['ref'] == "umpan-balik"){
		/* title */
		$title = 'Umpan Balik';
		/* prodi */
		$prodi = 'Universitas KH. A.Wahab Hasbullah';
	
	}elseif($_GET['ref'] == "pendidikan-agama-islam"){
		/* kode prodi */
		$hidden 	= '0101';
		/* fakultas */
		$title 		= 'Fakultas Agama Islam';
		/* prodi */
		$prodi		= $config['fakultas-agama-islam']['PAI'];

	}elseif($_GET['ref'] == "pendidikan-bahasa-arab"){
		/* kode prodi */
		$hidden 	= '0102';
		/* fakultas */
		$title 		= 'Fakultas Agama Islam';
		/* prodi */
		$prodi		= $config['fakultas-agama-islam']['PBA'];		

	}elseif($_GET['ref'] == "ekonomi-syariah"){
		/* kode prodi */
		$hidden 	= '0103';
		/* fakultas */
		$title 		= 'Fakultas Agama Islam';
		/* prodi */
		$prodi		= $config['fakultas-agama-islam']['ES'];		
	
	}elseif($_GET['ref'] == "sistem-informasi"){
		/* kode prodi */
		$hidden 	= '0205';
		/* fakultas */
		$title 		= 'Fakultas Teknologi Informasi';
		/* prodi */
		$prodi		= $config['fakultas-teknologi-informasi']['SI'];		

	}elseif($_GET['ref'] == "teknik-informatika"){
		/* kode prodi */
		$hidden 	= '0204';
		/* fakultas */
		$title 		= 'Fakultas Teknologi Informasi';
		/* prodi */
		$prodi		= $config['fakultas-teknologi-informasi']['TI'];		

	}elseif($_GET['ref'] == "agribisnis"){
		/* kode prodi */
		$hidden 	= '0306';
		/* fakultas */
		$title 		= 'Fakultas Pertanian';
		/* prodi */
		$prodi		= $config['fakultas-pertanian']['agbisnis'];		

	}elseif($_GET['ref'] == "agroekoteknologi"){
		/* kode prodi */
		$hidden 	= '0307';
		/* fakultas */
		$title 		= 'Fakultas Pertanian';
		/* prodi */
		$prodi		= $config['fakultas-pertanian']['agteknologi'];		

	}elseif($_GET['ref'] == "teknik-pertanian"){
		/* kode prodi */
		$hidden 	= '0309';
		/* fakultas */
		$title 		= 'Fakultas Pertanian';
		/* prodi */
		$prodi		= $config['fakultas-pertanian']['TP'];		

	}elseif($_GET['ref'] == "pendidikan-biologi"){
		/* kode prodi */
		$hidden 	= '0410';
		/* fakultas */
		$title 		= 'Fakultas Ilmu Pendidikan';
		/* prodi */
		$prodi		= $config['fakultas-ilmu-pendidikan']['PB'];		

	}elseif($_GET['ref'] == "pendidikan-fisika"){
		/* kode prodi */
		$hidden 	= '0411';
		/* fakultas */
		$title 		= 'Fakultas Ilmu Pendidikan';
		/* prodi */
		$prodi		= $config['fakultas-ilmu-pendidikan']['PF'];		

	}elseif($_GET['ref'] == "pendidikan-matematika"){
		/* kode prodi */
		$hidden 	= '0412';
		/* fakultas */
		$title 		= 'Fakultas Ilmu Pendidikan';
		/* prodi */
		$prodi		= $config['fakultas-ilmu-pendidikan']['PM'];		

	}elseif($_GET['ref'] == "pendidikan-bahasa-inggris"){
		/* kode prodi */
		$hidden 	= '0413';
		/* fakultas */
		$title 		= 'Fakultas Ilmu Pendidikan';
		/* prodi */
		$prodi		= $config['fakultas-ilmu-pendidikan']['PBI'];		

	}elseif($_GET['ref'] == "manajemen"){
		/* kode prodi */
		$hidden 	= '0514';
		/* fakultas */
		$title 		= 'Fakultas Ekonomi';
		/* prodi */
		$prodi		= $config['fakultas-ekonomi']['manajemen'];		

	}elseif($_GET['ref'] == "responden"){
		/* kode prodi */
		//$hidden 	= '0514';
		/* fakultas */
		$title 		= 'Responden';
		/* prodi */
		$prodi		= 'Tracer Study UNWAHA';		

	}elseif($_GET['ref'] == "responden-pendidikan-agama-islam"){
			$title 		= 'Responden';
        	$prodi		= $config['fakultas-agama-islam']['PAI'];
        	$kode_prodi = '0101';

        }elseif($_GET['ref'] == "responden-pendidikan-bahasa-arab"){
        	$title 		= 'Responden';
        	$prodi		= $config['fakultas-agama-islam']['PBA'];
        	$kode_prodi = '0102';

        }elseif($_GET['ref'] == "responden-ekonomi-syariah"){
        	$title 		= 'Responden Ekonomi Syariah';
        	$prodi		= $config['fakultas-agama-islam']['ES'];
        	$kode_prodi = '0103';

        }elseif($_GET['ref'] == "responden-sistem-informasi"){
        	$title 		= 'Responden';
        	$prodi		= $config['fakultas-teknologi-informasi']['SI'];
        	$kode_prodi = '0205';	

        }elseif($_GET['ref'] == "responden-teknik-informatika"){
 			$title		= 'Responden';
        	$prodi		= $config['fakultas-teknologi-informasi']['TI'];
        	$kode_prodi = '0204';

        }elseif($_GET['ref'] == "responden-agribisnis"){
            $title		= 'Responden';
        	$prodi		= $config['fakultas-pertanian']['agbisnis'];
        	$kode_prodi = '0306';

        }elseif($_GET['ref'] == "responden-agreokoteknologi"){
            $title		= 'Responden';
        	$prodi		= $config['fakultas-pertanian']['agteknologi'];
        	$kode_prodi = '0307';

        }elseif($_GET['ref'] == "responden-teknik-pertanian"){
            $title		= 'Responden';
        	$prodi		= $config['fakultas-pertanian']['TP'];
        	$kode_prodi = '0309';

        }elseif($_GET['ref'] == "responden-pendidikan-biologi"){
            $title		= 'Responden';
        	$prodi		= $config['fakultas-ilmu-pendidikan']['PB'];
        	$kode_prodi = '0410';

        }elseif($_GET['ref'] == "responden-pendidikan-fisika"){
            $title		= 'Responden';
        	$prodi		= $config['fakultas-ilmu-pendidikan']['PF'];
        	$kode_prodi = '0411';

        }elseif($_GET['ref'] == "responden-pendidikan-matematika"){
            $title 		= 'Responden';
        	$prodi		= $config['fakultas-ilmu-pendidikan']['PM'];
        	$kode_prodi = '0412';

        }elseif($_GET['ref'] == "responden-pendidikan-bahasa-inggris"){
            $title 		= 'Responden';
        	$prodi		= $config['fakultas-ilmu-pendidikan']['PBI'];
        	$kode_prodi = '0413';

        }elseif($_GET['ref'] == "responden-manajemen"){
            $title 		= 'Responden';
        	$prodi		= $config['fakultas-ekonomi']['manajemen'];	
        	$kode_prodi = '0514';
        	
        }else{
		
		header("location:home");
}
/* end config angket */ 

?>