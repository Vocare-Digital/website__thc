<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Totally Healthcare</title>

    <!-- You MUST include jQuery before Fomantic -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://kit.fontawesome.com/c4942e6e02.js"></script>
    <script crossorigin="anonymous" src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
    <style>
        .card {
            min-height: 2%;
            min-width: 5%;
        }

        #specialties .card .content {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .infographic__holder {
            min-height: 400px;
            padding-top: 0.5em;
        }

        .infographic__holder .card {
            min-height: 375px
        }

        .infographic__holder .header {
            padding: 1em 1em;
            background-color: #44318D;
        }

        .infographic__holder .content {
            padding-top: 2em !important;
            padding-bottom: 2em !important;
        }

        .card .green-box a {
            font-size: calc(0.9em + 1vw) !important;
            font-weight: normal !important;
        }
    </style>

</head>
<body>

<?php require_once('menu.php'); ?>

<!-- start of hero -->
<div class="hero">
    <div class="mini-container">
        <div class="ui stackable grid">
            <div class="row">
                <div class="eight wide column">
                    <h1 class="hero-text le-purp">Providing bespoke insourcing solutions<br> to cut patient waiting
                        times<br> across the UK and Ireland</h1>
                </div>
            </div>
            <div class="dividing row"></div>
            <div class="three column center aligned row" style="padding-top: 5em;">
                <div class="column">
                    <div class="content-hover-box" onclick="">
                        <div class="top">
                            <i class="fas fa-pound-sign" style="font-size: 3em;"></i>
                            <p style="font-size: 1.8em; padding-top: 0.2em">
                                Cost-effective insourcing model</p>
                        </div>
                        <div class="bottom">
                            <p style="font-size: 1.4em">By providing bespoke insourcing solutions from specialist
                                clinicians </p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="content-hover-box" onclick="">
                        <div class="top">
                            <i class="fas fa-procedures" style="font-size: 3em;"></i>
                            <p style="font-size: 1.8em;">Utilising your spare capacity</p>
                        </div>
                        <div class="bottom">
                            <p style="font-size: 1.4em">We deliver services across the UK and Ireland close to patients'
                                homes within two weeks</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="content-hover-box" onclick="">
                        <div class="top">
                            <i class="far fa-clipboard-list-check" style=" font-size: 3em;"></i>
                            <p style="font-size: 1.8em;">To cut patient waiting lists</p>
                        </div>
                        <div class="bottom">
                            <p style="font-size: 1.4em">Tackling the problem of long hospital waiting times</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of hero -->

    <!-- rosette content -->
<div class="info-banner" id="banner-under-hero">
    <h1 class="white">We work with hospitals across the UK and Ireland</h1>
</div>
  <!-- end of rosette content -->  
<!-- start of video content -->
     <div class="ui mini-container">
            <p>Totally Healthcare is part of <a href="https://www.totallyplc.com" title="Totally plc website">Totally plc</a> – one of England’s leading healthcare providers, working across more than 230 locations nationwide to address the challenges of increased demand on health services by delivering high-quality care.</p>
         <p>Totally Healthcare supports trusts and hospitals to deliver patient waiting time initiatives across specialties throughout the UK and Ireland. Our Management and clinical teams have more than 40 years of healthcare experience within insourcing in the UK and Republic of Ireland and have helped treat just under a million patients across all specialties.</p>
         <p>Watch how insourcing can reduce long hospital waiting lists.</p>
         <div style="text-align: center">
            <iframe src="https://player.vimeo.com/video/397980151" width="800" height="600" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>  
         </div> 
    </div> 
    <!-- end of video content -->
<!-- rosette content -->
<div class="info-banner">
    <h1 class="white">Totally Healthcare response to COVID-19</h1>
