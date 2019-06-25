
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
            <span>Profile</span>
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
            <table class="table ">
               <?php 

                foreach($user as $u){ ?>
    
               <tbody>
                 <tr>
                   <td><strong> Nama</strong>       : <?php  echo $u->nama ?> </td></tr>
                 <tr> <td><strong> Username</strong>        : <?php echo $u->username ?></td></tr>
                  <tr><td><strong> Password</strong>        : <?php echo $u->password ?></td></tr>
                  <tr><td><strong> Email</strong>       : <?php echo $u->email ?></td></tr>
                  <td><strong> Jenis User</strong>        : <?php 
                    if($u->is_admin =="not"){
                      $u->is_admin="user";
                    }
                      echo $u->is_admin ?></td>
    
                 </tr>
               </tbody>
<?php } ?>
             </table> 

<a class="btn btn-warning " href="editP" > <i class="fas fa-paper-plane"></i> Ganti</a>

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
