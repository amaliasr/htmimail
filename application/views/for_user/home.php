<?php $this->load->view('for_user/header'); ?>
<?php echo $this->session->id_pengurus; ?>



  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?=site_url('home')?>"><img src="<?=base_url()?>assets/img/logos/hmti.png" class="img-responsive" alt="Image" width="50" height="55"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#so">Organisasi</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('login/logout') ?>">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Selamat Datang <?php echo $this->session->nama; ?> di Persuratan</div>
          <div class="intro-heading">HMTI Polinema</div>

          <a class="btn btn-xl js-scroll-trigger" href="<?=site_url('admin/')?>">Arsip Sekarang</a>

        </div>
      </div>
    </header>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Tentang HMTI</h2>
            <h3 class="section-subheading text-muted">apa itu HMTI?</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-user fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Team Work</h4>
            <p class="text-muted">Kerja tim yang kuat membuat pekerjaan semakin mudah. Maka dari itu HMTI dengan sengaja kita bentuk karakter kerja sama yang baik.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-briefcase fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Profesionalism</h4>
            <p class="text-muted">Mengutamakan profesionalisme yang tinggi, sehingga menjaga performa kinerja yang baik dan mampu bersaing</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-desktop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">IT Based</h4>
            <p class="text-muted">Terlahir dari mahasiswa teknologi informasi dan </p>
          </div>
        </div>
      </div>
    </section>



    <!-- Organisasi -->
    <section id="so">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Struktur Organisasi</h2>
            <h3 class="section-subheading text-muted">Periode 2017/2018</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?=base_url()?>assets/img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Hilmy Setya Purnama</h4>
                    <h4 class="subheading">Ketua Umum</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?=base_url()?>assets/img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Nydia Apriliasari</h4>
                    <h4 class="subheading">Wakil Ketua Umum</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?=base_url()?>assets/img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Meganingtyas</h4>
                    <h4 class="subheading">Bendahara Umum</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?=base_url()?>assets/img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Efita Tria Wardhani</h4>
                    <h4 class="subheading">Sekretaris Umum</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    

   

    <!-- Contact -->
    

<?php $this->load->view('for_user/footer'); ?>