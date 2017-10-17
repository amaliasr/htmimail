<?php $this->load->view('for_admin/header'); ?>
<section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Organisasi</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
           <form action="" method="POST" role="form">
         
           <div class="form-group">
             <div class="page-header">               
                <a href="<?=site_url('admin/organisasi_add');?>">  
                  <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
            </span>
                </a>

            </div>
            
            <!-- ===================== HERE ===================== -->

                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                       
                          
                       <?php 
                       $no = 1;
                       foreach ($tampil as $key) {?>
                         
                       
                        <tr>
                          <td><?=$no++;?></td>
                          <td><?=$key->nama;?></td>
                          <td>
                              <a href="<?=site_url('admin/organisasi_edit/').$key->id_organisasi;?>"><span class="fa fa-edit" title="Edit"></span></a>
                              <a href="<?=site_url('admin/organisasi_delete/').$key->id_organisasi;?>"><span class="fa fa-trash" title="Delete"></span></a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                  </table>
                </div>  
           </div>
         </form>
        </div>
    </section>
<?php $this->load->view('for_admin/footer'); ?>