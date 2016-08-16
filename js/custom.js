    "console" in window && console.log("%cHi Developer\nIf you find a bug please report on %chttps://facebook.com/fikaridaulmaulayya/\n",
    	"color: #000000; font-size: 17px; line-height: 2",
    	"color: #2980b9; font-size: 17px; line-height: 2; font-style: normal"); 

    function alasan()
    {
    	var kondisi = document.getElementById('TidakKerja').checked;
    	if(kondisi== true)
    	{	
    		document.getElementById('NoKerja').disabled=false;
    		document.getElementById('alamatkantor').disabled=true;
    		document.getElementById('telephonekantor').disabled=true;
    	}else{
    		document.getElementById('NoKerja').disabled=true;
    		document.getElementById('alamatkantor').disabled=false;
    		document.getElementById('telephonekantor').disabled=false;
    	}
    }

    function menunggu_pekerjaan()
    {
      var kondisi = document.getElementById('kerjaLainnya').checked;
      if(kondisi== true)
      { 
        document.getElementById('nunggukerja').disabled=false;
      }else{
        document.getElementById('nunggukerja').disabled=true;
      }
    }

    function bentuk_perusahaan()
    {
      var kondisi = document.getElementById('bentuklainnya').checked;
      if(kondisi== true)
      { 
        document.getElementById('bentuklain').disabled=false;
      }else{
        document.getElementById('bentuklain').disabled=true;
      }
    }

    function bentuk_perusahaan2()
    {
      var kondisi = document.getElementById('bentuklainnya2').checked;
      if(kondisi== true)
      { 
        document.getElementById('bentuklain2').disabled=false;
      }else{
        document.getElementById('bentuklain2').disabled=true;
      }
    }    

    function perusahaan_IT()
    {
      var kondisi = document.getElementById('perusahaanIT').checked;
      if(kondisi== true)
      { 
        document.getElementById('ITperusahaan').disabled=false;
      }else{
        document.getElementById('ITperusahaan').disabled=true;
      }
    } 

    function perusahaan_nonIT()
    {
      var kondisi = document.getElementById('perusahaannonIT').checked;
      if(kondisi== true)
      { 
        document.getElementById('ITnonperusahaan').disabled=false;
      }else{
        document.getElementById('ITnonperusahaan').disabled=true;
      }
    }

    function perusahaan_IT2()
    {
      var kondisi = document.getElementById('perusahaanIT2').checked;
      if(kondisi== true)
      { 
        document.getElementById('ITperusahaan2').disabled=false;
      }else{
        document.getElementById('ITperusahaan2').disabled=true;
      }
    } 

    function perusahaan_nonIT2()
    {
      var kondisi = document.getElementById('perusahaannonIT2').checked;
      if(kondisi== true)
      { 
        document.getElementById('ITnonperusahaan2').disabled=false;
      }else{
        document.getElementById('ITnonperusahaan2').disabled=true;
      }
    }         

    function bekerja()
    {
      var kondisi = document.getElementById('tetap').checked;
      if(kondisi== true)
      { 
        document.getElementById('jabatan').disabled=false;
        document.getElementById('tetapno8').disabled=false;
        document.getElementById('meningkat').disabled=false;
      }else{
        document.getElementById('belumkerja').disabled=true;
        document.getElementById('berlainan').disabled=true;
      }
    } 

    function pindah_kerja()
    {
      var kondisi = document.getElementById('pindahkerja').checked;
      if(kondisi== true)
      { 
        document.getElementById('kerjapindah').disabled=false;
      }else{
        document.getElementById('kerjapindah').disabled=true;
      }
    }         

    function ti()
    {
      var kerja1 = document.getElementById('kerjaTI').checked;
      if(kerja1 == true)
      {
        document.getElementById('TI').style.display="block";
        document.getElementById('nonTI').style.display="none";
      }
      else
      {
        document.getElementById('TI').style.display="none";
        document.getElementById('nonTI').style.display="block";
      }
    }

    function ti2()
    {
      var kerja1 = document.getElementById('kerjaTI2').checked;
      if(kerja1 == true)
      {
        document.getElementById('TI2').style.display="block";
        document.getElementById('nonTI2').style.display="none";
      }
      else
      {
        document.getElementById('TI2').style.display="none";
        document.getElementById('nonTI2').style.display="block";
      }
    }

    function bekerja_sekarang()
    {
      var bekerja = document.getElementById('tetap').checked;
      if(bekerja == true)
      {
        document.getElementById('jabsekarang').style.display="block";
        document.getElementById('perussekarang').style.display="none";
      }
      else
      {
        document.getElementById('jabsekarang').style.display="none";
        document.getElementById('perussekarang').style.display="block";
      }
    }        

    function lulus()
    {
      var kondisi = document.getElementById('sikap').checked;
      if(kondisi== true)
      { 
        document.getElementById('lulusan').disabled=false;
      }else{
        document.getElementById('lulusan').disabled=true;
      }
    }

    $(function(){
        $( "#datepicker" ).datepicker();
    });
   
  /*
    $('#datepicker').datepicker({
        dateFormat: 'yy-m-d',
        inline: true,
        onSelect: function(dateText, inst) { 
            var date = $(this).datepicker('getDate'),
                day  = date.getDate(),  
                month = date.getMonth() + 1,              
                year =  date.getFullYear();
            alert(day + '-' + month + '-' + year);
        }
    });
  */
    $(document).ready(function() {
        $('dropdown-toggle').dropdown()
    });

