<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Site Properties -->
    <title>Surgery - Specialties - Totally Healthcare</title>

    <!-- You MUST include jQuery before Fomantic -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
</head>
<body>
<?php require_once('menu.php'); ?>

<div class="ui  container" style="padding-top: 50px; padding-bottom: 25px;">
    <h1 class="le-purp" id="people-title">Surgical Specialties</h1>
    <img class="ui fluid image" src="assets/images/surgery-cropped.png" alt="gastroenterology imagery">
</div>

<div class="ui container">
    <div class="row">
        <div class="column">
            <h2 class="le-purp">Areas covered:</h2>
            <ul>
                <li><h2 class="le-purp">Orthopedic</h2></li>
                <li><h2 class="le-purp">Urology</h2></li>
                <li><h2 class="le-purp">Colorectal</h2></li>
                <li><h2 class="le-purp">Vascular</h2></li>
                <li><h2 class="le-purp">Plastic</h2></li>
                <li><h2 class="le-purp">Reconstructive</h2></li>
                <li><h2 class="le-purp">Spinal</h2></li>
                <li><h2 class="le-purp">Gynaecology</h2></li>
            </ul>
            <p>The combination of reductions in average length of stay and a switch to day-case surgery has meant the NHS has often been able to manage demand and reduce the number of hospital beds. However, it is suggested the average length of stay has reduced only slightly in recent years, therefore providing little relief from the rising demand for surgical treatment services.</p>
            <p>We work in partnership with hospitals to provide cost-effective insourcing solutions through a full range of surgical services and specialties. We can help you meet the rising demand for surgery including diagnostic procedures to help you reduce waiting times and ensure your waiting list backlog is cleared.</p>
            <p>Our solutions can provide surgical services all the way from the patient entering the hospital, to post-surgical clinics following local process using local pathways. Our surgical teams can include consultant anaesthetists, consultant surgeons and specialist nurses who will provide high levels of patient care to ensure a quick safe recovery. Consistency of clinical teams is always assured.</p>
            <p>To see other specialties provided by Totally Healthcare, <a href="index.php#specialties">click here</a></p>
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
