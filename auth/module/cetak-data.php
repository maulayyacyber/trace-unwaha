<?php
session_start();
if(empty($_SESSION['username'])){
 
    header("location:/");
 
}else{
 
    include("../../library/environment.php");
    include ("../../library/database.php");
 
    $id = $_GET['id'];
 
        $s = mysqli_query($connect, "SELECT * FROM tbl_trace WHERE id_register = '$id'");
       
        $row = mysqli_fetch_array($s);
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
        $strhtml .= '<div class="container">
                      <table class="table">
                        <thead>
                          <tr>
                            <th style="padding-left:230">TRACER STUDY LULUSAN</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th style="padding-left:230">FAKULTAS TEKNOLOGI INFORMASI</th>
                          </tr>
                          <tr>
                            <th style="padding-left:230">UNWAHA JOMBANG</th>
                          </tr>
                        </tbody>
                      </table> 
                      <br>                     
                        <h4>Bagian Pertama</h4>
                        <table class="table">
                          <tbody>
                            <tr>
                              <th scope="row"></th>
                              <td>NIM  </td>
                              <td>: <b>'.$row['nim'].'</b></td>
                            </tr>
                            <tr>
                              <th scope="row"></th>
                              <td>prodi  </td>
                              <td>: <b>'.$prodi.'</b></td>
                            </tr>                          
                            <tr>
                              <th scope="row"></th>
                              <td>Nama  </td>
                              <td>: <b>'.$row['nama'].'</b></td>
                            </tr>
                            <tr>
                              <th scope="row"></th>
                              <td>Tahun Lulus  </td>
                              <td>: <b>'.$row['tahun_lulus'].'</b></td>
                            </tr>
                            <tr>
                              <th scope="row"></th>
                              <td>Alamat Rumah  </td>
                              <td>: <b>'.$row['alamat'].'</b></td>
                            </tr>
                            <tr>
                              <th scope="row"></th>
                              <td>Alamat Email  </td>
                              <td>: <b>'.$row['email'].'</b></td>
                            </tr>                          
                            <tr>
                              <th scope="row"></th>
                              <td>Nomor HP  </td>
                              <td>: <b>'.$row['no_hp'].'</b></td>
                            </tr>
                          </tbody>
                        </table>
 
                        <h4>Bagian A</h4>
                        <table class="table">
                            <tbody>
                            <tr>
                              <th scope="row"></th>
                              <td>1. Lama waktu menunggu sampai mendapatkan pekerjaaan yang pertama kali sesudah lulus sarjana : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['menunggu_kerja'].'</b> Bulan</td>
                            </tr>
 
                            <tr>
                              <th scope="row"></th>
                              <td>2. Nama perusahaan / instansi saudara bekerja pertama kali tersebut : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['nama_perusahaan'].'</b></td>
                            </tr>
 
                            <tr>
                              <th scope="row"></th>
                              <td>3. Bentuk perusahaan : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['bentuk_perusahaan'].'</b></td>
                            </tr>
 
                            <tr>
                              <th scope="row"></th>
                              <td>4. Bidang Pekerjaan TI : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['bidang_pekerjaanIT'].'</b></td>
                            </tr>                                                      
 
                            <tr>
                              <th scope="row"></th>
                              <td>5. Bidang Pekerjaan Non TI : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['bidangpekerjaannonIT'].'</b></td>
                            </tr>
 
                            <tr>
                              <th scope="row"></th>
                              <td>6. Jabatan saat pertama diterima bekerja : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['jabatan_pertama'].'</b></td>
                            </tr>
 
                            <tr>
                              <th scope="row"></th>
                              <td>7. pendapatan pertama yang diterima perbulan (bukan hanya gaji, tapi total income) : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['income_pertama'].'</b></td>
                            </tr>

                            <tr>
                              <th scope="row"></th>
                              <td>8. Sampai saat ini. telah berpindah tempat bekerja sebanyak : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b></b></td>
                            </tr>

                            <tr>
                              <th scope="row"></th>
                              <td>9. Nama perushaan tempat bekerja sekarang: </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b></b></td>
                            </tr>

                            <tr>
                              <th scope="row"></th>
                              <td>10. Jabatan di perusahaan anda bekerja sekarang : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b></b></td>
                            </tr>

                            <tr>
                              <th scope="row"></th>
                              <td>11. Bentuk perusahaan : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b></b></td>
                            </tr>

                            <tr>
                              <th scope="row"></th>
                              <td>12. Bidang pekerjaan : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b></b></td>
                            </tr>

                            <tr>
                              <th scope="row"></th>
                              <td>13. Bila jawaban No.12 Teknologi Informas, jenis perusahaannya adalah : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b></b></td>
                            </tr>                                                                
                            
                            <tr>
                              <th scope="row"></th>
                              <td>14. Bila jawaban No.12 Non TI, Jenis perusahaan :</td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b></b></td>
                            </tr>                            
 
                            </tbody>
                        </table>
 
                        <h4>Bagian B</h4>
                        <table class="table">
                            <tbody>
                            <tr>
                              <th scope="row"></th>
                              <td>1. Sebutkan jenis perusahaan/usaha saudara : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['jenis_perusahaan'].'</b></td>
                            </tr>
 
                            <tr>
                              <th scope="row"></th>
                              <td>2. Bidang usaha perusahaan/usaha saudara :  </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['bidang_perusahaan'].'</b></td>
                            </tr>
 
                            <tr>
                              <th scope="row"></th>
                              <td>3. Kapan saudara mendirikan usaha tersebut : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['waktu_mendirikan'].'</b></td>
                            </tr>
 
                            <tr>
                              <th scope="row"></th>
                              <td>4. Berapa perkiraan jumlah karyawan di perusahaan saudara :  </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['waktu_mendirikan'].'</b></td>
                            </tr>
 
                            <tr>
                              <th scope="row"></th>
                              <td>5. Aset  (perkiraan dalam rupiah) perusahaan saudara :  </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['aset'].'</b></td>
                            </tr>                          
 
                            </tbody>
                        </table>
 
                        <h4>Bagian Umpan Balik</h4>
                        <table class="table">
                            <tbody>
                            <tr>
                              <th scope="row"></th>
                              <td>1. Kesulitan apa yang saudara dihadapi saat pertama kali bekerja? : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['kesulitan_pertama'].'</b></td>
                            </tr>
 
                            <tr>
                              <th scope="row"></th>
                              <td>2. Menurut pendapat saudara, kemampuan lulusan Jurusan Sistem Informasi STMIK Bahrul ’Ulum Jombang  yang dirasa belum memadai saat pertama kali bekerja adalah :  </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['kemampuan'].'</b></td>
                            </tr>
 
                            <tr>
                              <th scope="row"></th>
                              <td>3. Menurut  anda bagaimana relevansi kurikulum Prodi Sistem Informasi  dengan dunia kerja ?  </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['kurikulum'].'</b></td>
                            </tr>                          
 
                            <tr>
                              <th scope="row"></th>
                              <td>4. Saran perbaikan untuk  Prodi Sistem Informasi adalah : </td>
                              <td></td>
                            </tr>
                            <tr>
                            <th scope="row"></th>
                                <td style="padding-left:20"><b>'.$row['saran'].'</b></td>
                            </tr>                                                      
 
                            </tbody>
                        </table>                       
                    </div>';
        /*
        $strhtml .= '<div class="col-md-12">';
        $strhtml .= '<div class="col-md-4">nama : <div class="col-md-8">'.$row['nama'].'';
        $strhtml .= '<div class="col-md-4">nim : <div class="col-md-8">'.$row['nim'].'';
        $strhtml .= '</div>';
        $strhtml .= '</div>';
        */
 
    // Panggil mPdf
    require ("../../library/mpdf60/mpdf.php");
 
    $stylesheet = file_get_contents(array('../../css/bootstrap.min.css','../../css/custom.css','',''));
    //$fileName = '"'.$row['nama'].'"' . date('d-m-Y') . '-' . date('h.i.s');
 
    $mpdf = new mPDF('utf-8', 'A4', 0, '', 10, 10, 5, 1, 1, 1, '');
    $mpdf->SetDisplayMode('fullpage');
    $mpdf->WriteHTML($stylesheet,1);
    $mpdf->WriteHTML($strhtml);
    $mpdf->Output();
 
    }
?>