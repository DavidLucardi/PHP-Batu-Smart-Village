  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Input data anggota
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-simpan.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">NIK</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="nik" maxlength="16" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Anggota</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tempat Lahir</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir</label>
              <div class="col-sm-2">
                <div class="input-group">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off" required>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-4">
                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                </label>

                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </label>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Bidang Usaha</label>
              <div class="col-sm-3">
                <select class="form-control" name="bidang" placeholder="Pilih Bidang Usaha" required>
                  <option value=""></option>
                  <option value="Pertanian">Pertanian</option>
                  <option value="Kuliner">Kuliner</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-3">
                <textarea class="form-control" name="alamat" rows="3" required></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No. Telepon</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="no_telepon" autocomplete="off" maxlength="12" onKeyPress="return goodchars(event,'0123456789',this)" required>
              </div>
            </div>
			
			<div class="form-group">
              <label class="col-sm-2 control-label">Profil</label>
              <div class="col-sm-3">
                <textarea class="form-control" name="profil" rows="5" required></textarea>
              </div>
            </div>
			
			<div class="form-group">
              <label class="col-sm-2 control-label">Acara Khusus</label>
              <div class="col-sm-3">
                <textarea class="form-control" name="event" rows="5" required></textarea>
              </div>
            </div>
            
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                <a href="welcome.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->