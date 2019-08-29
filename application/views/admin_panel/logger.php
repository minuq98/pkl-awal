  
   <main class="pt-5 mx-lg-5">
      <div class="container-fluid mt-5">
      <!-- Heading -->
         <div class="card mb-4 wow fadeIn">
        <!--Card content-->
            <div class="card-body d-sm-flex">
               <h4 class="mb-2 mb-sm-0 pt-1">
                  <a href="<?php if($this->session->userdata('is' == "admin")){ echo base_url().'beranda_admin';}else{ echo base_url('beranda_user');}  ?>">Home Page</a>
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

                           </td>
                  <div class="card-body">
                  <form class="d-flex justify-content-between" name="form_search" action="<?php echo base_url('log') ;?>">
                  <!-- Default input -->
                     <input type="search" required name="key" class="form-control form-control-lg" id="basic-url" placeholder="Type Your Query" aria-describedby="basic-addon3">
                     <button class="btn btn-primary btn-sm my-0 p" type="submit"  title="Search "><i class="fa fa-search"></i></button>
                  </form>
                  <!-- <form method="get" class="d-flex justify-content-end" action="<?php base_url('log') ;?>">
                     <button class="btn btn-danger btn-sm my-0 p" type="submit" name="reset" value="reset" title="Reset Search Result"><i class="fa fa-times"></i></button>
                  </form> -->
                  <br/>
                     <center>
                     <table class="table table-hover table-inverse ">
                        <thead class="blue lighten-2">
                           <tr class="text-capitalize text-white">
			                     <th>No</th>
			                     <th>Tipe</th>
			                     <th class="text-center">Data</th>
			                     <th >Level</th>
			                     <th>Dibuat</th>
                              <!-- <th>Detail</th> -->
                           </tr>
                        </thead>
		                   <?php

                          $no =$page+1;
                        foreach($user as $u){ ?>
                        <tbody >
                           <tr >
			                     <td ><?php echo $no++ ;?></td>
			                     <td ><?php echo $u->title; ?></td>
			                     <td ><?php echo $u->descript; ?> </td>
                            <td><?php echo $u->type ;?></td>
			                     <td><?php echo $u->createdAt ;?></td>
                              <!-- The Modal -->
                              <!-- <td>
                              <button class="btn btn-outline-primary " data-toggle="modal" data-target="#myModal"> <i class="fa fa-info"> </i> </button>
                                      <div class="modal fade" id="myModal">
                                        <div class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                            <div class="modal-header badge-info ">
                                              Detail                                        <button class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true" class="text-white">
                                                &times;
                                              </span></button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                &emsp;&emsp;&emsp;&emsp;{ <br>
                                                <?php $a= json_decode($u->descript);
                                                  foreach ($a as $key=>$value) {
                                                    echo '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"'.$key.'" => "'.$value.'",<br>';
                                                  }
                                                ?>
                                                &emsp;&emsp;&emsp;&emsp;}
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td> -->
                           </tr>
                        </tbody>
		                   <?php } if(count($user) == 0){  echo "<tr>";
                        echo "<td colspan='5'><marquee  direction='right' >No record found.</td>";
                        echo "</tr>";
                        }?>
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
         <!--card mb-4 -->
      </div>
      <!--Fluid-->

</main>
  <!--Main layout-->
<!--   <style type="text/css">th{
cursor:pointer;
}
</style>
 -->
<!-- <th  onclick="submitform('postdata4')">Dibuat
      <form action="<?php //echo base_url('log') ;?>" name="postdata4" method="post">
            <input type="hidden" name="4" value="createdAt"/>
        </form>
      </th>
       -->
<!-- <script>

$( "th" ).click(function(){
    $(this).toggleClass('active');
});
function submitform(formname) {
    document[formname].submit();
}
</script> -->
