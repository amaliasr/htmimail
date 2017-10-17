<?php $this->load->view('for_admin/header'); ?>
<section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Request</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
           <form action="" method="POST" role="form">
         
           <div class="form-group">
             <label for="">Nomor Surat</label>
             <input type="text" class="form-control" id="" placeholder="Nomor Surat">
             <br>
             <label for="">Organisasi</label>
             <select name="" id="input" class="form-control" required="required">
             <option value=""></option></select>
             <br>
             <label for="">Jenis</label>
             <select name="" id="input" class="form-control" required="required">
             <option value="">Peminjaman Gedung</option>
             <option>Peminjaman Perlengkapan</option></select>
             <br>
             <label for="">Surat</label>
             <select name="" id="input" class="form-control" required="required">
             <option value="">Surat Masuk</option>
             <option>Surat Keluar</option></select>
             <br>
             <label for="">Gambar</label>
             <input type="file" name="gambar" class="form-control" id="" placeholder="Input field">
             <p class="help-block text-danger"></p>

           </select>
           </div>
           
         
           
         
           <button type="submit" class="btn btn-primary">Arsipkan</button>
         </form>
        </div>
    </section>
<?php $this->load->view('for_admin/footer'); ?>