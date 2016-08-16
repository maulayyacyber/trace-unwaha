
	<header class="sb-page-header" style="padding-top: 60px;padding-bottom: 60px;text-align: left;font-size: 24px;padding: 30px 15px;color: rgba(255,255,255,.8);background-color: #26A65B;margin-bottom: 40px;font-size: 20px;background-image: url(<?php echo $config['base_url'] ?>images/bg.png);position: relative;">
		<div class="container">
			<p style="padding-top:60px;font-size:40px;color:#fff"><i class="fa fa-graduation-cap"></i> <?php print $title ?> </p>
			<p style="margin-left:65px;color:#fff"><i class="icon-book-open"></i> <?php print $prodi ?></p>
		</div>
	</header>	
	<div class="container">		
		<div class="col-md-12">			
	    <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
	      <div class="unwaha-padding panel-heading" style="color:#fff">Halaman <b>1</b> dari 3 halaman</div>
	      <div class="panel-body">
	      	<div class="register">
			<form action ="<?php print $config['base_url'] ?>simpan-step-1.php" method="POST" role="form">

			  <div class="form-group">
			    <label for="NIM">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; NIM<span style="color:red">*</span></span>
			    </label>
			    <input type="number" name="nim" maxlength="20" class="form-control" id="nim" placeholder="Masukan NIM" autocomplete="off" required>
			  </div>

			  <div class="form-group">
			    <label for="nama">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Nama<span style="color:red">*</span></span>
			    </label>
			    <input type="text" name="nama" maxlength="225" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" autocomplete="off" required>
			  </div>		  

			  <div class="form-group">
			    <label for="tahunlulus">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Tahun Lulus<span style="color:red">*</span></span>
			    </label>
			    <input type="text" name="tahunlulus" class="form-control" id="datepicker" placeholder="Tahun Lulus" autocomplete="off" required>
			  </div>			  

			  <div class="form-group">
			    <label for="hp">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; No. Hp<span style="color:red">*</span></span>
			    </label>
			    <input type="number" name="phoneHP" maxlength="12" class="form-control" id="hp" placeholder="Nomer HP" autocomplete="off" required>
			  </div>

			  <div class="form-group">
			    <label for="email">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Email<span style="color:red">*</span></span>
			    </label>
			    <input type="email" name="email" maxlength="100" class="form-control" id="email" placeholder="Masukan Email Yang Aktif" autocomplete="off" required>
			  </div>			  			  

			  <div class="form-group">
			    <label for="alamat">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Alamat<span style="color:red">*</span></span>
			    </label>
			    <textarea type="text" name="alamat" maxlength="255" rows="3" class="form-control" id="alamat" placeholder="Masukan Alamat Lengkap" autocomplete="off" required></textarea>
			  </div>

			  <div class="form-group">
			    <label for="questation">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Apakah saat ini Saudara/Saudari saat lulus anda bekerja pada<span style="color:red">*</span></span>
			    </label><br>
				<label class="radio-inline"><input type="radio" name="kerja" value="a" onchange='alasan()' id="kerjaA" checked>a). perusahaan/instansi</label>
				<label class="radio-inline"><input type="radio" name="kerja" value="b" onchange='alasan()' id="kerjaB" >b). Berwiraswasta/perusahaan mandiri</label>
				<label class="radio-inline"><input type="radio" name="kerja" value="c" onchange='alasan()' id="TidakKerja" >c). Tidak bekerja, mohon di jelaskan alasannya</label>
			  	<textarea type="text" name="kerja" rows="3" class="form-control" placeholder="Tuliskan alasannya. Hanya isi jika memilih C." autocomplete="off" style="margin-top:5px" disabled id="NoKerja"></textarea>
			  	<input type='hidden' value="<?php print $hidden; ?>" name="prodi" style="display:none">
			  </div>

			  <button type="submit" class="btn btn-default" style="float:right">Next Step <i class="fa fa-long-arrow-right"></i></button>
			</form>	
			Note : <span style="color:red">*</span>) Wajib Diisi 
			</div> 
	      </div>
	    </div>						
		</div>
	</div>