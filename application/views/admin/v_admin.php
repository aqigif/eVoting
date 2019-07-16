
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
        <div class="row">
          <div class="col-12">
                <?=$this->session->flashdata('notif')?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar admin</h3>
                <p>Total admin : <?php echo $jml_admin?></p>
                <div class="card-tools">
                  <div class="input-group input-group-sm">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                  <div class="input-group input-group-sm" style="margin-top: 10px;">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tmbhadmin" style="margin-bottom:10px">
                        <i class="fa fa-plus"></i> Tambah admin
                  </button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Pertanyaan</th>
                    <th>Jawaban</th>
                    <th></th>
                  </tr>
                  <?php 
                    $no = $this->uri->segment('3') + 1;
                    foreach($admin as $a){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $a->id_admin;?></td>
                    <td><?php echo $a->nama_admin;?></td>
                    <td><?php echo $a->username;?></td>
                    <td><?php echo $a->password;?></td>
                    <td><?php echo $a->pertanyaan;?></td>
                    <td><?php echo $a->jawaban;?></td>
                    <td>
                      <a
                        href="javascript:;"
                        data-id_admin="<?php echo $a->id_admin ?>"
                        data-nama_admin="<?php echo $a->nama_admin ?>"
                        data-username="<?php echo $a->username ?>"
                        data-passsword="<?php echo $a->password ?>"
                        data-pertanyaan="<?php echo $a->pertanyaan ?>"
                        data-jawaban="<?php echo $a->jawaban ?>"
                        data-toggle="modal" data-target="#edit-data">
                        <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-warning btn-sm">Ubah</button>
                      </a>
                      <a
                        href="javascript:;"
                        data-id_admin="<?php echo $a->id_admin ?>"
                        data-toggle="modal" data-target="#hapus-data">
                        <button  data-toggle="modal" data-target="#del-data" class="btn btn-danger btn-sm">Hapus</button>
                      </a>
                    </td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <?php echo $this->pagination->create_links();?>
                </ul>
              </div>
            </div><!-- /.card -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->



<!-- Modal Tambah-->
<div class="modal fade" id="tmbhadmin" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="tambah">Tambah admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form role="form" action="<?php echo base_url('admin/admin_admin/aksi_tambah'); ?>" method="post">
          
          <div class="form-group">
            <label for="nama_admin">Nama admin</label>
            <input class="form-control" type="hidden" name="id_admin" id="id_admin">
            <input class="form-control" name="nama_admin" id="nama_admin" placeholder="Masukan nama admin">
          </div>
          
          <div class="form-group">
            <label for="nama_admin">Username</label>
            <input class="form-control" name="username" id="username" placeholder="Masukan username">
          </div>
          
          <div class="form-group">
            <label for="passsword">Passsword</label>
            <input class="form-control" name="password" id="password" placeholder="Masukan Password">
          </div>
          
          <div class="form-group">
            <label for="pertanyaan">Pertanyaan</label>
            <textarea class="form-control" id="pertanyaan" name="pertanyaan"></textarea>
          </div>

          <div class="form-group">
            <label for="jawaban">Jawaban</label>
            <textarea class="form-control" id="jawaban" name="jawaban"></textarea>
          </div>
          
      </div>
      
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    
    </div>
  </div>
</div>




<!-- Modal  Ubah-->
<div class="modal fade" id="edit-data" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="edit">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form role="form" action="<?php echo base_url('admin/admin_admin/aksi_ubah'); ?>" method="post" enctype="multipart/form-data">
          
          
          <div class="form-group">
            <label for="nama_admin">Nama admin</label>
            <input class="form-control" type="hidden" name="id_admin" id="id_admin">
            <input class="form-control" name="nama_admin" id="nama_admin" placeholder="Masukan nama admin">
          </div>
          
          <div class="form-group">
            <label for="nama_admin">Username</label>
            <input class="form-control" name="username" id="username" placeholder="Masukan username">
          </div>
          
          <div class="form-group">
            <label for="passsword">Passsword</label>
            <input class="form-control" name="password" id="password" placeholder="Masukan Password">
          </div>
          
          <div class="form-group">
            <label for="pertanyaan">Pertanyaan</label>
            <textarea class="form-control" id="pertanyaan" name="pertanyaan"></textarea>
          </div>

          <div class="form-group">
            <label for="jawaban">Jawaban</label>
            <textarea class="form-control" id="jawaban" name="jawaban"></textarea>
          </div>
          
      </div>
      
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="hapus-data" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="edit">Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form role="form" action="<?php echo base_url('admin/admin_admin/aksi_hapus'); ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="id_admin">Apakah anda yakin??</label>
            <input class="form-control" type="hidden" name="id_admin" id="id_admin">
          </div>
          <div class="form-group">
      </div>
      
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Hapus</button>
        </form>
      </div>
    
    </div>
  </div>
</div>

</section>
<!-- /.content -->


<script type="text/javascript">
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id_admin').attr("value",div.data('id_admin'));
            modal.find('#nama_admin').attr("value",div.data('nama_admin'));
            modal.find('#username').attr(div.data('username'));
            modal.find('#passsword').attr(div.data('passsword'));
            modal.find('#pertanyaan').html("value",div.data('pertanyaan'));
            modal.find('#jawaban').html("value",div.data('jawaban'));
        });
    });

    $(document).ready(function() {
        // Untuk sunting
        $('#hapus-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id_admin').attr("value",div.data('id_admin'));
        });
    });
</script>

