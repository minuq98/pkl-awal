</header>
  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="<?php if($this->session->userdata('is' == "admin")){ echo base_url().'beranda_admin';}else{ echo base_url('beranda_user');} ?> ?>">Home Page</a>
            <span>/</span>
            <span>Url</span>
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
	<table class="table table-hover">
		<thead class="blue lighten-4">
				<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Tipe Log</th>
			<th>Detail</th>
			<th>Dibuat</th>
			
			
		</tr>
	</thead>
		<?php 
    $no = $this->uri->segment(3) + 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->title ?></td>
			<td><?php echo $u->descript ?></td>
			<td><?php echo $u->type ?></td>
			<td><?php echo $u->createdAt ?></td>
		</tr>
		</tbody>
		<?php } ?>
	</table>

	<?php 
  echo $this->pagination->create_links();
  ?>
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

