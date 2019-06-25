    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

      <a class="logo-wrapper waves-effect">
        <img src="https://static1.squarespace.com/static/58d006b0e4fcb591d4c1a2ce/t/5af5f3440e2e725de5b5e516/1560439745959/" >
      </a>

      <div class="list-group list-group-flush">
        <a href="
            <?php if($this->session->userdata('is' == "admin")){echo "dashboard";}else{echo "dashboardU";} ?> " 
            class="list-group-item list-group-item-action <?php if($this->uri->segment(2)=="dashboard" || $this->uri->segment(2)=="dashboardU" ){echo "active";}?> waves-effect">
          <i class="fas fa-chart-pie mr-3" ></i>Dashboard
        </a>
        <a href="<?php echo base_url(). 'index.php/admin/profil'; ?>" 
            class="list-group-item  list-group-item-action <?php if($this->uri->segment(2)=="profil"){echo "active";}?> waves-effect">
          <i class="far fa-id-badge mr-3"></i>Profile</a>
        
        <?php 
          if($this->session->userdata('is') =="admin"){         ?>
            <a href="<?php echo base_url(). 'index.php/admin/index'; ?>" 
              class="list-group-item list-group-item-action <?php if($this->uri->segment(2)=="index"){echo "active";}?> waves-effect">
          <i class="fas fa-users mr-3"></i>User</a>
        <?php } ?>
        <a href="<?php echo base_url(). 'index.php/admin/indexU'; ?>" 
          class="list-group-item list-group-item-action <?php if($this->uri->segment(2)=="indexU"){echo "active";}?> waves-effect">
          <i class="fas fa-laptop-code mr-3"></i>Url</a>

      </div>

    </div>
    <!-- Sidebar -->

