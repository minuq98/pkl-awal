  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
      <div class="container-fluid mt-5">
      <!-- Heading -->
         <div class="card mb-4 wow fadeIn">
        <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">
               <h4 class="mb-2 mb-sm-0 pt-1">
                  <a href="<?php echo base_url('beranda_user') ?>">Home Page </a>
                  <span>/</span>
                  <span>Dashboard</span>
               </h4>        
            </div>
         </div>
      <!-- Heading -->
      </div>
        <!--Grid column-->
      <div class="row wow fadeIn">
        <!--Grid column-->
         <div class="col-md-9 mb-4">
         <!--Card-->
            <div class="card">
            <!--Card content-->
               <div class="card-body">
                  <canvas id="myChart"></canvas>
                  <a class="list-group-item list-group-item-action waves-effect">
                  <?php if ($most_visited_mine == NULL) {
                        echo 'Anda belum pernah menambahkan url apapun';
                        ?>
                  <a class="btn btn-primary " href="<?php echo base_url('tambah_url') ?>"> <i class="fas fa-plus"> </i>klik Untuk  Menambahkan Url</a> <?php } else { ?> 
                     URL Teratas Anda
                     <span class="badge badge-primary">
                     <?php echo strtoupper($most_visited_mine->short_url)  ;?>
                     </span> 
                        Dengan 
                     <span class="badge badge-warning badge-pill ">
                        <?php echo strtoupper($most_visited_mine->hit)  ;?>  
                        <i class="fas fa-arrow-up ml-1"></i>
                     </span>
                     <span class="badge badge-danger">
                        AKSES
                     </span>
                  </a>
               </div>
            </div>
          <!--/.Card-->
         </div>      

         <div class="col-md-3 mb-4">
            <div class="card  mb-4">
               <div class="card card-header text-center badge-primary">Data Seluruh URL</div>              
               <!--Card content-->
               <div class="card-body">
              <!-- List group links -->
               <div class="list-group list-group-flush">
                  <a class="list-group-item list-group-item-action waves-effect">Jumlah 
                     <span class="badge badge-warning badge-pill ">
                        <?php  echo $url; ?>
                        <i class="fas fa-arrow-up ml-1"></i>
                     </span>
                  </a>
                  <a class="list-group-item list-group-item-action waves-effect"> URL Teratas 
                     <span class="badge badge-primary">
                        <?php echo strtoupper($most_visited->short_url);?>
                     </span>
                  </a>
                  <a class="list-group-item list-group-item-action waves-effect">
                   Oleh User  
                     <span class="badge badge-danger">
                        <?php echo strtoupper($most_visited->username);?>
                     </span>
                  </a>
                  <a class="list-group-item list-group-item-action waves-effect">
                  Dengan
                     <span class="badge badge-pill  badge-success ">
                        <?php echo strtoupper($most_visited->hit);?>
                        <i class="fas fa-arrow-up ml-1">Akses</i>
                     </span>
                  </a>
               </div>
              <!-- List group links -->
               </div>
            </div>

            <div class="col-md-12 mb-4 ">
            <!--Card-->
               <div class="card mb-4">
                  <div class="card card-header badge-primary">Data Seluruh User</div>
                  <!--Card content-->
                  <div class="card-body">
                     <a class="list-group-item list-group-item-action waves-effect">Jumlah
                        <span class="badge badge-success badge-pill pull-right">
                           <?php  echo $user; ?>
                           <i class="fas fa-arrow-up ml-1"></i>
                        </span>
                     </a>
                  </div>
               </div>
            </div>

         </div>
          <!--/.Card-->     
         <?php } ?>
      </div>
      <!--Grid row-->
   </main>
   <!--Main layout-->
