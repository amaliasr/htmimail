<?php $this->load->view('for_admin/header'); ?>
<section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Tambah Organisasi</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          
            </div>
            
            <!-- ===================== HERE ===================== -->

                <div class="table-responsive">
                  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <form action="<?=site_url('admin/organisasi_doAdd');?>" method="POST" role="form">
                    
                      <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                      </div>
                    
                      
                    
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>  
           </div>
         </form>
        </div>
    </section>

<?php $this->load->view('for_admin/footer'); ?>