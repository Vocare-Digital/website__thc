

<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Why choose us? - Totally Healthcare</title>

    <!-- You MUST include jQuery before Fomantic -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
    <style>

        .why_choose_us__infographic__card
        {
            background-color: #44318D !important;
            height: 10em;
        }
        .why_choose_us__infographic__card__content {
            display: flex;
            align-items: center;
            text-align: center;
        }
        .why_choose_us__infographic__symbols {
            display:flex !important;
            align-items: center !important;
            margin-top: -0.25em !important;
        }

        .why_choose_us__infographic__symbols p {
            font-size: 7em !important;
        }


      .ribbon {
 font-size: 1.8em !important;

 width: 100%;

 position: relative;

 color: #fff;
 text-align: center;
 padding: 1em 0.5em 1.5em 0.5em; /* Adjust to suit */
 margin: 2em auto 2.5em; /* Based on 24px vertical rhythm. 48px bottom margin - normally 24 but the ribbon 'graphics' take up 24px themselves so we double it. */
}

        .rib-dbl
        {
             padding: 0.5em !important;
        }
        .ribbon-content {
            width: 100%;
            margin: auto;
            font-size: 0.8em;
        }
 .ribleft .ribbon-content {
             margin: auto;
        }
         .ribright .ribbon-content {
           margin-left: -4em;

        }
         .rib-dbl .ribbon-content {
           margin-left: -5em;

        }
        .ribleft {
            box-shadow: 0px 5px 15px #666;
            background: #00887a;
/*             text-align: center;*/
        }
        .ribright {
            box-shadow: -5px 5px 15px #666;
             background: #77A6F7;
/*            text-align: left;*/

        }
.ribleft:before, .ribright:after {
 content: "";
 position: absolute;
 display: block;
 bottom: -1.7em;

 z-index: -1;

}
        .ribleft:before
    {
         border: 2em solid #0a7062;
        }
        .ribright:after {
     border: 2em solid #5191f7;
        }
.ribleft:before {
 left: -8.2em;
 border-right-width: 8em;
 border-left-color: transparent;
}
.ribright:after {
 right: -8.2em;
 border-left-width: 8em;
 border-right-color: transparent;
}
.ribright .ribbon-content:after  {
 content: "";
 position: absolute;
 display: block;
 border-style: solid;
 border-color: #2c5da5 transparent transparent transparent;
 bottom: -2.1em;
}
.ribleft .ribbon-content:before {
 content: "";
 position: absolute;
 display: block;
 border-style: solid;
 border-color: #055759 transparent transparent transparent;
 bottom: -2.1em;
}
.ribleft .ribbon-content:before  {
 left: 0;
 border-width: 2.2em 0 0 2.2em;
}
.ribright .ribbon-content:after {
 right: 0;
 border-width: 2.2em 2.2em 0 0;
        }



        .ribbon-content h1 {
            font-weight: normal !important;
        }

        .quotes.container {
          margin-top: 4em;
        }

        .quotes {
            padding: 0 8em !important;
        }

        .quote {
          position: relative;
          background: #00887a;
          border-radius: .4em;
          color: #FFF;
          padding: 1em;
          font-size: 2em;
          line-height: 1em;
        }

        .quote.left:after {
          left: 20%;
          transform: scaleX(-1);
        }

        .quote:after {
          content: '';
          position: absolute;
          bottom: 0;
          left: 80%;
          width: 0;
          height: 0;
          border: 1.7em solid transparent;
          border-top-color: #00887a;
          border-bottom: 0;
          border-right: 0;
          margin-left: -0.8em;
          margin-bottom: -1.6em;
        }

       @media (max-width:1023px){
            .hidden-xs{display:none!important}
            .replaceribbon{display:run-in!important; margin-left: 20px;}
            .eight {display:none!important;}
            .quote {margin-top: 2em;}
        }
        @media (min-width:1024px){
            .hidden-xs{display:run-in!important}
            .replaceribbon{display:none!important}
        }
    </style>
</head>
<body>
<?php require_once('menu.php'); ?>


<div class="ui mini-container" style="padding-top: 50px; padding-bottom: 25px">
    <h1 class="le-purp" id="people-title">Why choose us?</h1>
</div>
    
    <div class="ui fluid container">
    <div class="info-banner">
        <h1 class="white">About us</h1>
    </div>
</div>
     <div class="ui mini-container">
     
        <p>Totally Healthcare works with hospitals to provide high-quality services across multiple specialties. Watch our video to learn how insourcing operates across the UK and Ireland to reduce the pressure on hospitals caused by long waiting lists.</p>
         <div style="text-align: center">
            <iframe src="https://player.vimeo.com/video/397980151" width="800" height="600" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>  
         </div> 
    </div> 
    
    <div class="ui fluid container">
    <div class="info-banner">
        <h1 class="white">We consistently receive excellent patient feedback</h1>
    </div>
