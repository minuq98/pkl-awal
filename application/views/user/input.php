

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

<form  action="<?php echo base_url('aksi_user'); ?>" method="post">

	<h1 class="h1 text-center" >Tambah User</h1><br>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Nama Lengkap</span>
  </div>
  <input type="text" required name="nama" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Nama User</span>
  </div>
  <input type="text" required name="username" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Password User</span>
  </div>
  <input type="text" required name="password" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Email User</span>
  </div>
  <input type="email" required name="email" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>
<label>Jenis user</label> <br>
			
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      		<input type="radio" required name="is_admin" value="admin" checked> admin

    </div>
    <div class="input-group-text">
    		<input type="radio" required name="is_admin" value="user"> user<br>
  			
    </div>
  </div>
</div>		
			<br>
<center>
			<input class="btn btn-primary" type="submit" value="Tambah">
			
	</form>	
    
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
