<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Site Properties -->
    <title>Ophthalmology - Specialties - Totally Healthcare</title>

    <!-- You MUST include jQuery before Fomantic -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
</head>
<body>
<?php require_once('menu.php'); ?>



<div class="ui container" style="padding-top: 50px; padding-bottom: 25px;">
    <h1 class="le-purp" id="people-title">Ophthalmology</h1>
    <img class="ui fluid image" src="assets/images/optha-cropped.png" alt="ophthalmology imagery">
</div>

<div class="ui container">
    <div class="row">
        <div class="column">
            <p>Nationally, ophthalmology accounts for the second highest outpatient attendance of any medical or surgical specialty. The President of the Royal College of Ophthalmologists has warned that patients are losing their sight due to a rise in demand of eye care services and delays in follow up appointments.</p>
            <p>We can provide expert ophthalmologists and specialist clinical teams, working in partnership with hospitals, to provide outpatient clinics and surgical services.
            <p>We can provide a total patient service, including consultation, surgery and aftercare. to include:
                <ul>
                    <li>Cataract and Oculoplastic surgery</li>
                    <li>Oculoplastic</li>
                    <li>Outpatient clinics</li>
                    <li>Nurse pre-assessment clinics</li>
                    <li>Glaucoma</li>
                    <li>Medical Retina</li>
                </ul>
            </p>
            <p>For further information about how our insourcing model can help you, <a href="why-choose-us.php">click here</a></p>
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

