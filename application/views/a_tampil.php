
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
	<center>
		<a class="btn btn-primary " href="tambah" > <i class="fas fa-plus"></i>Tambah</a>
</center><br>
	<table class="table table-hover">
		<thead class="blue lighten-4 text-center">
		<tr >
			<th>No</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Is_admin</th>
			<th>CreatedAt</th>
			<th>UpdatedAt</th>
			<th>Action</th>
						
		</tr>
	</thead>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tbody class="text-center ">
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->is_admin ?></td>
			<td><?php echo $u->createdAt ?></td>
			<td><?php echo $u->updatedAt ?></td>
			<td><center>
			<a class="btn btn-warning" href="<?php echo base_url().'index.php/admin/edit/'.$u->id; ?>"><i class="fa fa-paper-plane"></i> EDIT</a>
			<a class="btn btn-danger" href="<?php echo base_url().'index.php/admin/hapus/'.$u->id; ?>"><i class="fa fa-eraser"></i> Hapus</a></center></td>
		</tr>
</tbody>
		<?php } ?>
	</table>
	
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
