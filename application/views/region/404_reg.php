

  <!-- <body class="nav-md" style="background: #F7F7F7; color:#73879C;"> -->
  <div class="right_col" role="main" style="background: #F7F7F7; color:#73879C;">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center text-center">
              <h1 class="error-number">404</h1>
              <h2>Data region masih kosong.</h2>
              <h2>Silahkan tambah data region.</h2>
              <br>
              <br>
              <p style="text-decoration: underline"><?php echo anchor('#','Tambah data region dengan klik disini', array('data-toggle'=>'modal', 'data-target'=>'#modaltambah')); ?></p>
              <br>
              <!-- <p style="text-decoration: underline"><a href="#">Tambah data pejabat dengan klik disini</a></p><br> -->
              <p style="text-decoration: underline"><a href="<?php echo base_url('index.php/main/cek_tabelgen2'); ?>">Kembali ke Halaman utama dengan klik disini  </a></p>
              <div class="mid_center">

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>
    </div>



  <!-- </body> --.
  <!-- Modal Tambah Data -->
  <div class="modal fade" id="modaltambah" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-pencil"></span> Tambah Data</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form action="<?php echo base_url('index.php/region/tambah_aksi'); ?>" id='frm_vld' name='frm_vld' method="post">
            <div class="form-group">
              <label for="username" class=""><span class="glyphicon glyphicon-map-marker"></span> Nama Region</label>
              <input type="text" name="region" id="username" class="form-control" placeholder="Nama Region" ><br>
            </div>
            <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-floppy-save  "></span> Tambah Data</button>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    <!-- /modal login -->
