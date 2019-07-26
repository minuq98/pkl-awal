
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
<!--         <div class="col-md-2 mb-4"></div> -->
        <!--Grid column-->
         <div class="col-md-12 mb-4">
          <!--Card-->
            <div class="card">
            <!--Card content-->
               <div class="card-body    ">
                <form action="<?php echo  base_url('detail');   ?>" method="post">
                  <center>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend ">
                        <span class="input-group-text  " id="basic-addon3">Pilih Tanggal</span>
                        <input type="hidden" name="title" value="<?= $title  ?>">
                     <input type="date"  name="date" value="<?= $date  ?>">     
                     </div>
                     
                     <input class=" input-group-text btn-primary " type="submit" value="Tampilkan Chart <?= $title ?>" >
                    </div>
               
               </form>  
                       </div>
            </div>
          <!--/.Card-->
         </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
       <!--Grid row-->
      <div class="row wow fadeIn">
        <!--Grid column-->
         <div class="col-md-12 mb-4">
          <!--Card-->
            <div class="card">
            <!--Card content-->
               <div class="card-body    ">
                
               <canvas id="date"></canvas>
               </div>
            </div>
          <!--/.Card-->
         </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
       <!--Grid row-->
      <div class="row wow fadeIn">
        <!--Grid column-->
         <div class="col-md-12 mb-4">
          <!--Card-->
            <div class="card">
            <!--Card content-->
               <div class="card-body    ">
                                  
                     <table class="table table-hover">
                <!-- Table head -->
                <thead class="blue-grey lighten-4">
                  <tr>
                    <th>No</th>
                    <th>Ip Address</th>
                    <th>Browser</th>
                    <th>Version</th>
                    <th>Platform</th>
                    
                  </tr>
                </thead>
                <!-- Table head -->
              <?php $no = 1 ?>
              <?php foreach ($log as $row): ?>
                <!-- Table body -->
                <tbody>
                  <tr>
                    <td><?= $no++  ?></td>
                    <td><?= $row->ip ?></td>
                    <td><?= $row->browser ?></td>
                    <td><?= $row->version ?></td>
                    <td><?= $row->platform ?></td>
                    
                  </tr>
                </tbody>
              <?php endforeach ?>                  
                <!-- Table body -->
              </table>
              <!-- Table  -->

                     
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
    var ctxL = document.getElementById("date").getContext('2d');
    var date = new Chart(ctxL, {
      type: 'line',

      data: {
        labels: <?= $waktu  ?>,

        datasets: [
          {
            label: <?= $dateJson ?>,
            backgroundColor: [
              'rgba(0, 137, 132, .2)',
            ],
            borderColor: [
              'rgba(0, 10, 130, .7)',
            ],
            data: <?= $count  ?>
          }
        ]
      },
      options: {
        responsive: true
      }
    });


         //line


  </script>

</html>
