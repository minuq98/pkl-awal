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
                  <a class="list-group-item list-group-item-action waves-effect">
                  <?php  if($most_visited_mine == NULL){
                        echo 'Anda belum pernah menambahkan url apapun';
                        ?>
                  <a class="btn btn-primary " href="<?php echo base_url('tambah_url') ?>" > <i class="fas fa-plus"> </i>   klik Untuk  Menambahkan Url</a></a>
                  <?php  } else { ?>
                     <canvas id="myChart"></canvas>
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
              
         <div class="card  mb-4">
            <div class="card card-header text-center badge-default">Data URL</div>              
               <!--Card content-->
               <div class="card-body">
              <!-- List group links -->
               <div class="list-group list-group-flush">
                  <a class="list-group-item list-group-item-action waves-effect">Jumlah 
                     <span class="badge badge-warning badge-pill ">
                        <?php  echo $url; ?>
                        <i class="fas fa-arrow-up ml-1"></i>
                     </span>
                     <span class="badge badge-danger">URL</span>
                  </a>
                  <a class="list-group-item list-group-item-action waves-effect"> URL Teratas 
                  <span class="badge badge-primary">
                     <?php  echo strtoupper($most_visited->short_url);?>
                  </span>
                  </a>
                  <a class="list-group-item list-group-item-action waves-effect">
                     Oleh User  
                     <span class="badge badge-danger"><?php      echo strtoupper($most_visited->username);?>
                     </span>
                  </a>
                  <a class="list-group-item list-group-item-action waves-effect">Sebanyak
                     <span class="badge badge-pill  badge-success ">
                        <?phpecho strtoupper($most_visited->hit);?> 
                        <i class="fas fa-arrow-up ml-1">Akses</i>
                     </span>
                </a>
              </div>
              <!-- List group links -->
            </div>
          </div>


      </div>

      <?php } ?>    

<!-- or -->

</body>
   <footer class=" page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn ">
    <!--Call to action-->
      <div class="pt-2">
         <hr class="my-2">
            <a class="btn btn-outline-white" href="#" target="_blank" role="button">   Belajar CODEIGNITER
               <i class="fas fa-graduation-cap ml-2"></i>
            </a>
      </div>
      <!--/.Call to action-->
      <hr class="my-2">
      <!-- Social icons -->
      <div class="pb-3  ">
         <a href="https:www.facebook.com/mdbootstrap" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
         </a>
         <a href="https:twitter.com/MDBootstrap" target="_blank">
           <i class="fab fa-twitter mr-3"></i>
         </a>
         <a href="https:www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
           <i class="fab fa-youtube mr-3"></i>
         </a>
         <a href="https:plus.google.com/u/0/b/107863090883699620484" target="_blank">
           <i class="fab fa-google-plus mr-3"></i>
         </a>
         <a href="https:dribbble.com/mdbootstrap" target="_blank">
           <i class="fab fa-dribbble mr-3"></i>
         </a>
         <a href="https:pinterest.com/mdbootstrap" target="_blank">
           <i class="fab fa-pinterest mr-3"></i>
         </a>
         <a href="https:github.com/mdbootstrap/bootstrap-material-design" target="_blank">
           <i class="fab fa-github mr-3"></i>
         </a>
         <a href="http:codepen.io/mdbootstrap/" target="_blank">
           <i class="fab fa-codepen mr-3"></i>
         </a>
      </div>
      <div class="footer-copyright py-3"></div>
  </footer>
  <!--/.Footer-->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    new WOW().init();
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?= $chartLabel ?>,
        datasets: [{
          label: '5 top visited short url',
          data: <?= $chartValue ?>,
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });




  </script>

</html>
