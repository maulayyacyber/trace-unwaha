
        <div class="content">
            <div class="container-fluid">
                <div class="row">
				    <div class="panel panel-success" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
				      <div class="unwaha-padding panel-heading" style="color:#fff;background-color: #158873;border-color: #158873;"> <i class="pe-7s-server"></i> Data Trace - Universitas KH. A. Wahab Hasbullah</div>
				      <div class="panel-body"> 
				      <div class="table-responsive">               
			            <table id="data-alumni" class="table table-bordered">
			                <thead>
			                    <tr>
			                        <th class="text-center" width="5%">No.</th>
			                        <th class="text-center" width="15%">NIM</th>
			                        <th class="text-center" width="25%">Nama Mahasiswa</th>
			                        <th class="text-center" width="25%">Progam Studi </th>
			                        <th class="text-center" width="15%">Tahun Lulus</th>
			                        <th class="text-center" width="15%">Options</th>
			                    </tr>
			                </thead>
			                <tbody>
			                    <?php
			 
			                    //Data mentah yang ditampilkan ke tabel    
			                    include ('../library/database.php');
			                    $query  = "SELECT * FROM tbl_trace ORDER BY id_register DESC";
			                    $no     = 1;
			                    $result =  mysqli_query($connect, $query);
			                    while ($row = mysqli_fetch_array($result)) {
			                    $id = $row['id_register'];
			                    //declare prodi kdoe
			                    if($row['prodi'] == '0205'){
			                    	$prodi = 'Sistem Informasi';

			                    }elseif($row['prodi'] == '0204'){
			                    	$prodi = 'Teknik Informatika';

			                    }elseif($row['prodi'] == '0306'){
			                    	$prodi = 'Agribisnis';

			                    }elseif($row['prodi'] == '0307'){
			                    	$prodi = 'Agroekoteknologi';

			                    }elseif($row['prodi'] == '0309'){
			                    	$prodi = 'Teknik Pertanian';

			                    }elseif($row['prodi'] == '0308'){
			                    	$prodi = 'Teknologi Hasil Pertanian';

			                    }elseif($row['prodi'] == '0101'){
			                    	$prodi = 'Pendidikan Agama Islam';

			                    }elseif($row['prodi'] == '0102'){
			                    	$prodi = 'Pendidikan Bahasa Arab';

			                    }elseif($row['prodi'] == '0103'){
			                    	$prodi = 'Ekonomi Syariah';

			                    }elseif($row['prodi'] == '0410'){
			                    	$prodi = 'Pendidikan Biologi';

			                    }elseif($row['prodi'] == '0411'){
			                    	$prodi = 'Pendidikan Fisika';

			                    }elseif($row['prodi'] == '0412'){
			                    	$prodi = 'Pendidikan Matematika';

			                    }elseif($row['prodi'] == '0413'){
			                    	$prodi = 'Pendidikan Bahasa Inggris';

			                    }elseif($row['prodi'] == '0514'){
			                    	$prodi = 'Manajemen';
			                    }else{
			                    	$prodi = 'Prodi Not Found';
			                    }
			                    ?>
			 					
			                    <tr align='left'>
			                        <td class="text-center"><?php echo  $no;?></td>
			                        <td><?php echo  $row['nim']; ?></td>
			                        <td><?php echo  $row['nama']; ?></td>
			                        <td><?php echo  $prodi; ?></td>
			                        <td><?php echo  $row['tahun_lulus']; ?></td>
			                        <td>
			                            <a style="color:#158873" href="media.php?ref=cetak-data&id=<?php echo  $row['id_register']; ?>"><i class="pe-7s-print" style="color:#000000"></i> Cetak</a> | 
			                            <a style="color:#158873" href=media.php?ref=hapus-data&id=<?php echo  $row['id_register']; ?>><i class="pe-7s-trash" style="color:#ff0000"></i> Hapus</a>
			                        </td>
			                    </tr>
			                    <?php
			                    $no++;
			                    }
			                    ?>
			                </tbody>
			            </table> 
			            </div> 
                      </div>
                    </div>
                </div>
            </div>
        </div>