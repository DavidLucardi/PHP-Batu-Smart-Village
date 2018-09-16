  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Informasi Detail Anggota
        </h4>
      </div> <!-- /.page-header -->
      <?php
      if (isset($_GET['id'])) {
        $nik  = $_GET['id'];
        $sql  = mysql_query("SELECT * FROM bsv_anggota WHERE nik='$nik'");
        $data = mysql_fetch_assoc($sql);

        $tanggal        = $data['tanggal_lahir'];
        $tgl            = explode('-',$tanggal);
        $tanggal_lahir  = $tgl[2]."-".$tgl[1]."-".$tgl[0];
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">

		  <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <div class="container">
	

	<input type="radio" id="i1" name="images" checked/>
	<input type="radio" id="i2" name="images" />
	<input type="radio" id="i3" name="images" />
	<input type="radio" id="i4" name="images"  />
	
	<div class="slide_img" id="one">			
			
			<img src="..\admineco\image\[<?php echo $data['nik']; ?>]\[<?php echo $data['nama']; ?>]\1.jpg">
			
				<label class="prev" for="i4"><span></span></label>
				<label class="next" for="i2"><span></span></label>	
		
	</div>
	
	<div class="slide_img" id="two">
		
			<img src="..\admineco\image\[<?php echo $data['nik']; ?>]\[<?php echo $data['nama']; ?>]\2.jpg" >
			
				<label class="prev" for="i1"><span></span></label>
				<label class="next" for="i3"><span></span></label>
		
	</div>
			
	<div class="slide_img" id="three">
			<img src="..\admineco\image\[<?php echo $data['nik']; ?>]\[<?php echo $data['nama']; ?>]\3.jpg">	
			
				<label class="prev" for="i2"><span></span></label>
				<label class="next" for="i4"><span></span></label>
	</div>


	<div class="slide_img" id="four">
			<img src="..\admineco\image\[<?php echo $data['nik']; ?>]\[<?php echo $data['nama']; ?>]\4.jpg">	
			
				<label class="prev" for="i3"><span></span></label>
				<label class="next" for="i1"><span></span></label>

	</div>

	<div id="nav_slide">
		<label for="i1" class="dots" id="dot1"></label>
		<label for="i2" class="dots" id="dot2"></label>
		<label for="i3" class="dots" id="dot3"></label>
		<label for="i4" class="dots" id="dot4"></label>
	</div>
		
</div>
<script  src="js/index.js"></script>
<hr/>
</body>
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Anggota</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $data['nama']; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Bidang Usaha</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="bidang" autocomplete="off" value="<?php echo $data['bidang']; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-3">
                <textarea class="form-control" name="alamat" rows="3" readonly><?php echo $data['alamat']; ?></textarea>
              </div>
            </div>
			
			<div class="form-group">
              <div class="col-sm-offset-2 col-sm-3">
                <a href="https://www.google.co.id/maps/dir/?api=1&destination=<?php echo $data['alamat']; ?>" class="btn btn-primary">GPS</a>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No. Telepon</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="no_tel" name="no_telepon" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $data['no_telepon']; ?>" readonly>
              </div>
            </div>
			
			<div class="form-group">
              <div class="col-sm-offset-2 col-sm-3">
                <input type="Button" id="Button" class="btn btn-primary" Value="Aktifkan Telepon">
              </div>
            </div>
			
			<script>
			document.querySelector("#Button").onclick = function() {
			document.querySelector("#no_tel").select();
			document.execCommand('copy');
			};
			</script>

			<div class="form-group">
              <label class="col-sm-2 control-label">Profil</label>
              <div class="col-sm-3">
                <textarea class="form-control" name="profil" rows="3" readonly><?php echo $data['profil']; ?></textarea>
              </div>
            </div>
			
			<div class="form-group">
              <label class="col-sm-2 control-label">Acara Khusus</label>
              <div class="col-sm-3">
                <textarea class="form-control" name="event" rows="3" readonly><?php echo $data['event']; ?></textarea>
              </div>
            </div>
            
            <hr/>
			<div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <a href="index.php" class="btn btn-default btn-reset">Kembali</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
