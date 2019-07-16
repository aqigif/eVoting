
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Suara</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Suara</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">
                  <i class="fa fa-pie-chart mr-1"></i>
                  Total Suara : <?php echo $jml_suara;?> / 1652 orang
                </h3>
                <div class="card-tools">
                  <div class="btn-group">
                      <a href="<?php echo base_url("suara_admin");?>" class="btn btn-info">Update</a>
                      <?php header( "refresh:10;" );?>
                  </div>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <div>
                    <?php foreach($kandidat as $kand){
                      $this->db->where('id_kandidat', $kand->id_kandidat);
                      $this->db->from('tbl_suara');
                      $hitung = $this->db->count_all_results();
                      $value=($hitung/$jml_suara)*100;
                      ?>
                      <div class="row">
                        <div class="col-md-2">
                          <?php echo $kand->nama_kandidat;?>
                        </div>
                        <div class="col-md-10">
                          <div class="progress" style="height: 50px;">
                            <div class="progress-bar progress-bar-primary progress-bar-striped active progress-bar-animated" role="progressbar" aria-valuenow="<?php echo (integer)$value;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo (integer)$value;?>%; color: black;"><?php echo $hitung;?> Orang </div>
                          </div>
                        </div>
                      </div>
                      <br>
                  <?php } ?>
                  <div class="row">
                        <div class="col-md-2">
                          Tidak Sah
                        </div>
                        <div class="col-md-10">
                          <div class="progress" style="height: 50px;">
                            13 Orang </div>
                          </div>
                        </div>
                      </div>
                      <br>

                      <div class="row">
                        <div class="col-md-2">
                          Tidak Hadir
                        </div>
                        <div class="col-md-10">
                          <div class="progress" style="height: 50px;">
                            133 Orang </div>
                          </div>
                        </div>
                      </div>
                      <br>

                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

