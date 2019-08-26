<title>Berhasil</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />

  <link rel="icon" type="image/png" href="http://hmti.dinus.ac.id/semnasti/assets/images/hmtiii.png" >

<link rel="shortcut icon" href="https://i.imgur.com/jAUgIUL.png">

<!-- Custom Theme files -->



<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- animation-effect -->

<link href="{{asset('css/animate.min.css')}}" rel="stylesheet">

<script src="{{asset('js/wow.min.js')}}"></script>

<link href="{{asset('color/default.css')}}" rel="stylesheet" media="screen">

<script src="{{asset('js/modernizr.custom.js')}}"></script>

<script src="{{asset('js/jquery.dlmenu.js')}}"></script>

<script src="{{asset('js/jquery.js')}}"></script>

<script src="{{asset('js/jquery.smooth-scroll.min.js')}}"></script>

<script src="{{asset('js/custom.js')}}"></script>

<script src="{{asset('contactform/contactform.js')}}"></script>



<script>

  $(function(){

    $('input[name="kategori"]').on('click',function(){

      if($(this).val()=='mhs'){

        $('#instansi').show();

        $('#jurusan').show();

        $('#alamat').hide();

      }

      else{

        $('#alamat').show();

        $('#instansi').hide();

        $('#jurusan').hide();

      }

    });

  });

</script>

<script>

 new WOW().init();

</script>

