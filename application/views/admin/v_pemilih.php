
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pemilih</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pemilih</li>
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
                <h3 class="card-title">Daftar Pemilih</h3>
                <p>Total Pemilih : <?php echo $jml_pemilih?></p>
                <div class="card-tools">
                  <div class="input-group input-group-sm">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                  <div class="input-group input-group-sm" style="margin-top: 10px;">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tmbhPemilih" style="margin-bottom:10px">
                        <i class="fa fa-plus"></i> Tambah Pemilih
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
                    <th>Status</th>
                    <th></th>
                  </tr>
                  <?php 
                    $no = $this->uri->segment('3') + 1;
                    foreach($pemilih as $p){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $p->id_pemilih;?></td>
                    <td><?php echo $p->status;?></td>
                    <td>
                      <a
                        href="javascript:;"
                        data-id_pemilih="<?php echo $p->id_pemilih ?>"
                        data-status="<?php echo $p->status ?>"
                        data-toggle="modal" data-target="#edit-data">
                        <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-warning btn-sm">Ubah</button>
                      </a>
                      <a
                        href="javascript:;"
                        data-id_pemilih="<?php echo $p->id_pemilih ?>"
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
<div class="modal fade" id="tmbhPemilih" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="tambah">Tambah Pemilih</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form role="form" action="<?php echo base_url('admin/pemilih_admin/aksi_tambah'); ?>" method="post">
          
          <div class="form-group">
            <label for="nama_Pemilih">ID Pemilih</label>
            <input class="form-control" type="text" name="id_pemilih" id="id_pemilih" placeholder="Masukkan ID">
          </div>
          
          <div class="form-group">
            <label for="visi">Status (0/1)</label>
            <input type="text" class="form-control" id="status" name="status" placeholder="Masukkan Status">
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
        <form role="form" action="<?php echo base_url('admin/pemilih_admin/aksi_ubah'); ?>" method="post" enctype="multipart/form-data">
          
          <div class="form-group">
            <label for="nama_Pemilih">ID Pemilih</label>
            <input class="form-control" type="text" name="id_pemilih" id="id_pemilih" placeholder="Masukkan ID">
          </div>
          
          <div class="form-group">
            <label for="visi">Status (0/1)</label>
            <input type="text" class="form-control" id="status" name="status" placeholder="Masukkan Status">
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
        <form role="form" action="<?php echo base_url('admin/pemilih_admin/aksi_hapus'); ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="id_Pemilih">Apakah anda yakin??</label>
            <input class="form-control" type="hidden" name="id_Pemilih" id="id_Pemilih">
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
            modal.find('#id_pemilih').attr("value",div.data('id_pemilih'));
            modal.find('#status').attr("value",div.data('status'));
             
        });
    });

    $(document).ready(function() {
        // Untuk sunting
        $('#hapus-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id_pemilih').attr("value",div.data('id_pemilih'));
        });
    });
</script>

