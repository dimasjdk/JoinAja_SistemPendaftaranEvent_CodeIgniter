<!DOCTYPE HTML>
<html>
<head>
  <?php include_once('master.php'); ?>

</head>
<body>
  <?php include_once('layouts/partials/navigation.php');  ?>

  <div id="intro" style="">
    <div class="intro-text">
      <div class="container wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
        <div class="row">
          <div class="col-md-12">
            <div class="brand">
              <img src="<?php echo base_url();?>assets/images/join/maskot.png" alt="" height="225px" width="175px" style="padding: 10px;">
              <!--<div class="line-spacer"></div>-->
              <br><br>
              <p class="caption-text animated typewrite" data-period="2000" data-type='[ "<strong>Kreasikan Eventmu Bersama Kami</strong>" ]'>
              </div>
              <!--<div class="line-spacer"></div>-->
              <div class="cloud cloudAnimate"></div>

            </div>
          </div>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:40px">
          <h3 style="background-color: #1c2c3e;" class="time-header">TIME REMAINING</h3>
          <h4 style="background-color: #1c2c3e;" class="time-detail" id="demo"></h4>
        </div>
      </div>
    </div>
    <div id="about" class="home-section bg-white wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-10">
            <div class="section-heading">
              <h2>ABOUT JOINAJA</h2>
              <br>
              <p style="text-align: justify; color: white;"><strong>Joinaja.com</strong>  adalah salah satu situs penyedia layanan pendaftaran event di Indonesia dengan fitur utama barcode yang diperoleh tiap pesertanya, para mitra joinaja dapar menggunakan
              akses website join aja untuk mengelola acara atau event yang sedag berlangsung, 
              Pendaftaran online juga ini dapat membantu para peserta untuk mendaftar sebuah event jika jarakanya jauh.
             </p>
            </div>
            <div class="cloud cloudAnimate" style="top:20%;"></div>
            <img src="<?php echo base_url();?>assets/images/join/poster.png" alt="Poster" width="100%">
          </div>
        </div>
      </div>
    </div>

    <div id="speakers" class="home-section bg-blue wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s" > <!-- style="background-color: #2E8B57" -->
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="section-heading">
              <!-- <h2>SPEAKERS</h2> -->

              <!-- INI YANG DI TAMBAHKAN  -->
            </div>
          </div>
          <img src="<?php echo base_url();?>assets/images/join/alur.png" alt="" class="img-responsive" width="100%" />

          <div class="cloud cloudAnimate" style="top:10%;"></div>
        </div>
      </div>
    </div>

    

  <div id="register" class="home-section bg-white wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s" style="margin-top:-10%">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="section-heading">
          <h2>SIMPLE PENDAFTARAN EVENT</h2>
        <br>
          <!-- <div class="alert alert-danger">Mohon Maaf <strong>Pendaftaran SEMNASTI 2019 telah di TUTUP</strong></div> -->
        </div>
      </div>
          <!-- <img src="<?php echo base_url();?>assets/images/tutupan.png" alt="Registration Closed" width="100%"> -->
            
      <div style="color: white;" class="col-md-offset-3 col-md-6">
        <form class="" action="<?php echo base_url('peserta/store');?>" method="post">

          <input type="hidden" name="_token" value=" csrf_token() ">
          <div class="form-group">
            <input type="hidden" name="pin" class="form-control" value="<?php echo substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz",3)),0,5)?>" readonly="true">
          </div>
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" />
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email"/>
          </div>
          <div class="form-group">
            <input type="tel" name="telp" class="form-control" placeholder="No HP / No Wa" />
          </div>
          <div class="form-group">
            <label for="kategori" style="font-size:16px"><strong>Pilih Jumlah Tiket</strong></label><br>
            <input type="radio" name="kategori" value="mhs"> Banyak
            <input type="radio" name="kategori" value="umum"> Tunggal
          </div>
          <div class="form-group" id="nim" style="display:none">
            <input type="text" name="nim" class="form-control" placeholder="Jumlah tiket" hidden="true" />
          </div>
          <div class="form-group" id="progdi"  style="display:none">
            <input type="text" name="progdi" class="form-control" placeholder="Alamat" hidden="true" />
          </div>
          <div class="form-group" id="alamat"  style="display:none">
            <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap" hidden="true"/>
          </div>
          <div class="text-center">
            <input type="submit" name="Submit" value="Daftar" class="btn btn-lg btn-block btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
  <br>

  <div id="faq" class="home-section bg-gradient wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s" >  <!--style="background-color: #2E8B57"-->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Frequently Asked Question</h2>
          </div>
          <div class="cloud cloudAnimate" style="top:20%;"></div>
          <div class="cloud cloudAnimate" style="top:50%;"></div>
          <div class="col-md-8 col-md-offset-2" style="text-align:justify">
            <div class="panel-group" id="faqAccordion">
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Bagaimana Cara Gabung Jadi Mitra Joinaja ?</a>
                  </h4>

                </div>
                <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      Hubungi admin join aja melalui email joinaja_2019@gmail.com
                      untuk dapat melakukan kerja sama dalam penyelanggaraan event
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Berapa Biaya Pendaftaran Menjadi Mitra Joinaja  ?</a>
                  </h4>

                </div>
                <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      silahkan hubungi admin joinaja melalui nomor telphone dibawah ini<br>
                      <strong>SONYA || 081234987561</strong>
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Apa Saja Keunggulan dari situs Joinaja ?</a>
                  </h4>

                </div>
                <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      <ul>
                        <li>Fitur Otomatis </li>
                        <li>Sistem Keamanan Terjaga</li>
                        <li>User Frendly</li>
                        <li>Harga Terjangkau</li>
                      </ul>
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q:   Melalui Apa Saja Pembayaran Mitra Joinaja bisa dilakukan ?</a>
                  </h4>

                </div>
                <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      Untuk sementara Pembayaran melalui rekening baru dapat dilakukan ke :<br>
                      <b>304401018162532</b><b> (BRI)</b><br>
                      <b>A/n : CV. Joainaja </b>
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default ">
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4" style="cursor: pointer;">
                  <h4 class="panel-title">
                    <a  class="ing">Q: Apakah Ada Batas Waktu Untuk Melakukan Pembayaran Mitra Joinaja ?</a>
                  </h4>

                </div>
                <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p class="answer-question" style="text-align:left;">
                      <b>Ada, batas maksimal pembayaran daftar mitra adalah 2x24jam</b>.
                      Dikarenakan jika tidak segera melakukan konfirmasi pembayaran akan digeser ke mitra yang lain
                    </p>
                  </div>
                </div>
              </div>
              

            </div>
            <!--/panel-group-->
          </div>

        </div>
      </div>
    </div>

    <!-- <div id="sponsor" class="home-section bg-white wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
    <div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="section-heading">
    <h2>OUR SPONSORS AND MEDIA PARTNERS</h2>
    <div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
    <img src="<?php echo base_url();?>assets/img/team/a.png" alt="" class="img-responsive" />
    <h4>My Republik</h4>
  </div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
<div class="box-team wow bounceInDown">
<img src="<?php echo base_url();?>assets/img/team/a.png" alt="" class="img-responsive" />
<h4>Kompas</h4>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
<div class="box-team wow bounceInDown">
<img src="<?php echo base_url();?>assets/img/team/a.png" alt="" class="img-responsive" />
<h4>DinusTech</h4>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
<div class="box-team wow bounceInDown">
<img src="<?php echo base_url();?>assets/img/team/a.png" alt="" class="img-responsive" />
<h4>Indoprinting</h4>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
-->
<div id="contact" class="home-section spacer wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="color-light">
          <!-- <h2 class="wow bounceInDown" data-wow-delay="0s">MARK YOUR CALENDAR</h2>
          <p class="lead wow bounceInUp" data-wow-delay="1s">10 April 2018</p> -->
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once('layouts/partials/footer.php');  ?>
<script type="text/javascript">
var TxtType = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 1000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) {
    delta /= 2;
  }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

window.onload = function () {
  var elements = document.getElementsByClassName('typewrite');
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-type');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #2f2f2f;color:#2f2f2f;}";
  document.body.appendChild(css);
};
</script>
</body>
</html>
