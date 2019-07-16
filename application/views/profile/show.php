
  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
      <div class="container-fluid mt-5">
      <!-- Heading -->
         <div class="card mb-4 wow fadeIn">
        <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">
               <h4 class="mb-2 mb-sm-0 pt-1">
                  <a href="<?php if($this->session->userdata('is' == "admin")){ echo base_url('beranda_admin');}else{ echo base_url('beranda_user');} ?>" >Home Page </a>
                  <span>/</span>
                  <span>Profile</span>
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
                     <center>
                     <table class="table ">
                        <?php foreach ($user as $u) { ?>
                        <tbody>
                           <tr>
                              <td><strong> Nama Lengkap</strong>       : <?php  echo $u->nama ?> </td></tr>
                           <tr> 
                              <td><strong> Nama User</strong>        : <?php echo $u->username ?></td></tr>
                           <tr>
                              <td><strong> Email User</strong>       : <?php echo $u->email ?></td></tr>
                              <td><strong> Jenis User</strong>        : <?php 
                                 echo $u->is_admin ?></td>
                           </tr>
                        </tbody>
                        <?php } ?>
                     </table> 

                     <a class="btn btn-warning " href="<?php echo base_url('ganti_profil') ?>" > <i class="fas fa-paper-plane"></i> Ganti</a>

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
