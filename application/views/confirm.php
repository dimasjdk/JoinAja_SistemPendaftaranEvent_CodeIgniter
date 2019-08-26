<!DOCTYPE HTML>

<html>

<head>


  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

 <link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/images/join/logo.png" >



  <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>

  <!-- Custom Theme files -->

  <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>

  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

  <!-- animation-effect -->

  <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">

  <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>

  <link href="<?php echo base_url();?>assets/color/default.css" rel="stylesheet" media="screen">

  <script src="<?php echo base_url();?>assets/js/modernizr.custom.js"></script>

  <script src="<?php echo base_url();?>assets/js/jquery.dlmenu.js"></script>

  <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

  <script src="<?php echo base_url();?>assets/js/jquery.smooth-scroll.min.js"></script>

  <!-- <script src="<?php echo base_url();?>assets/js/custom.js"></script> -->

  <script src="<?php echo base_url();?>assets/contactform/contactform.js"></script>



  <script>

    $(function(){

      $('input[name="kategori"]').on('click',function(){

        if($(this).val()=='mhs'){

          $('#nim').show();

          $('#progdi').show();

          $('#alamat').hide();

        }

        else{

          $('#alamat').show();

          $('#nim').hide();

          $('#progdi').hide();

        }

      });

    });

  </script>

  <script>

  function myFunction() {

      var x = document.getElementById('jawab');

      if (x.style.display === 'none') {

          x.style.display = 'block';

      } else {

          x.style.display = 'none';

      }

  }

  function myFunction1() {

      var x = document.getElementById('jawab1');

      if (x.style.display === 'none') {

          x.style.display = 'block';

      } else {

          x.style.display = 'none';

      }

  }

  function myFunction2() {

      var x = document.getElementById('jawab2');

      if (x.style.display === 'none') {

          x.style.display = 'block';

      } else {

          x.style.display = 'none';

      }

  }

  function myFunction3() {

      var x = document.getElementById('jawab3');

      if (x.style.display === 'none') {

          x.style.display = 'block';

      } else {

          x.style.display = 'none';

      }

  }

  function myFunction4() {

      var x = document.getElementById('jawab4');

      if (x.style.display === 'none') {

          x.style.display = 'block';

      } else {

          x.style.display = 'none';

      }

  }

  function myFunction5() {

      var x = document.getElementById('jawab5');

      if (x.style.display === 'none') {

          x.style.display = 'block';

      } else {

          x.style.display = 'none';

      }

  }

  function myFunction6() {

      var x = document.getElementById('jawab6');

      if (x.style.display === 'none') {

          x.style.display = 'block';

      } else {

          x.style.display = 'none';

      }

  }

  function myFunction7() {

      var x = document.getElementById('jawab7');

      if (x.style.display === 'none') {

          x.style.display = 'block';

      } else {

          x.style.display = 'none';

      }

  }

  function myFunction8() {

      var x = document.getElementById('jawab8');

      if (x.style.display === 'none') {

          x.style.display = 'block';

      } else {

          x.style.display = 'none';

      }

  }

  function myFunction9() {

      var x = document.getElementById('jawab9');

      if (x.style.display === 'none') {

          x.style.display = 'block';

      } else {

          x.style.display = 'none';

      }

  }

  function myFunction10() {

      var x = document.getElementById('jawab10');

      if (x.style.display === 'none') {

          x.style.display = 'block';

      } else {

          x.style.display = 'none';

      }

  }

  function myFunction11() {

      var x = document.getElementById('jawab11');

      if (x.style.display === 'none') {

          x.style.display = 'block';

      } else {

          x.style.display = 'none';

      }

  }

  </script>

    <script>

// Set the date we're counting down to

var countDownDate = new Date("May 4, 2019 07:00:00").getTime();



// Update the count down every 1 second

var x = setInterval(function() {



    // Get todays date and time

    var now = new Date().getTime();



    // Find the distance between now an the count down date

    var distance = countDownDate - now;



    // Time calculations for days, hours, minutes and seconds

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));

    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

    var seconds = Math.floor((distance % (1000 * 60)) / 1000);



    // Output the result in an element with id="demo"

    document.getElementById("demo").innerHTML = days + "d - " + hours + "h - "

    + minutes + "m - " + seconds + "s ";



    // If the count down is over, write some text

    if (distance < 0) {

        clearInterval(x);

        document.getElementById("demo").innerHTML = "EXPIRED";

    }

}, 1000);

</script>

  <script>

   new WOW().init();

  </script>


</head>

<body>
      <div class="container">
        <h1 style="text-align:center">JOIANAJA.COM</h1>
        <br> 
        <div class="jumbotron">
          <form class="" action="<?php echo base_url('Confirm/store');?>" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="email" class="form-control" name="email" placeholder="Inputkan Emailmu"  style="text-align:center"/>
            <br>
            <input type="submit" name="confirm" value="Confirm & Get Your QRCode" class="btn btn-lg btn-block btn-primary">
          </form>
        </div>
      </div>

</body>

</html>