</div>
    <div class="ui mini-container">
         <p>Our ongoing services continue to support hospitals across the UK and Ireland. We are strictly following all the latest guidance to keep our patients, staff and their families protected from the risks associated with the COVID-19 pandemic. 
             For the latest advice on COVID-19, and how to access care should you need to, please visit <a href="https://www.nhs.uk/conditions/coronavirus-covid-19/" target="_blank" title="NHS">NHS website</a>, 
             <a href="https://www.gov.uk/government/organisations/public-health-england" target="_blank" title="Public Health England">PHE website</a>, 
             <a href="https://www.publichealth.hscni.net/news/covid-19-coronavirus" target="_blank" title="HSCNI">HSCNI website</a> or <a href="https://www2.hse.ie/conditions/coronavirus/coronavirus.html" target="_blank" title="HSE">HSE website</a></p> 
    </div>
    <div class="ui container" style="padding-top: 50px; padding-bottom: 25px;">

    <img class="ui fluid image" src="assets/images/Totally Healthcare - covid.PNG" alt="advert">
</div>
    
<!-- rosette content -->
<div class="info-banner">
    <h1 class="white">We drive down hospital waiting lists while keeping patients at the heart of our insourcing
        model</h1>
</div>

<!-- start of more content -->
<div class="mini-container infographic__boxes">
    <div class="infographic__holder">
        <div class="infographic__hider">
            <div class="ui four columns doubling stackable grid">
                <div class="column">
                    <div class="ui transition hidden card infographic__box">
                        <div class="header middle aligned"><h3 class="white" style="text-align: center">1. Identify
                                Requirements</h3></div>
                        <div class="content">
                            <ul class="ui relaxed list" style="font-size: 1.25em;">
                                <li class="item">We meet you to introduce our business and discuss your specific
                                    requirements
                                </li>
                                <li class="item">We create your personal proposal considering all possible options</li>
                                <li class="item">We ensure you deal with the same person at every stage of our process
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="ui transition hidden card infographic__box">
                        <div class="header middle aligned"><h3 class="white" style="text-align: center">2. Plan</h3>
                        </div>
                        <div class="content">
                            <ul class="ui relaxed list" style="font-size: 1.25em;">
                                <li class="item">We do all groundwork through an on-site visit</li>
                                <li class="item">We thoroughly assess local facilities, including a walk through of
                                    patients’ journeys
                                </li>
                                <li class="item">We always deliver in line with all local procedures</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="ui transition hidden card infographic__box">
                        <div class="header middle aligned"><h3 class="white" style="text-align: center">3. Mobilise</h3>
                        </div>
                        <div class="content">
                            <ul class="ui relaxed list" style="font-size: 1.25em;">
                                <li class="item">We agree a go-live date and initiate the mobilisation process</li>
                                <li class="item">All contract arrangements are finalised prior to go-live</li>
                                <li class="item">We can mobilise within two weeks</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="ui transition hidden card infographic__box">
                        <div class="header middle aligned"><h3 class="white" style="text-align: center">4. Evaluate</h3>
                        </div>
                        <div class="content">
                            <ul class="ui relaxed list" style="font-size: 1.25em;">
                                <li class="item">We produce routine audit reports and share all clinical outcomes,
                                    performance information and patient feedback with you
                                </li>
                                <li class="item">We embrace shared learning and invite feedback at all stages of our
                                    process
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of more content -->

<!-- rosette content -->
<div class="info-banner">
    <h1 class="white">We deliver high-quality healthcare in multiple specialities across the UK and Ireland</h1>
</div>
<!-- end of rosette content -->

<!-- start of specialty boxes -->
<a name="specialties"></a>
<div class="mini-container" id="specialties" style="margin: 0 auto;">
    <div class="ui four doubling cards">
        <div class="card">
            <div class="content green-box">
                <a href="gastroenterology.php" class="center aligned header white">Gastroenterology <br>and
                    Endoscopy</a>
            </div>
        </div>

        <div class="card">
            <div class="content green-box">
                <a href="ophthalmology.php" class="center aligned header white">Ophthalmology</a>
            </div>
        </div>

        <div class="card">
            <div class="green-box content">
                <a href="surgery.php" class="center aligned header white">Surgical specialties</a>
            </div>
        </div>

        <div class="card">
            <div class="green-box content">
                <a href="dermatology.php" class="center aligned header white">Dermatology</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="ui four doubling cards">

            <div class="card">
                <div class="green-box content">
                    <a href="ent-and-audiology.php" class="center aligned header white">ENT and Audiology</a>
                </div>
            </div>
            <div class="card">
                <div class="content green-box">
                    <a href="respiratory.php" class="middle center aligned header white" style="align-items: center">Respiratory</a>
                </div>
            </div>
            <div class="card">
                <div class="content green-box">
                    <a href="rheumatology.php" class="center aligned header white">Rheumatology</a>
                </div>
            </div>

            <div class="card">
                <div class="content green-box">
                    <a href="anaesthetics.php" class="middle center aligned header white">Anaesthetics <br>and Pain
                        Management</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end of specialty boxes -->

