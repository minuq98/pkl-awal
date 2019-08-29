  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
      <div class="container-fluid mt-5">
      <!-- Heading -->
         <div class="card mb-4 wow fadeIn">
            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">
               <h4 class="mb-2 mb-sm-0 pt-1">
                  <a href="<?php if($this->session->userdata('is' == "admin")){ echo base_url().'beranda_admin';}else{ echo base_url('beranda_user');} ?>" >Home Page </a>
                  <span>/</span>
                  <span>User</span>
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
               	<form action="<?php echo  base_url('ubah_profil');   ?>" method="post">
               	
               	<h1 class="h1 text-center" >Update User</h1><br>
                  <div class="form-group mb-3">
                     <label for="namaLengkap">Nama Lengkap</label>
                        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $u->id ?>">
                        <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $u->nama ?>">
                  </div>
                  <div class="form-group mb-3">
                     <label for="namaUser">Nama User</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $u->username ?>">
                  </div>
                  <div class="form-group mb-3">
                     <label for="namaUser">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $u->email?>">
                  </div>
                  <div class="form-group mb-3">
                     <label for="namaUser">Password</label>
                        <input type="text" name="password" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>	
	           <?php } ?>
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

