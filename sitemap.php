<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Sitemap - Totally Healthcare</title>

    <!-- You MUST include jQuery before Fomantic -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">

</head>
<body>
<?php require_once('menu.php'); ?>


    <div class="ui container" style="padding-top: 50px;">
        <h1 class="le-purp" id="people-title">Site map</h1>
        <p>
            <ul>
                <li><a href="index.html" class="heading">Home</a></li>
                <li><a href="why-choose-us.html" class="header">Why choose us?</a></li>
                <li><a href="quality-and-governance.html" class="header">Quality</a></li>
            </ul>
                <h2>Specialties</h2>
            <ul>
                <li><a href="specialties/gastroenterology.html" class="header">Gastroenterology and endoscopy</a></li>
                <li><a href="specialties/ophthalmology.html" class="header">Ophthalmology</a></li>
                <li><a href="specialties/surgery.html" class="header">Surgical specialties</a></li>
                <li><a href="specialties/dermatology.html" class="header">Dermatology</a></li>
                <li><a href="specialties/ent-and-audiology.html" class="header">ENT and audiology</a></li>
                <li><a href="specialties/respiratory" class="header">Respiratory</a></li>
                <li><a href="specialties/rheumatology" class="header">Rheumatology</a></li>
                <li><a href="specialties/anaesthetics.html" class="header">Anaesthetics and pain management</a></li>
            </ul>
        <h2>People</h2>
            <ul>
                <li><a href="people.html" class="header">People</a></li>
                <li><a href="consultants.html" class="header">Consultants</a></li>
                <li><a href="nurses-and-ahp.html" class="header">Nurses and ANP</a></li>
            </ul>
            <ul>
                <li><a href="sitemap.html" class="header">Sitemap</a></li>
                <li><a href="contact-us.html" class="header">Contact Us</a></li>
                <li><a href="privacy-policy.html" class="header">Privacy Policy &amp; Modern Slavery Statement</a></li>
            </ul>
        </p>
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
