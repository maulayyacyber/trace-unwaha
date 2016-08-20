<?php
//session start
session_start();
	//session umpan balik
	$_SESSION['kesulitan'] 				= $_POST['kesulitan'];
	$_SESSION['kemampuan_keahlian'] 	= $_POST['kemampuan_keahlian'];
	$_SESSION['kemampuan_kerjasama'] 	= $_POST['kemampuan_kerjasama'];
	$_SESSION['kemampuan_komunikasi'] 	= $_POST['kemampuan_komunikasi'];
	$_SESSION['kemampuan_moral'] 		= $_POST['kemampuan_moral'];
	$_SESSION['kemampuan_bing'] 		= $_POST['kemampuan_bing'];
	$_SESSION['pengembangan_diri'] 		= $_POST['pengembangan_diri'];
	$_SESSION['kurikulum'] 				= $_POST['kurikulum'];
	$_SESSION['saran']	   				= $_POST['saran'];
/* include library environment */
	include('library/environment.php');

/* include library connection */
	include('library/database.php');

	if($_SESSION['kerja'] == 'a')
	{
		//query	step 2 A
		$query = "INSERT INTO tbl_trace (prodi,nim, nama, tahun_lulus,no_hp,email,alamat,status_kerja,menunggu_kerja,nama_perusahaan,bentuk_perusahaan,bidang_pekerjaanIT,bidang_pekerjaannonIT,jabatan_pertama,income_pertama,kesulitan_pertama,kemampuan_keahlian,kemampuan_kerjasama,kemampuan_komunikasi,kemampuan_moral,kemampuan_bing,pengembangan_diri,kurikulum,saran)

		VALUES 

		('{$_SESSION['prodi']}','{$_SESSION['nim']}','{$_SESSION['nama']}','{$_SESSION['lulus']}','{$_SESSION['hp']}','{$_SESSION['email']}','{$_SESSION['alamat']}','{$_SESSION['kerja']}','{$_SESSION['lamanunggukerja']}','{$_SESSION['namaperusahaan']}','{$_SESSION['bentukperusahaan']}','{$_SESSION['bidangpekerjaanIT']}','{$_SESSION['bidangpekerjaannonIT']}','{$_SESSION['jabatan']}','{$_SESSION['income']}','{$_SESSION['kesulitan']}','{$_SESSION['kemampuan_keahlian']}','{$_SESSION['kemampuan_kerjasama']}','{$_SESSION['kemampuan_komunikasi']}','{$_SESSION['kemampuan_moral']}','{$_SESSION['kemampuan_bing']}','{$_SESSION['pengembangan_diri']}','{$_SESSION['kurikulum']}','{$_SESSION['saran']}')";

		if ($connect->query($query) === TRUE) {
			//destroy session
			session_destroy();
			//redirect ke home
			echo "<script>alert('Data Berhasil Disimpan ! terima kasih atas partisipasi anda');
		    document.location='home'
		    </script>";
		} else {
			//gagal simpan data
			echo "<script>alert('Register Gagal! Please Chek Your Query ');
		    document.location='home'
		    </script>";
		}

	}elseif($_SESSION['kerja'] == 'b'){

		//query	step 2 B	
		$query = "INSERT INTO tbl_trace(prodi,nim,nama,tahun_lulus,no_hp,email,alamat,status_kerja,jenis_perusahaan,bidang_perusahaan,waktu_mendirikan,jumlah_karyawan,aset,kesulitan_pertama,kemampuan_keahlian,kemampuan_kerjasama,kemampuan_komunikasi,kemampuan_moral,kemampuan_bing,pengembangan_diri,kurikulum,saran)

		VALUES 

		('{$_SESSION['prodi']}','{$_SESSION['nim']}','{$_SESSION['nama']}','{$_SESSION['lulus']}','{$_SESSION['hp']}','{$_SESSION['email']}','{$_SESSION['alamat']}','{$_SESSION['kerja']}','{$_SESSION['jenisperusahaan']}','{$_SESSION['bidangperusahaan']}','{$_SESSION['mendirikanusaha']}','{$_SESSION['jumlahkaryawan']}','{$_SESSION['aset']}','{$_SESSION['kesulitan']}','{$_SESSION['kemampuan_keahlian']}','{$_SESSION['kemampuan_kerjasama']}','{$_SESSION['kemampuan_komunikasi']}','{$_SESSION['kemampuan_moral']}','{$_SESSION['kemampuan_bing']}','{$_SESSION['pengembangan_diri']}','{$_SESSION['kurikulum']}','{$_SESSION['saran']}')";

		if ($connect->query($query) === TRUE) {
			//destroy session
			session_destroy();
			//redirect ke home
			echo "<script>alert('Data Berhasil Disimpan ! terima kasih atas partisipasi anda');
		    document.location='home'
		    </script>";
		} else {
			//gagal simpan data
			echo "<script>alert('Register Gagal! Please Chek Your Query ');
		    document.location='home'
		    </script>";
		}

	}else{	

		//query		umpan balik
		$query = "INSERT INTO tbl_trace (prodi,nim, nama, tahun_lulus,no_hp,email,alamat,status_kerja,kesulitan_pertama,kemampuan_keahlian,kemampuan_kerjasama,kemampuan_komunikasi,kemampuan_moral,kemampuan_bing,pengembangan_diri,kurikulum,saran)

		VALUES 

		('{$_SESSION['prodi']}','{$_SESSION['nim']}','{$_SESSION['nama']}','{$_SESSION['lulus']}','{$_SESSION['hp']}','{$_SESSION['email']}','{$_SESSION['alamat']}','{$_SESSION['kerja']}','{$_SESSION['kesulitan']}','{$_SESSION['kemampuan_keahlian']}','{$_SESSION['kemampuan_kerjasama']}','{$_SESSION['kemampuan_komunikasi']}','{$_SESSION['kemampuan_moral']}','{$_SESSION['kemampuan_bing']}','{$_SESSION['pengembangan_diri']}','{$_SESSION['kurikulum']}','{$_SESSION['saran']}')";

		if ($connect->query($query) === TRUE) {
			//destroy session
			session_destroy();
			//redirect ke home
			echo "<script>alert('Data Berhasil Disimpan ! terima kasih atas partisipasi anda');
		    document.location='home'
		    </script>";
		} else {
			//gagal simpan data
			echo "<script>alert('Register Gagal! Please Chek Your Query ');
		    document.location='home'
		    </script>";
		}		
	}

?>