    <!-- Header -->
    <header class="masthead text-center">
      <div class="container">
        <h1 class="text-uppercase text-white mb-0 ">PEMILIHAN KETUA OSIS</h1>
        <h2 class="font-weight-light mb-0 text-white">SMK NEGERI 1 KAWALI</h2> <br>
        <form class="btn-group">
          <button type="button" class="btn btn-lg btn-primary js-scroll-trigger" data-toggle="modal" data-target="#myLogin">Memilih</button>
        </form>
        <h2 class="font-weight-light mb-0"> <br>Saatnya memilih di dunia digital<br>
                                            "Langsung, Umum, Bebas, Rahasia, Jujur dan Adil"</h2>
      </div>
    </header>

    <!-- Kandidat Grid Section -->
    <section class="portfolio" id="kandidat">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Kandidat</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <?php foreach($kandidat as $k){?>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" >
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-3x">No. <?php echo $k->id_kandidat;?> </i> 
                  <br><?php echo $k->nama_kandidat;?>
                </div>
              </div>
              <img class="img-fluid " src="<?php echo base_url('assets/gambar/'); echo $k->foto?>" alt="<?php echo $k->nama_kandidat;?>">
            </a>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <!-- Tentang Section -->
    <section class="bg-custom text-white mb-0" id="tentang">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Tentang</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">e-Voting 2.0 adalah Aplikasi Berbasis Web yang berfungsi untuk memilih para calon pemimpin secara cepat dan efisien dengan sistem yang terkomputasi.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">e-Voting 2.0 merupakan hasil upgrade dari versi sebelumnya dimana ada beberapa peningkatan seperti : Peningkatan Design User Experience, Kerahasiaan pemilih, Adanya informasi kandidat, Adanya informasi pemenang suara dan lain-lain.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Kontribusi Section -->
    <section id="kontribusi">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Kontribusi</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Nama" required="required" data-validation-required-message="Dimohon untuk memasukkan nama anda.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Alamat surel" required="required" data-validation-required-message="Dimohon untuk memasukkan alamat surel(email).">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Kritik</label>
                  <textarea class="form-control" id="saran" rows="5" placeholder="Kritik" required="required" data-validation-required-message="Dimohon untuk memasukkan kritik."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Saran</label>
                  <textarea class="form-control" id="saran" rows="5" placeholder="Saran" required="required" data-validation-required-message="Dimohon untuk memasukkan saran."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Daylight Team</h4>
            <p class="lead mb-0"> Aqil Gifari  <br> Indra Yuliana</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Terhubung dengan kami</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">e-Voting 2.0</h4>
            <p class="lead mb-0">PEMILIHAN KETUA EXIT<br>
                                SMK NEGERI 1 KAWALI</p>
          </div>
        </div>
      </div>
    </footer>
