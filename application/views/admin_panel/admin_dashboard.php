
  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="<?php echo base_url('beranda_admin') ?>" >Home Page </a>
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
          <div class="card ">

            <!--Card content-->
            <div class="card-body">

			  <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action waves-effect">Terdapat
                  <span class="badge badge-success badge-pill pull-right"><?php  echo $user; ?>
                    <i class="fas fa-arrow-up ml-1"></i>
                  </span>
                  <span class="badge badge-danger">USER</span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Terdapat 
                  <span class="badge badge-warning badge-pill "><?php  echo $url; ?>
                    <i class="fas fa-arrow-up ml-1"></i>
                  </span>
                  <span class="badge badge-danger">URL</span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect"> URL Teratas 
                  <span class="badge badge-primary"><?php echo strtoupper($most_visited->short_url);?>
                  </span>
                Sebanyak
                  <span class="badge badge-pill  badge-success"><?php      echo strtoupper($most_visited->hit);?> <i class="fas fa-arrow-up ml-1"></i>
                  </span>
                  <span class="badge badge-danger">AKSES</span>
                 Oleh User  
                <span class="badge badge-danger"><?php      echo strtoupper($most_visited->username);?>
                  </span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">
                 <?php  if($most_visited_mine == NULL){
                     echo 'Anda belum pernah menambahkan url apapun';
                        ?>
              
                  <a class="btn btn-primary " href="<?php echo base_url(' tambah_url') ?>" > <i class="fas fa-plus"> </i>   klik Untuk  Menambahkan Url</a>
                  <?php  }else{?>
                    URL Anda Teratas
                    <span class="badge badge-primary">
                  <?php echo strtoupper($most_visited_mine->short_url)  ;?>
                   </span>
                   Dengan <span class="badge badge-warning ">
                   <?php echo strtoupper($most_visited_mine->hit)  ;}?>  
                    <i class="fas fa-arrow-up ml-1"></i>
                   </span>
                   <span class="badge badge-danger">AKSES</span>

                 </a>
                  
              </div>

              
            </div>


          </div>
          <!--/.Card-->
              <!-- List group links -->

            </div>


          </div>
          <!--/.Card-->

      <!--Grid row-->

      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-9 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">

              <canvas id="myChart"></canvas>

            </div>

          </div>
          <!--/.Card-->

        </div>      
      
      </div>
      <!--Grid row-->

    
  </main>
  <!--Main layout-->
<script>
    // Line
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
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