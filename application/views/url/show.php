  <!--Main layout-->
<body>
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
         <div class="row wow fadeIn">
            <!--Grid column-->
            <div class="col-md-12 mb-4">
               <!--Card-->
               <div class="card">
                  <!--Card content-->
                  <div class="card-body">
                     <center>
                     <a class="btn btn-primary " href="<?php echo base_url('tambah_url') ?>" > <i class="fas fa-plus"></i>Tambah</a>
                     </center><br>
                     <div class="data-simplebar">
	                  <table id="url" class="table table-striped  table-sm " cellspacing="0" width="100%">
                        <thead class="blue lighten-2 text-capitalize text-center text-white">
				               <tr>
			                     <th>No</th>
			                     <th>URL Pendek</th>
			                     <th>Nama URL</th>
                     			<th>Akses</th>
                     			<th>Dibuat</th>
                     			<th class="text-center">Action</th>  			
		                     </tr>
	                     </thead>
		                  </tbody>
                        <?php $no = $from+1 ;
		                   foreach ($user as $u) { ?>
		                     <tr>
			                     <td><?php echo $no++ ?></td>
                     			<td><?php echo $u->short_url ?></td>
                     			<td><?php echo $u->url ?></td>
                     			<td><?php echo $u->hit ?></td>
                     			<td><?php echo $u->createdAt ?></td>
                     			<td>
                     			<center>
                        			<a class="btn btn-warning" href="<?php echo base_url('ubah_url/').$u->id; ?>"><i class="fa fa-paper-plane"></i> EDIT</a>
                        			<a class="btn btn-danger" href="<?php echo 'hapus_url/'.$u->id; ?>"><i class="fa fa-eraser"></i> Hapus</a>
                              </center>
                              </td>
		                     </tr>
		                  </tbody>
		               <?php } ?>
	                  </table>
                       <?= $this->pagination->create_links();?>
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

