  <!-- Modal -->
  <div class="modal fade" id="myLogin" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header bg-primary">
             <h4 class="modal-title text-white">e-Voting 2.0</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <!-- form login -->
             <form class="form-horizontal" method="post" action="<?php echo base_url("login_vote/aksi_login");?>">
                <div class="form-group">
                  <label class="control-label col-sm-4" for="id_pemilih">Id Pemilih :</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" maxlength="20" name="id_pemilih" placeholder="Masukan Id User">
                    <?php echo validation_errors(); ?>
                  </div>
                </div>
             <!-- end form login -->
           </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
               Batal
            </button>
            <button type="submit" class="btn btn-primary">
               Masuk
            </button>
             
            </form>
           </div>
         </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

    <!-- Modal -->
  <div class="modal fade" id="mySimulasi" role="dialog">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header bg-warning">
             <h4 class="modal-title">Simulasi</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <!-- form login -->
             <form class="form-horizontal" method="post" action="<?php echo base_url("login_vote/aksi_simulasi");?>">
                <div class="form-group">
                  <label class="control-label col-sm-4" for="id_pemilih"><span class="text-danger">*</span>Id_Pemilih :</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" maxlength="20" name="id_pemilih" placeholder="Masukkan identitas pemilih...">
                    
                  </div>
                </div>
             <!-- end form login -->
           </div>
           <div class="modal-footer">
            <span class="text-danger">*</span>Silahkan masukkan identitas apapun. Seperti, Nama atau NIS 
            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
               Batal
            </button>
            <button type="submit" class="btn btn-primary">
               Masuk
            </button>
             
            </form>
           </div>
         </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>