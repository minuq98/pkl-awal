<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
   <link rel="shortcut icon" href="https://cdn3.iconfinder.com/data/icons/ringtone-music-instruments/512/letter-c-key-keyboard-2-512.png">
   <title>CRUD</title>
  <!-- Author Meta -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/css/my_custom/login.css">
</head>

<body>

   <div class="login-page">
      <div class="form" >
      <?php if ($this->session->userdata('errorLogin')): ?>
         <h4>Maaf, username atau password salah</h4>
         <?php endif; ?>
         <?php echo form_open(base_url('aksi')); ?>
         <input type="text" required minlength="4" placeholder="username" name="username"/>
         <input type="password" required placeholder="password" name="password" />
         <button  type="submit" >Login </button>
         <?php echo form_close(); ?>
      </div>
   </div>

   <script type="text/javascript">
     $('.message a').click(function(){
      $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
   });
     
   </script>
</body>

</html>