
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kandidat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kandidat</li>
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
                <h3 class="card-title">Daftar Kandidat</h3>
                <p>Total kandidat : <?php echo $jml_kandidat?></p>
                <div class="card-tools">
                  <div class="input-group input-group-sm">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                  <div class="input-group input-group-sm" style="margin-top: 10px;">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tmbhKandidat" style="margin-bottom:10px">
                        <i class="fa fa-plus"></i> Tambah Kandidat
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
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Foto</th>
                    <th></th>
                  </tr>
                  <?php 
                    $no = $this->uri->segment('3') + 1;
                    foreach($kandidat as $k){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $k->id_kandidat;?></td>
                    <td><?php echo $k->nama_kandidat;?></td>
                    <td><?php echo $k->visi;?></td>
                    <td><?php echo $k->misi;?></td>
                    <td><?php echo $k->foto;?></td>
                    <td>
                      <a
                        href="javascript:;"
                        data-id_kandidat="<?php echo $k->id_kandidat ?>"
                        data-nama_kandidat="<?php echo $k->nama_kandidat ?>"
                        data-visi="<?php echo $k->visi ?>"
                        data-misi="<?php echo $k->misi ?>"
                        data-foto="<?php echo $k->foto ?>"
                        data-toggle="modal" data-target="#edit-data">
                        <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-warning btn-sm">Ubah</button>
                      </a>
                      <a
                        href="javascript:;"
                        data-id_kandidat="<?php echo $k->id_kandidat ?>"
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
<div class="modal fade" id="tmbhKandidat" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="tambah">Tambah Kandidat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form role="form" action="<?php echo base_url('admin/kandidat_admin/aksi_tambah'); ?>" method="post">
          
          <div class="form-group">
            <label for="nama_kandidat">Nama Kandidat</label>
            <input class="form-control" type="hidden" name="id_kandidat" id="id_kandidat">
            <input class="form-control" name="nama_kandidat" id="nama_kandidat" placeholder="Masukan nama kandidat">
          </div>
          
          <div class="form-group">
            <label for="visi">Visi</label>
            <textarea class="form-control" id="visi" name="visi" placeholder="Masukan visi kandidat"></textarea>
          </div>
          
          <div class="form-group">
            <label for="misi">Misi</label>
            <textarea class="form-control" id="misi" name="misi" placeholder="Masukan misi kandidat"></textarea>
          </div>
          
          <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control-file" id="foto" name="foto">
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
        <form role="form" action="<?php echo base_url('admin/kandidat_admin/aksi_ubah'); ?>" method="post" enctype="multipart/form-data">
          
          <div class="form-group">
            <label for="nama_kandidat">Nama Kandidat</label>
            <input class="form-control" type="hidden" name="id_kandidat" id="id_kandidat">
            <input class="form-control" name="nama_kandidat" id="nama_kandidat">
          </div>
          
          <div class="form-group">
            <label for="visi">Visi</label>
            <textarea class="form-control" name="visi" id="visi"></textarea>
          </div>
          
          <div class="form-group">
            <label for="misi">Misi</label>
            <textarea class="form-control" name="misi" id="misi"></textarea>
          </div>
          
          <div class="form-group">
            <label for="foto">Foto</label>
            <input type="text" class="form-control" id="foto" name="foto" >
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
        <form role="form" action="<?php echo base_url('admin/kandidat_admin/aksi_hapus'); ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="id_kandidat">Apakah anda yakin??</label>
            <input class="form-control" type="hidden" name="id_kandidat" id="id_kandidat">
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
            modal.find('#id_kandidat').attr("value",div.data('id_kandidat'));
            modal.find('#nama_kandidat').attr("value",div.data('nama_kandidat'));
            modal.find('#visi').html(div.data('visi'));
            modal.find('#misi').html(div.data('misi'));
            modal.find('#foto').attr("value",div.data('foto'));
        });
    });

    $(document).ready(function() {
        // Untuk sunting
        $('#hapus-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id_kandidat').attr("value",div.data('id_kandidat'));
        });
    });
</script>

