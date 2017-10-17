<?php $this->load->view('for_user/header'); ?>

  <body style="background-image: ('/assets/img/header-bg.JPG')">

    <!-- Header -->
    <!-- <header class="masthead"> -->
      <div class="container">
        <div class="intro-text">
          <br>
          <center>
            <a href="<?=site_url('login')?>">
            <img src="<?=base_url()?>assets/img/logos/Logo-Polinema-asli.png" class="img-responsive" alt="Image" width="50">
          <img src="<?=base_url()?>assets/img/logos/hmti.png" class="img-responsive" alt="Image" width="50"></a>
        </center>
          <div class="desc">
          <div class="container">
            <div class="row" ">
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                
              </div>
              <div class="col-sm-4 col-md-4">
                <div class="tabulation animate-box">

                  <!-- Nav tabs -->


                   <!-- Tab panes -->
                  <div class="tab-content">
                   <div role="tabpanel" class="tab-pane active" id="flights">
                    <div class="row"">
                      <div class="col-sm-12 mt">

                       <form action="<?=site_url('login/DoLogin')?>" method="POST" role="form">
                         <div class="input-field">
                          <label for="date-start">Username</label>
                          <input type="text" class="form-control" name="username" />
                        </div>
                        <div class="input-field">
                          <label for="date-start">Password</label>
                          <input type="password" class="form-control" name="password" />
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary btn-block" value="Login">
                      </div>
                      
                       </form>
                      
                      <div class="col-xs-12">
                        
                      </div>
                    </div>
                    
                   </div>
                  <div>

                  </div>
                  </div>

                </div>
              </div>
              
            </div>
          </div>
        </div>
        </div>
      </div>
    </header>

 <!-- Portfolio Modals -->

   

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/popper/popper.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?=base_url()?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?=base_url()?>assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?=base_url()?>assets/js/agency.min.js"></script>

  </body>

</html>