</div>
    
    <div class="ui container" style="padding-top: 50px; padding-bottom: 25px;">
    <div class="hidden-xs">
        <h1 class="ribbon ribleft">
     <span style="position: relative; top: 0.2em; font-size: 2em;">94%</span> <span class="ribbon-content"> of patients said their appointment time suited them</span> <img src="assets/images/bedtime.png" class="fluid" style="float: right; margin-top: -0.4em; " />
    </h1>
        <h1 class="ribbon ribright">
       <img src="assets/images/doctor.png" class="fluid"  style="float: left; margin-top: -0.4em;"/> <span style="position: relative; top: 0.2em; left: -1.9em; font-size: 2em;">100%</span> <span class="ribbon-content"> of patients felt the unit staff attended well to their needs </span>
    </h1>
        <h1 class="ribbon ribleft">
       <span style="position: relative; top: 0.2em; font-size: 2em;">100%</span> <span class="ribbon-content"> of patients felt they were treated with dignity and respect</span> <img src="assets/images/staff.png" class="fluid" style="float: right; margin-top: -0.4em; "/>
    </h1>
        <h1 class="ribbon ribright rib-dbl">
    <img src="assets/images/treat.png" class="fluid" style="float: left; margin-top: -0.2em;"/> <span style="position: relative; top: 0.25em; left: -2.2em; font-size: 2em;">100%</span> <span class="ribbon-content" > <span style="position: relative; top: -0.5em;">of patients said the quality of care they received was<br />either <em>excellent</em> (93%) or <em>very good</em> (7%)</span></span>
    </h1>
    </div>
    <div class="replaceribbon">
        <h1 style="color: #00887a">94% <span class="ribbon-content"> of patients said their appointment time suited them</span></h1>
         <h1 style="color: #77A6F7">100% <span class="ribbon-content"> of patients felt the unit staff attended well to their needs </span></h1>
         <h1 style="color: #00887a">100% <span class="ribbon-content"> of patients felt they were treated with dignity and respect</span></h1>
         <h1 style="color: #77A6F7">100% <span class="ribbon-content"> of patients said the quality of care they received was<br />either <em>excellent</em> (93%) or <em>very good</em> (7%)</span></h1>

    </div>
    </div>




  <div class="ui centered middle aligned grid quotes stackable mini-container">
    <div class="eight wide column">
      <div class="left quote">
        <blockquote>
          "The staff in the unit were excellent. All needs were met. My thanks to all involved"
        </blockquote>
      </div>
    </div>
    <div class="eight wide column">
      <div class="quote">
        <blockquote>
          "Care and quality of care is excellent, all staff could not do enough. They do a great job, especially on Sunday. I really want to thank each and every one"
        </blockquote>
      </div>
    </div>
    <div class="eight wide column">
      <div class="quote">
        <blockquote>
          "I was looked after very well by all the staff involved with my procedure. Thank you all"
        </blockquote>
      </div>
    </div>
  </div>

    <div class="replaceribbon">

      <div class="quote">
        <blockquote>
          "The staff in the unit were excellent. All needs were met. My thanks to all involved"
        </blockquote>
      </div>

      <div class="quote wide column">
        <blockquote>
          "Care and quality of care is excellent, all staff could not do enough. They do a great job, especially on Sunday. I really want to thank each and every one"
        </blockquote>
      </div>

      <div class="quote wide column">
        <blockquote>
          "I was looked after very well by all the staff involved with my procedure. Thank you all"
        </blockquote>
      </div>

    </div>

<div class="ui main fluid container">
    <div class="info-banner">
        <h1 class="white">Our bespoke insourcing solutions will reduce patient waiting times</h1>
    </div>
</div>


<a name="pcp"></a>
    <div class="ui mini-container">
        <div class="ui stackable grid"> <!-- five column -->
            <div class="four wide column" >
                <div class="ui fluid card why_choose_us__infographic__card ">
                    <div class="content middle aligned why_choose_us__infographic__card__content"  >
                        <div class="header white" style="margin: 2px auto; font-size: calc(1em + 1vw); font-weight: normal !important;">
                            Patient centred processes
                        </div>
                    </div>
                </div>
                 <ul class="list">
                    <li class="item">Patients are at the heart of our insourcing service solutions</li>
                    <li class="item">We consistently share decision-making</li>
                    <li class="item">Our team is passionate and achieves the highest levels of patient satisfaction</li>
                    <li class="item">We encourage all feedback and shared learning</li>
                    <li class="item">We guarantee end-to-end solutions</li>
                    <li class="item">Continuity of patient care is key</li>
                </ul>
            </div>
                <div class="two wide column middle aligned why_choose_us__infographic__symbols" >
                <p class="le-purp">+</p>
                </div>

             <div class="four wide column">
                <div class="ui fluid card why_choose_us__infographic__card ">
                    <div class="content middle aligned why_choose_us__infographic__card__content"  >
                        <div class="header white"  style="margin: 2px auto; font-size: calc(1em + 1vw); font-weight: normal !important;">
                            Clinical effectiveness
                        </div>
                    </div>
                </div>
                  <ul class="ui list">
                    <li class="item">A robust framework of clinical audit is in place for both outcomes and experience </li>
                    <li class="item">Our clinical teams are highly skilled and trained</li>
                    <li class="item">We have a robust clinical governance structure with board level assurance from Totally plc</li>
                </ul>
            </div>
            <div class="two wide column middle aligned why_choose_us__infographic__symbols ">
                <p class="le-purp">=</p>
            </div>

            <div class="four wide column">
                <div class="ui fluid card why_choose_us__infographic__card">
                    <div class="content  why_choose_us__infographic__card__content">
                        <div class="header white"  style="margin: 2px auto; font-size: calc(1em + 1vw); font-weight: normal !important;">
                            Cost-effective solutions
                        </div>
                    </div>
                </div>
                 <ul class="ui list">
                    <li class="item">Our rates are all inclusive</li>
                    <li class="item">We have improvement objectives to streamline processes</li>
                    <li class="item">We use a trusted and localised workforce to reduce added expenditure</li>
                </ul>
            </div>
    </div>
    </div>

    <?php require_once('footer.php'); ?>
</div>
</body>

<script>
    $('.ui.dropdown')
        .dropdown();

    $('#hamburger').click(function () {
        $('.ui.sidebar')
            .sidebar('show')
    });

    $('.close.item').click(function () {
        $('.ui.sidebar')
            .sidebar('hide')
    });


    $('#mobile-hamburger').click(function () {
      $('.ui.sidebar')
        .sidebar('toggle')
    })
</script>

</html>
<!-- end of the page right here -->
