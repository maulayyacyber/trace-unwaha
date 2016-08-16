<?php
//session_start();
//if(!empty($_SESSION['nama']) AND !empty($_SESSION['nim'])){
?>
	<header class="sb-page-header" style="padding-top: 60px;padding-bottom: 30px;text-align: left;font-size: 24px;padding: 30px 15px;color: rgba(255,255,255,.8);background-color: #26A65B;margin-bottom: 40px;font-size: 15px;background-image: url(images/bg.png);position: relative;">
	<div class="container" style="margin-top: 75px; margin-left:0px">
	    <div class="row">
	      <div class="col-md-4">
	        <ol class="breadcrumb" style="margin-left:90px">
	          <li><a href="/">Home</a></li>
	          <li class="active">Halaman 2B</li>
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
			<form action ="simpan-step2B.php" method="POST" role="form">
			  <div class="form-group">
			    <label for="jenisusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Sebutkan jenis perusahaan/usaha saudara<span style="color:red">*</span> </span>
			    </label>
			    <textarea name="jenisusaha" rows="3" class="form-control" id="jenisusaha" placeholder="Masukan Jenis Usaha Anda" autocomplete="off"></textarea>
			  </div>		  

			  <div class="form-group">
			    <label for="bidangusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Bidang usaha perusahaan/usaha saudara<span style="color:red">*</span> </span>
			    </label>
			    <textarea name="bidangusaha" rows="3" class="form-control" id="bidangusaha" placeholder="Masukan Bidang Usaha" autocomplete="off"></textarea>
			  </div>

			  <div class="form-group">
			    <label for="mendirikanusaha">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Kapan saudara mendirikan usaha tersebut<span style="color:red">*</span>  </span>
			    </label>
			    <textarea name="mendirikanusaha" rows="3" class="form-control" id="hp" placeholder="Waktu Mendirikan Usaha" autocomplete="off"></textarea>
			  </div>

			  <div class="form-group">
			    <label for="jumlahkaryawan">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Berapa perkiraan jumlah karyawan di perusahaan saudara<span style="color:red">*</span> </span>
			    </label>
			    <textarea name="jumlahkaryawan" rows="3" class="form-control" id="jumlahkaryawan" placeholder="Contoh : 20" autocomplete="off"></textarea>
			  </div>

			  <div class="form-group">
			    <label for="aset">
			    	<span style="border-left: 3px solid #66AE53;"> &nbsp; Aset (perkiraan dalam rupiah) perusahaan saudara<span style="color:red">*</span> </span>
			    </label>
			    <textarea name="aset" rows="3" class="form-control" id="aset" placeholder="Aset Dalam Rupiah" autocomplete="off"></textarea>
			  </div>			  			  

			  <button type="submit" class="btn btn-default" style="float:right">Next Step <i class="fa fa-long-arrow-right"></i></button>
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