<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <title>TSAW</title>
  </head>
  <style media="screen">
    body{
      font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }
  </style>
  <body>
      <div id="video-wrap" class="video-wrap" style="width:100%;">
    <div class="main-page__gif">
    <div class="main-page" style="height:100vh; min-height:100vh;">
        <div class="row main-page__row">
          <div class="col-md-2">
          </div>
          <div class="col-md-5  main-logo-container">
            <img class="img-fluid" src="img/logo1.png" alt="TSAW logo">
          </div>
          <div class="col-md-2">
          </div>
        </div>
        <div class="row" style="position:relative; top:5%; -webkit-transform: translateY(-5%);
      transform: translateY(-5%);">
          <div class="col-md-2">

          </div>
          <div class="col-md-8">
            <div class="typing">
              <h2 id="target" class="img-header">Making Humanity Interplanetary</h2>
            </div>
          </div>
          </div>

          <div class="row" style="position:relative; bottom:-33%;">
              <div class="col-md-5">

              </div>
              <div class="col-md-4">
                <div class="make-me">
                  <span style="font-size: 35px;">
                    <i class="fas header-go fa-angle-double-down"></i>
                  </span>
                </div>
              </div>
          </div>
      </div>
    </div>
    <video preload="metadata" autoplay loop id="my-video" muted>
      <source src="file/video.mp4" type="video/mp4">
    </video>
    </div>
  <?php include('header.php'); ?>
  <section class="main-content">
    <div class="container-fluid mission">
      <div class="row">
        <div class="col-md-4" style="height:400px;">
          <div class="nose-img" style="margin-left: -1500px;">

          </div>
          <div class="body-img" style="margin-left: -1500px;">

          </div>
          <div class="tail-fin-img" style="margin-left: -1500px;">

          </div>
        </div>
        <div class="col-md-7" style="height:400px; margin-top:20px; ">
          <h2 style="font-size: 55px;color: #4fbfee;font-weight: 700;"><center>Our Mission</center></h2>
      <p style="text-align: justify; font-size: 25px;">TSAW is dedicated to building advanced, feasible & affordable technology that can be used on earth as well as other planets in the coming future.</p>
      <p style="font-size:20px;">We are working on two fronts: </p>
      <p class="mission-point">
        Space exploration to make humanity a multi-planetary species
      </p>
      <p class="mission-point">
        Sustainable development of our mother earth by focusing on tackling the issue with the environment, pollution, wastelands, energy production and rehabilitation, old left homes/lands, waste management etc.
      </p>
        </div>
      </div>
    </div>
  </section>
  </body>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script src="js/background.js"></script>
  <script type="text/javascript">
  $('#my-video').backgroundVideo();
  $('#my-video').backgroundVideo({
    $videoWrap: $('#video-wrap'),
    $outerWrap: $(window),
    $window: $(window),
    minimumVideoWidth: 400,
    parallax: true,
    parallaxOptions: {
      effect: 1.5
    },
    pauseVideoOnViewLoss: true
  });
  $(document).ready(function(){
    setTimeout(function(){
          $("#video-wrap").css('width','100%');
  },300);
  });

  $(".header-go").click(function() {
    $('html,body').animate({
        scrollTop: $(".header").offset().top},
        'slow');
});

// sticky navbar
setTimeout(function(){
  window.onscroll = function() {Sticky()};
  var sticky = $(".header").offset().top;
  function Sticky() {
    console.log(sticky);
    if (window.pageYOffset >= sticky) {
      $('.header').addClass("sticky");

      setTimeout(function(){
      $('.nose-img').animate({
        'marginLeft':'0px'
      },400);

      $('.nose-img').animate({
        'marginTop':'32px'
      },500);

    //   setTimeout(function(){
    //   $(".tail-fin-img").effect( "shake", { direction: "left", times: 4, distance: 4}, 700 );
    // },900);
    },1200);

      setTimeout(function(){
      $('.body-img').animate({
        'marginLeft':'-10px'
      },400);

      $('.body-img').animate({
        'marginTop':'116px'
      },500);
    },700);

      $('.tail-fin-img').animate({
        'marginLeft':'-12px'
      },400);

      $('.tail-fin-img').animate({
        'marginTop':'300px'
      },500);

    }

    else {
      $('.header').removeClass("sticky");
    }
  };
},400);


// alert($(window).width());
  </script>


</html>
