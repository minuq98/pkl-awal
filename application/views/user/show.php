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
	              <center>
		               <a class="btn btn-primary " href="<?php echo base_url('tambah_user') ?>" > <i class="fas fa-plus"></i>Tambah</a>
                  </center><br>
	                  <table class="table table-hover">
		               <thead class="blue lighten-2 text-capitalize text-center text-white">
                  		<tr>
                  			<th>No</th>
                  			<th>Nama Lengkap</th>
                  			<th>Nama User</th>
                  			<th>Email User</th>
                  			<th>Jenis User</th>
                  			<th>Dibuat </th>
                  			<th>Diupdate</th>
                           <th>Gagal Terhitung</th>
                  			<th>Aksi</th>						
                  		</tr>
                  	</thead>
		             <?php $no = $from +1;
      		       foreach ($user as $u) { ?>
               		<tbody class="text-center ">
                  		<tr>
                  			<td><?php echo $no++ ?></td>
                  			<td><?php echo $u->nama ?></td>
                  			<td><?php echo $u->username ?></td>
                  			<td><?php echo $u->email ?></td>
                  			<td><?php echo $u->is_admin ?></td>
                  			<td><?php echo $u->createdAt ?></td>
                  			<td><?php echo $u->updatedAt ?></td>
                           <td><?= $u->count   ?></td>
                  			<td><center>
                  			<a class="btn btn-warning" href="<?php echo base_url('ubah_user/').$u->id; ?>" ><i class="fa fa-paper-plane"></i> EDIT</a>
                  			<a class="btn btn-danger" href="<?php echo base_url('hapus_user/').$u->id; ?>"><i class="fa fa-eraser"></i> Hapus</a></center></td>
                  		</tr>
                     </tbody>
		               <?php } ?>
	                 </table>
                                         <div class="row">
                        <div class="col">
                          <?php   echo $this->pagination->create_links();?>
                           <!--Tampilkan pagination-->
                        </div>
                     </div>
   
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