<!-- rosette content -->
<div class="info-banner">
    <h1 class="white">We have a passionate, trusted and highly skilled workforce</h1>
</div>
<!-- end of rosette content -->

<div class="mini-container">
    <div class="ui stackable grid">
        <div class="column">
            <p>We are looking to increase our team of highly skilled professionals to meet the extremely high demand for
                contracts across the UK and Ireland.</p>
            <p>If you are interested in providing excellent patient care alongside a supportive team of experienced
                healthcare professionals, please contact a member of the team at <a
                        href="mailto:recruitment@totallyhealthcarelimited.com">recruitment@totallyhealthcarelimited.com</a>
                who will discuss the registration requirements with you and are there to support you through the
                process.</p>
            <span class="column" style="text-align: right;">
              <h4>
                  <a href="people.php#working-with-us">Working with us - find out more</a>
              </h4>
          </span>
        </div>

    </div>
</div>

<div class="mini-container">
    <div class="ui three column stackable grid">
        <div class="column">
            <h3>Latest News</h3>
            <div class="ui feed">
                <div class="event">
                    <div class="content">
                        <div class="summary">
                            <a href="news.php#nov20">
                                Totally Healthcare welcomes NHS funding boost
                            </a>
                        </div>
                        <div class="extra text">Following yesterday’s announcement from the Chancellor of increased NHS investment in England to help tackle the 
                            backlog of patients waiting for treatment, Marie Lee, Managing Director of Totally Healthcare welcomes the news&hellip; <a href="news.php#nov20">Read
                        more</a>
                        </div>
                        <div class="meta">
                            23 November 2020
                        </div>
                    </div>
                </div>
                 <div class="event">
                    <div class="content">
                        <div class="summary">
                            <a href="news.php#july20">
                                Mobilising endoscopy services following first phase of the COVID-19 pandemic 
                            </a>
                        </div>
                        <div class="extra text">
                        Kaye Drew, Clinical Mobilisation Lead for THC, shares key insights on delivering healthcare healthcare following phase one of the COVID-19 pandemic after a recent endoscopy service mobilisation. <a href="news.php#july20">Read more</a>
                        </div>
                        <div class="meta">
                            20 July 2020
                        </div>
                    </div>
                </div>
                               
              
            </div>

            <a href="news.php">See all latest news</a>
        </div>

        <div class="center aligned column">
            <img src="assets/images/thlogo-aligned-trans-sm.png" class="ui centered image" width="60%">        
            <br />
             <img src="assets/images/ASF_Blue.jpg" class="ui centered image" width="20%">
        </div>

        <div class="right aligned column">
            <a class="twitter-timeline" data-lang="en" data-height="300" data-width="550" data-link-color="#00887A"
               href="https://twitter.com/TotallyHealthc1?ref_src=twsrc%5Etfw" data-chrome="nofooter">Tweets by Totally
                Healthcare</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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

    $(document).ready(function () {
        $('.hero .content-hover-box').hide();
        $('.hero .content-hover-box').transition({
            animation: 'fade in left',
            duration: 1000,
            interval: 600
        });

        var infographic_visible = false;
        var observer = new IntersectionObserver(function (t) {
            if (t[0].isIntersecting && !infographic_visible) {
                infographic_visible = true;
                setTimeout(function () {
                    $('.infographic__hider .card').transition({
                        animation: 'fade right',
                        duration: 3000,
                        interval: 900
                    })
                }, 0)
            }
        }, {
            threshold: 0.5
        });

        observer.observe(document.querySelector('.infographic__holder'))

    });

</script>

</html>
<!-- end of the page right here -->
