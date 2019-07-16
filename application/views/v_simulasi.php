
    
    <section class="portfolio" id="kandidat">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Pilihlah sesuai hati nurani anda!</h2>
        <span class="text-center text-danger">*</span>Klik kandidat yang ingin anda pilih pada area kotak kandidat / tombol nama kandidat
        <div class="row"  style="margin-top: 20px;">
          <?php foreach($kandidat as $vote){ ?>
            <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" 
                href="javascript:;"
                data-id_kandidat="<?php echo $vote->id_kandidat ?>"
                data-nama_kandidat="<?php echo $vote->nama_kandidat ?>"
                data-toggle="modal" data-target="#vote-data">        
            
                <div class="card text-center">
                  <div class="card-header">
                    <h4 class="text-uppercase m-0"><?php echo $vote->id_kandidat;?></h4>
                  </div>
                  
                  <div class="card-body">
                    <img src="<?php echo base_url('assets/gambar/'); echo $vote->foto?>" height="300">
                  </div>
                  
                  <div class="card-footer">
                    <button  data-toggle="modal" data-target="#pilih-data" class="btn btn-lg btn-danger text-uppercase"><?php echo $vote->nama_kandidat;?></button>
                  </div>
                </div>
            </a>
            </div>
          <?php } ?>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="vote-data" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
          <div class="modal-dialog">
            
            <div class="modal-content">

              <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="vote">Apakah anda yakin ??</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form role="form" action="<?php echo base_url('simulasi/aksi_pilih'); ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input class="form-control" type="hidden" name="id_kandidat" id="id_kandidat">
                  </div>

                  <div class="form-group controls mb-0 pb-2">
                    <label for="nama_kandidat">Pilihan Anda :</label>
                    <input class="form-control" id="nama_kandidat" name="nama_kandidat" type="text" disabled="true">
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                  </div>
                </form>
              </div>
              </div>
            </div>
          </div>

        </div>
      </section>
<!-- /.content -->


<script type="text/javascript">
    $(document).ready(function() {
        // Untuk sunting
        $('#vote-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id_kandidat').attr("value",div.data('id_kandidat'));
            modal.find('#nama_kandidat').attr("value",div.data('nama_kandidat'));
        });
    });
</script>


