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
                  <span>URL</span>
               </h4>
            </div>
         </div>
         <!-- Heading -->
         <!--Grid row-->
         <div class="row wow fadeIn">
            <!--Grid column-->
            <div class="col-md-12 mb-4">
               <!--Card-->
               <div class="card">
                  <!--Card content-->
                  <div class="card-body">

                  	<?php foreach($user as $u){ ?>
                  	<form  action="<?php echo base_url('ubah_url'); ?>" method="post">
                      <?php form_open('ubah_url'); ?>
                  	<h1 class="h1 text-center">Update Url</h1><br>

                     <input type="hidden" name="id" value="<?php echo $u->id ?>">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon3">URL Pendek</span>
                        </div>
                        <input type="text" name="short_url" value="<?php echo $u->short_url ?>" minlength="3">
                        <input type="hidden" name="hit" value="<?php echo $u->hit ?>">
                     </div>
                     <center>
			            <input class="btn btn-warning" type="submit" value="Simpan">	
                  	<?php form_close(); } ?>
                  </div>
               </div>
               <!--/.Card-->
            </div>
            <!--Grid column-->
         </div>
         <!--Grid row-->   
      </div>
      <!--Grid row-->
   </main>
   <!--Main layout-->