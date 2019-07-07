


  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="<?php if($this->session->userdata('is' == "admin")){ echo base_url().'beranda_admin';}else{ echo base_url('beranda_user');} ?>">Home Page </a>
            <span>/</span>
            <span>User</span>
          </h4>

        
        </div>

      </div>
      <!-- Heading -->

      <!--Grid row-->
          <!--/.Card-->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">
  
  <?php
  echo validation_errors();
  echo form_open('aksi_url'); ?>  
  <h1 class="h1 text-center" >Tambah Url</h1><br>


<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Nama URL</span>
  </div>
<input type="url" required name="url" >
</div>

<center>
      <input class="btn btn-primary" type="submit" value="Simpan">
      <?php echo form_close(); ?> 
            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      
      
      </div>
      <!--Grid row-->

    
  </main>
  <!--Main layout-->

