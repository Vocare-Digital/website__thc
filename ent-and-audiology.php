<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Site Properties -->
    <title>ENT and Audiology - Specialties - Totally Healthcare</title>

    <!-- You MUST include jQuery before Fomantic -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
</head>
<body>
<div class="ui very wide sidebar inverted vertical menu">
    <a class="close item"><i class="large close icon"></i></a>
    <a class="header item" href="../index.html" >Home</a>
    <a class="header item" href="../why-choose-us.html">Why choose us?</a>
    <a class="header item" href="../quality-and-governance.html">Quality</a>
    <a class="header item" href="../contact-us.html">Contact Us</a>
    <a class="header item" href="../news.html">News</a>
    <div class="header item">Specialties</div>
    <a class="item" href="gastroenterology.html">Gastroenterology and Endoscopy</a>
    <a class="item" href="ophthalmology.html">Ophthalmology</a>
    <a class="item" href="surgery.html">Surgical specialties</a>
    <a class="item" href="dermatology.html">Dermatology</a>
    <a class="item" href="ent-and-audiology.html">ENT and Audiology</a>
    <a class="item" href="respiratory.html">Respiratory</a>
    <a class="item" href="rheumatology.html">Rheumatology</a>
    <a class="item" href="anaesthetics.html">Anaesthetics and Pain Management</a>
    <a class="header item" href="../people.html">People</a>
    <a class="item" href="../consultants.html">Consultants</a>
    <a class="item" href="../nurses-and-ahp.html">Nurses and AHP</a>
</div>
<div class="pusher">
    <!-- nav bar -->
    <div class="ui top fixed borderless menu transparent" >
      <a class="header item" href="../index.html">
        <img class="ui nav image"  src="../assets/images/thweblogo.png">
      </a>
    <div class="right menu hamburger-menu">
      <a class="item" id="hamburger">
        <i class="big fitted content icon"></i>
      </a>
    </div>
    </div>
    <!-- end of nav bar -->


<div class="ui container" style="padding-top: 50px; padding-bottom: 25px;">
    <h1 class="le-purp" id="people-title">ENT and Audiology</h1>
    <img class="ui fluid image" src="assets/images/audio-cropped.png" alt="audiology imagery">
</div>

<div class="ui container">
    <div class="row">
        <div class="column">
            <p>GPs made nearly 900,000 ENT referrals in 2017/18, accounting for 7.6% of all referrals to secondary care (NHS England, 2017). Over nine million people in England are living with some form of hearing loss (Action on Hearing Loss, 2015).</p>
            <p>To provide support to hospitals we offer Ear Nose and Throat (ENT) and Audiology services. This includes a full pathway service from first attendance in clinic, pre-assessment, surgery and post-procedure follow up using specialist consultants and expert nursing teams.</p>
            <p>To see other specialties provided by Totally Healthcare, <a href="index.php#specialties">click here</a></p>

        </div>
    </div>
</div>

    <?php require_once('footer.php'); ?>
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
