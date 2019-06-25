


  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page </a>
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

	<?php foreach($user as $u){ ?>
	<form  action="<?php echo base_url(). 'index.php/user/updateU'; ?>" method="post">

	<h1 class="h1 text-center" >Update Url</h1><br>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">id_user</span>
  </div>					
  <input type="hidden" name="id" value="<?php echo $u->id ?>">
 <input type="number" name="id_user" value="<?php echo $u->id_user ?>">

</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Sort Url</span>
  </div><input type="text" name="short_url" value="<?php echo $u->short_url ?>">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Url</span>
  </div>
<input type="text" name="url" value="<?php echo $u->url ?>">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Hit</span>
  </div>
  <input type="number" name="hit" value="<?php echo $u->hit?>">
</div>
<center>
			<input class="btn btn-warning" type="submit" value="Simpan">
			
	</form>	
	<?php } ?>
    
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

