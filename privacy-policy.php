
<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Privacy Policy - Totally Healthcare</title>

    <!-- You MUST include jQuery before Fomantic -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/base.css">

</head>
<body>
<?php require_once('menu.php'); ?>


    <div class="ui main container" style="padding-top: 50px; padding-bottom: 25px;">
        <h1 class="le-purp">Privacy Policy</h1>
        <p>Totally Healthcare is part of the Totally plc group of companies. The full Data Protection Policy and Privacy Statement is on the <a href="https://www.totallyplc.com/about-us/data-protection-privacy-policy/">totally plc</a> website</p>
        <p>If you have any questions about data protection please contact <a href="mailto:dpo@totallyplc.com">dpo@totallyplc.com</a></p>


        <h1 class="le-purp">Modern Slavery Act</h1>
        <p>For our response to the Modern Slavery Act please visit the <a href="https://www.totallyplc.com/wp-content/uploads/2019/09/ModernSlaveryStatement_Sept2019.pdf" target="_blank" title="Totally plc website">totally plc website</a></p>



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

