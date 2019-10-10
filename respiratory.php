<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Site Properties -->
    <title>Rheumatology - Specialties - Totally Healthcare</title>

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
    <h1 class="le-purp" id="people-title">Respiratory</h1>
    <img class="ui fluid image" src="assets/images/respi-cropped.png" alt="gastroenterology imagery">
</div>

<div class="ui container">
    <div class="row">
        <div class="column">
            <p>NHS England suggests respiratory diseases places enormous pressure on the acute healthcare system especially during the winter months. </p>
            <p>Many hospitals need to run additional respiratory clinics to support the increasing demand. This avoids unnecessary admissions by allowing rapid access to respiratory physicians and specialist nurses to enable stable patients to be managed in the community.</p>
            <p>We can provide Consultant respiratory physicians to support hospitals with outpatient services following local process and pathways of care.</p>
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
