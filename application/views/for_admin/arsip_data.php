<?php $this->load->view('for_admin/header'); ?>
<section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Data Pengarsipan</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
         
          
            
            <!-- ===================== HERE ===================== -->

                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                          <th>No.Surat</th>
                          <th>Organisasi</th>
                          <th>Jenis</th>
                          <th>Surat</th>
                          <th>Pengurus</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach ($tampil as $key) {?>
                         
                        
                        <tr>
                          <td><?=$no++;?></td>
                          <td><?=$key->nomor_surat;?></td>
                          <td><?=$key->nama;?></td>
                          <td><?=$key->jenis;?></td>
                          <td><?=$key->surat;?></td>
                          <td><?=$key->nama_pengurus;?></td>
                          <td><?=$key->gambar;?></td>
                          <td>
                              <a href=""><span class="fa fa-trash"></span></a>
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