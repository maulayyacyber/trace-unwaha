<?php
/*
session_start();
if(!empty($_SESSION['nama']) AND !empty($_SESSION['nim'])){
*/
?>
	<header class="sb-page-header" style="padding-top: 60px;padding-bottom: 30px;text-align: left;font-size: 24px;padding: 30px 15px;color: rgba(255,255,255,.8);background-color: #26A65B;margin-bottom: 40px;font-size: 15px;background-image: url(images/bg.png);position: relative;">
	<div class="container" style="margin-top: 75px; margin-left:0px">
	    <div class="row">
	      <div class="col-md-4">
	        <ol class="breadcrumb" style="margin-left:90px">
	          <li><a href="/">Home</a></li>
	          <li class="active">Halaman 3</li>
	        </ol>
	      </div>
	    </div>
	  </div>  
	</header>	
	<div class="container">		
		<div class="col-md-12">			
	    <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
	      <div class="unwaha-padding panel-heading" style="color:#fff">Halaman <b>3</b> dari 3 halaman</div>
	      <div class="panel-body">
	      	<div class="umpan-balik">
			<form action ="simpan-umpan-balik.php" method="POST" role="form">
			  <div class="form-group">
			    <label for="jenisusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Kesulitan apa yang saudara dihadapi saat pertama kali bekerja?<span style="color:red">*</span></span>
			    </label>
			    <input type="text" name="kesulitan" class="form-control" id="jenisusaha" placeholder="Masukan Kesulitan Saat Pertama Kali Bekerja" autocomplete="off">
			  </div>		  

			  <div class="form-group">
			    <label for="bidangusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Menurut pendapat saudara, kemampuan lulusan Jurusan Sistem Informasi UNWAHA Jombang  yang dirasa belum memadai saat pertama kali bekerja adalah</span>
			    </label>

			    	<span style="margin-left:15px;border-left: 3px solid #66AE53;"> &nbsp; Kemampuan Keahlian</span>
					<br>
					<select name="kemampuan_keahlian" class="form-control" style="margin-left:15px;margin-top:5px;margin-bottom:5px;width:30%">
					  <option value="SB">SB</option>
					  <option value="B">B</option>
					  <option value="C">C</option>
					</select>
			    	<span style="margin-left:15px;border-left: 3px solid #66AE53;"> &nbsp; Kemampuan Kerja Sama</span>
					<br>
					<select name="kemampuan_kerjasama" class="form-control" style="margin-left:15px;margin-top:5px;margin-bottom:5px;width:30%">
					  <option value="SB">SB</option>
					  <option value="B">B</option>
					  <option value="C">C</option>
					</select>
			    	<span style="margin-left:15px;border-left: 3px solid #66AE53;"> &nbsp; Kemampuan Komunikasi</span>
					<br>
					<select name="kemampuan_komunikasi" class="form-control" style="margin-left:15px;margin-top:5px;margin-bottom:5px;width:30%">
					  <option value="SB">SB</option>
					  <option value="B">B</option>
					  <option value="C">C</option>
					</select>
			    	<span style="margin-left:15px;border-left: 3px solid #66AE53;"> &nbsp; Moral/Perilaku</span>
					<br>
					<select name="kemampuan_moral" class="form-control" style="margin-left:15px;margin-top:5px;margin-bottom:5px;width:30%">
					  <option value="SB">SB</option>
					  <option value="B">B</option>
					  <option value="C">C</option>
					</select>															
			    	<span style="margin-left:15px;border-left: 3px solid #66AE53;"> &nbsp; Bahasa Inggris</span>
					<br>
					<select name="kemampuan_bing" class="form-control" style="margin-left:15px;margin-top:5px;margin-bottom:5px;width:30%">
					  <option value="SB">SB</option>
					  <option value="B">B</option>
					  <option value="C">C</option>
					</select>	
			    	<span style="margin-left:15px;border-left: 3px solid #66AE53;"> &nbsp; Pengembangan Diri</span>
					<br>
					<select name="pengembangan_diri" class="form-control" style="margin-left:15px;margin-top:5px;margin-bottom:5px;width:30%">
					  <option  value="SB">SB</option>
					  <option  value="B">B</option>
					  <option  value="C">C</option>
					</select>
			  </div>

			  <div class="form-group">
			    <label for="mendirikanusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Menurut  anda bagaimana relevansi kurikulum Prodi Sistem Informasi  dengan dunia kerja ?<span style="color:red">*</span></span>
			    </label>
			    <textarea name="kurikulum" class="form-control" rows="3" id="jumlahkaryawan" placeholder="" autocomplete="off"></textarea>
			  </div>

			  <div class="form-group">
			    <label for="jumlahkaryawan">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Saran perbaikan untuk  Prodi Sistem Informasi adalah<span style="color:red">*</span></span>
			    </label>
			    <textarea name="saran" class="form-control" rows="6" id="jumlahkaryawan" placeholder="Masukan Saran Anda untuk Prodi Sistem Informasi" autocomplete="off"></textarea>
			  </div>			  			  

			  <button type="submit" class="btn btn-default" style="float:right">Finish <i class="fa fa-long-arrow-right"></i></button>
			</form>	
			Note : <span style="color:red">*</span>) Wajib Diisi 			
			</div>
	      </div>
	    </div>						
		</div>
	</div>
<?php
/*
}else{
       
       header("location:home");
}
*/
?>	