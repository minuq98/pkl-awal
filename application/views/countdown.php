<!DOCTYPE html>
<html>
   <head>
      <link rel="shortcut icon" href="https://cdn3.iconfinder.com/data/icons/ringtone-music-instruments/512/letter-c-key-keyboard-2-512.png">
            <link rel="dns-prefetch" type="text/css" href="<?=  $url->url ; ?>">

      <link rel="stylesheet" type="text/css" href="<?php echo base_url('') ;?>assets/css/my_custom/countdown.css">
      <title>CRUD</title>
   </head>
   <body>
      <div class='body'>
         <span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
         </span>
         <div class='base'>
            <span></span>
            <div class='face'></div>
         </div>
      </div>
      <div class='longfazers'>
         <span></span>
         <span></span>
         <span></span>
         <span></span>
      </div>
<!--       <script type="text/javascript">
         var count = 3; // Timer
         var redirect = "/"; // Target URL

         function countDown() {
            var timer = document.getElementById("timer"); // Timer ID
            if (count > 0) {
               count--;
               timer.innerHTML = "This page will redirect in " + count + " seconds."; // Timer Message
               setTimeout("countDown()", 1000);
            } else {
               window.location.href ='<?=  $url->url ; ?>';
            }
         }
   

      </script> -->      
      <form id="redirect" action="<?= base_url('redirect'); ?>" method="post">
         <input type="hidden" name="url" value="<?= $url->url ?>">
      </form>
   <h1 id='timer'>
      </h1>
         <script type="text/javascript">
            var timeleft = 3;
            var downloadTimer = setInterval(timer,1000);
            function timer() {
               document.getElementById("timer").innerHTML ="This page will redirect in " +timeleft + "seconds.";
               timeleft =timeleft - 1;
               if(timeleft <= 0) {
                  clearInterval(downloadTimer);
                  document.getElementById("redirect").submit();
               }
            }
         </script>
   </body>
</html> 
