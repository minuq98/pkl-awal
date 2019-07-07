
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

      <!--Grid row-->
          <!--/.Card-->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-7 mb-4">

          <!--Card-->
          <div class="card mb-3">

            <!--Card content-->
            <div class="card-body">

			  <div class="list-group list-group-flush">
                
              	<a class="list-group-item list-group-item-action waves-effect">Terdapat 
                  <span class="badge badge-warning badge-pill "><?php  echo $url; ?>
                    <i class="fas fa-arrow-up ml-1"></i>
                  </span>
                  <span class="badge badge-danger">URL</span>
                </a>

                <a class="list-group-item list-group-item-action waves-effect"> URL Teratas 
                  <span class="badge badge-primary"><?php      echo strtoupper($most_visited->short_url);?>
                  </span>
                Sebanyak
                  <span class="badge badge-pill  badge-success "><?php      echo strtoupper($most_visited->hit);?> <i class="fas fa-arrow-up ml-1">Akses</i>
                  </span>
                   User  
                <span class="badge badge-danger"><?php      echo strtoupper($most_visited->username);?>
                  </span>
                </a>

                <a class="list-group-item list-group-item-action waves-effect">
                <?php  if($most_visited_mine == NULL){
                        echo 'Anda belum pernah menambahkan url apapun';
                        ?>
              
                  <a class="btn btn-primary " href="<?php echo base_url(' tambah_url') ?>" > <i class="fas fa-plus"> </i>   klik Untuk  Menambahkan Url</a>
                  <?php  }else{
                      ?>
                    URL Anda Teratas
                    <span class="badge badge-primary">
                  <?php echo strtoupper($most_visited_mine->short_url)  ;?>
                   </span>
                   Dengan <span class="badge badge-warning badge-pill ">
                   <?php echo strtoupper($most_visited_mine->hit)  ;}?>  
                    <i class="fas fa-arrow-up ml-1"></i>
                  
                   </span>
                   <span class="badge badge-danger">
                       AKSES
                  
                   </span>
                 </a>
              </div>

              
            </div>

          </div>
          <!--/.Card-->
              <!-- List group links -->

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
