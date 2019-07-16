  <!--Main layout-->
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
               <form class="d-flex justify-content-between" name="form_search" action="<?php echo base_url('log') ;?>" method="post">
               <!-- Default input -->
                  <input type="search" required name="key" class="form-control" id="basic-url" placeholder="Type Your Query" aria-describedby="basic-addon3">

                  <button class="btn btn-primary btn-sm my-0 p" type="submit" name="submit" value="submit" title="Search "><i class="fa fa-search"></i></button>
               </form>
               <form method="post" class="d-flex justify-content-end" action="<?php base_url('log') ;?>">
                  <button class="btn btn-danger btn-sm my-0 p" type="submit" name="reset" value="reset" title="Reset Search Result"><i class="fa fa-times"></i></button>
               </form>
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
                     <table class="table table-hover tabe ">
                        <thead class="blue lighten-4">
                           <tr>
			                     <th>No</th>
			                     <th>Tipe Log</th>
			                     <th>Data</th>
			                     <th>Level</th>
			                     <th>Dibuat</th>
                           </tr>
                        </thead>
		                   <?php $no = $page+1 ;
                        foreach($user as $u){ ?>
                        <tbody>
                           <tr>
			                     <td><?php echo $no++ ;?></td>
			                     <td><?php echo $u->title; ?></td>
			                     <td><?php echo $u->descript; ?></td>
			                     <td><?php echo $u->type ;?></td>
			                     <td><?php echo $u->createdAt ;?></td>
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