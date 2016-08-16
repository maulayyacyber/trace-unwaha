
	<header class="sb-page-header" style="padding-top: 60px;padding-bottom: 30px;text-align: left;font-size: 24px;padding: 30px 15px;color: rgba(255,255,255,.8);background-color: #26A65B;margin-bottom: 40px;font-size: 15px;background-image: url(images/bg.png);position: relative;">
	<div class="container" style="margin-top: 75px; margin-left:0px">
	    <div class="row">
	      <div class="col-md-4">
	        <ol class="breadcrumb" style="margin-left:90px">
	          <li><a href="/">Home</a></li>
	          <li class="active">Halaman 2A</li>
	        </ol>
	      </div>
	    </div>
	 </div> 
	</header>	
	<div class="container">		
		<div class="col-md-12">			
	    <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
	      <div class="unwaha-padding panel-heading" style="color:#fff">Halaman <b>2</b> dari 3 halaman</div>
	      <div class="panel-body">
	      	<div class="step-2B">
			<form action ="<?php print $config['base_url'] ?>simpan-step2A.php" method="POST" role="form">
			  
			  <div class="form-group">
			    <label for="jenisusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Lama waktu menunggu sampai mendapatkan pekerjaaan yang pertama kali sesudah lulus sarjana<span style="color:red">*</span> </span>
			    </label><br>

			  	<input type="number" name="menunggukerja" class="form-control" placeholder=" Dalam Bulan" autocomplete="off" style="margin-top:0px" id="nunggukerja">
			  </div>		  

			  <div class="form-group">
			    <label for="namaperusahaan">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Nama perusahaan / instansi saudara bekerja pertama kali tersebut<span style="color:red">*</span>  </span>
			    </label>
			    <input type="text" name="namaperusahaan" class="form-control" id="hp" placeholder="Nama Perusahaan Saudara Bekerja">
			  </div>

			  <div class="form-group">
			    <label for="jenisusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Bentuk perusahaan<span style="color:red">*</span> </span>
			    </label><br>
				<label class="radio-inline"><input type="radio" name="bentukperusahaan" value="Negeri" onchange='bentuk_perusahaan()' id="negeri" checked>Negeri</label>

				<label class="radio-inline"><input type="radio" name="bentukperusahaan" value="Swasta" onchange='bentuk_perusahaan()' id="swasta" >Swasta</label>

				<label class="radio-inline"><input type="radio" name="bentukperusahaan" value="BUMN" onchange='bentuk_perusahaan()' id="BUMN" >BUMN</label>

				<label class="radio-inline"><input type="radio" name="bentukperusahaan" onchange='bentuk_perusahaan()' value="0"id="bentuklainnya" >Lainnya...Sebutkan</label>

			  	<textarea type="text" name="bentukperusahaan" rows="3" class="form-control" placeholder="Tuliskan Bentuk Perusahaan Lainnya" style="margin-top:5px" disabled id="bentuklain"></textarea>

			  </div>

			  <div style="border-style: dotted;border-color:#66AE53">
			  <p>
			  <div class="form-group" style="margin-left:10px">
			    <label for="bidangpekerjaan">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Bidang Pekerjaan<span style="color:red">*</span> </span>
			    </label><br>
				<label class="radio-inline"><input type="radio" name="bidangpekerjaan" value="TI" id="kerjaTI" onchange="ti()" checked="checked">TI</label>

				<label class="radio-inline"><input type="radio" name="bidangpekerjaan" value="Non TI" id="kerjanonTI" onchange="ti()">Non TI</label>
			  </div>
		  			  
			  <div class="form-group" id="TI" style="display:block;margin-left:10px">
			    <label for="jenisusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Bila Jawaban No. 4 Teknologi Informasi, jenis perusahaannya adalah<span style="color:red">*</span> </span>
			    </label><br>
				<label class="radio-inline"><input type="radio" name="perusbidangIT" value="Kontraktor bidang TI" onchange='perusahaan_IT()' id="kontraktor" checked>Kontraktor bidang TI</label>

				<label class="radio-inline"><input type="radio" name="perusbidangIT" value="Konsultan TI" onchange='perusahaan_IT()' id="konsultan" >Konsultan TI</label>

				<label class="radio-inline"><input type="radio" name="perusbidangIT" value="Programmer " onchange='perusahaan_IT()' id="programmer" >Programmer </label>

				<label class="radio-inline"><input type="radio" name="perusbidangIT" value="Perusahaan bidang TI" onchange='perusahaan_IT()' id="perusahanbidanIT" >Perusahaan bidang TI</label>

				<label class="radio-inline"><input type="radio" name="perusbidangIT" value="Instansi Pemerintahan" onchange='perusahaan_IT()' id="instansipemerintahan" >Instansi Pemerintahan</label>

				<label class="radio-inline"><input type="radio" name="perusbidangIT" value="LSM 	bidang TI" onchange='perusahaan_IT()' id="lsmbidangit" >LSM bidang TI</label>

				<label class="radio-inline"><input type="radio" name="perusbidangIT" value="0" onchange='perusahaan_IT()' id="perusahaanIT" >Lainnya...Sebutkan</label>

			  	<textarea type="text" name="perusbidangIT2" rows="3" class="form-control" placeholder="Tuliskan alasannya. Hanya isi jika memilih Lainnya." autocomplete="off" style="margin-top:5px;width:99%" disabled id="ITperusahaan"></textarea>
			  </div>

			  <div class="form-group" id="nonTI" style="display:none;margin-left:10px">
			    <label for="jenisusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Bila jawaban No. 4  Non TI, jenis perusahaan <span style="color:red">*</span> </span>
			    </label><br>
				<label class="radio-inline"><input type="radio" name="perusbidangnonIT" value="BANK" onchange='perusahaan_nonIT()' id="bank" checked>BANK</label>

				<label class="radio-inline"><input type="radio" name="perusbidangnonIT" value="Perusahaan Manufaktur" onchange='perusahaan_nonIT()' id="perusmanufaktur" >Perusahaan Manufaktur</label>

				<label class="radio-inline"><input type="radio" name="perusbidangnonIT" value="Konsultan Keuangan" onchange='perusahaan_nonIT()' id="konsultankeuangan" >Konsultan Keuangan </label>

				<label class="radio-inline"><input type="radio" name="perusbidangnonIT" value="Kontraktor non TI" onchange='perusahaan_nonIT()' id="kontraktornonit" >Kontraktor non TI</label>

				<label class="radio-inline"><input type="radio" name="perusbidangnonIT" value="LSM" onchange='perusahaan_nonIT()' id="lsm" >LSM</label>

				<label class="radio-inline"><input type="radio" name="perusbidangnonIT" value="0" onchange='perusahaan_nonIT()' id="perusahaannonIT" >Lainnya...Sebutkan</label>

			  	<textarea type="text" name="perusbidangnonIT2" rows="3" class="form-control" placeholder="Tuliskan alasannya. Hanya isi jika memilih Lainnya." autocomplete="off" style="margin-top:5px;width:99%" disabled id="ITnonperusahaan"></textarea>
			  </div>	
			  <p>	
			  </div>	  
			  <p>

			  <div class="form-group">
			    <label for="namaperusahaan">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Jabatan saat pertama diterima bekerja<span style="color:red">*</span>  </span>
			    </label>
			    <input type="text" name="jabatanpertama" class="form-control" id="jabatankerja" placeholder="Contoh : Pegawai" autocomplete="off">
			  </div>

			  <div class="form-group">
			    <label for="jenisusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Perkiraan income / pendapatan pertama yang diterima perbulan (bukan hanya gaji, tapi total income<span style="color:red">*</span> </span>
			    </label><br>
				<label class="radio-inline"><input type="radio" name="income" value="500 ribu – 750 ribu" checked>500 ribu – 750 ribu</label>

				<label class="radio-inline"><input type="radio" name="income" value="750 ribu – 1 juta">750 ribu – 1 juta</label>

				<label class="radio-inline"><input type="radio" name="income" value="1 juta – 1,5 juta">1 juta – 1,5 juta</label>

				<label class="radio-inline"><input type="radio" name="income" value="1,5 juta – 2 juta">1,5 juta – 2 juta</label>

				<label class="radio-inline"><input type="radio" name="income" value="2 juta – 3 juta">2 juta – 3 juta</label>

				<label class="radio-inline"><input type="radio" name="income" value="> 3 juta"> > 3 juta</label>

			  </div>

			  <button type="submit" class="btn btn-default" style="float:right">Next Step <i class="fa fa-long-arrow-right"></i></button>
			</form>	
			Note : <span style="color:red">*</span>) Wajib Diisi  
			</div>
	      </div>
	    </div>						
		</div>
	</div>