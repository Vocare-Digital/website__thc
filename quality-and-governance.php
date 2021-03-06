
<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Quality and Governance - Totally Healthcare</title>

    <!-- You MUST include jQuery before Fomantic -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
    <style>
        .row-fixed-height {
            min-height: 151px !important;
        }
    </style>
</head>
<body>
<?php require_once('menu.php'); ?>

<div class="ui container" style="padding-top: 50px; padding-bottom: 25px;">
    <h1 class="le-purp" id="people-title">Quality</h1>
</div>

<div class="ui container">
    <div class="row">
        <div class="column">
            <p>Totally Healthcare is part of <a href="https://www.totallyplc.com">Totally plc</a> – one of England's leading healthcare providers, working across more than 230 locations nationwide to address the challenges of increased demand on health services by delivering high-quality care.</p>
            <p>As part of the Totally plc group of companies, our approach to providing high quality, safe services is described below:</p>
            <table class="ui celled table" style="color: white !important">
                <tr class="green-box row-fixed-height">
                    <td><h3>Are services safe?</h3></td>
                    <td>
                        <p>We have: </p>
                        <ul>
                            <li>Robust risk management of systems</li>
                            <li>Sound recruitment of well qualified staff</li>
                            <li>Good systems for monitoring safety and improvements in care</li>
                        </ul>

                    </td>
                </tr>
                <tr class="stripe row-fixed-height">
                    <td><h3>Are services effective?</h3></td>
                    <td>
                        <p>We: </p>
                        <ul>
                            <li>Audit our outcomes and also any changes we make so that we're sure we've made improvements</li>
                            <li>Monitor our outcomes and make changes when needed</li>
                            <li>Support staff to do the right thing</li>
                        </ul>
                    </td>
                </tr>
                <tr class="green-box row-fixed-height">
                    <td><h3>Are services caring?</h3></td>
                    <td>
                        <p>We: </p>
                        <ul>
                            <li>Take careful notice of feedback</li>
                            <li>Listen to our staff and help them to create a culture of care</li>
                        </ul>
                    </td>
                </tr>
                <tr class="stripe row-fixed-height">
                    <td><h3>Are services reactive?</h3></td>
                    <td>
                        <p>We: </p>
                        <ul>
                            <li>React appropriately if things aren't right</li>
                            <li>Deal with feedback openly and constructively</li>
                            <li>Listen to patients and staff</li>
                            <li>React to good practice advice as it arises</li>
                        </ul>
                    </td>
                </tr>
                <tr class="green-box row-fixed-height">
                    <td><h3>Are services well-led?</h3></td>
                    <td>
                        <p>We: </p>
                        <ul>
                            <li>Provide clarity and leadership from the top</li>
                            <li>Support managers and clinical staff to continually improve</li>
                            <li>Work hard to support good staff who are encouraged to deliver the best care</li>
                        </ul>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</div>

<div class="ui main fluid container">
    <div class="info-banner">
        <h1 class="white">Our Quality Statement</h1>
    </div>
</div>

    <div class="ui container">
    <div class="row">
        <div class="column">
            <p>Our aim is excellence in care and patient safety.</p>
            <p>Our highly experienced clinical team is committed to providing a quality patient experience in a wide range of specialities, helping to reduce patient waiting times.</p>
            <p>We work to local and national quality standards in whatever we do and our management team, who have more than 40 years’ experience between them, ensure that we comply or excel in our services.</p>
            <p>Quality and safety are a priority for us throughout the service: from recruiting only the best clinicians through to setting up our clinical sessions to the highest standards.  We prepare and mobilise using well-tried and tested approaches to support clinicians, patients and local teams.  Most of all we assist in reducing the risks patients face by waiting too long for diagnosis or treatment.</p>
            <p>Through working in this way, we ensure that all staff working with us understand our absolute commitment to delivering safe, efficient and kindly care.</p>
            <p>Totally Healthcare Ltd (THC) will always seek external accreditation wherever it is required, and our service is benchmarked using national and local standards e.g. BSG, JAG, RCOP- Quality standards Ophthalmology.</p>

            <p>Totally Healthcare believes the key to good governance is embedded in the culture of the company at all levels. This is supported with the following measurable processes: </p>
            <ul>
                <li>Robust registration criteria to ensure the highest quality of clinical staff</li>
                <li>Regular improvement and learning processes including regular policy reviews</li>
                <li>A thorough audit framework programme</li>
                <li>A systematic process for gathering and analysing patient feedback</li>
                <li>A regular cycle of KPI monitoring</li>
                <li>Adherence to national Standards for multiple specialties</li>
            </ul>
            <p>Totally Healthcare works within a heavily regulated sector and the standards they expect, together with the requirements of our commissioners and customers set clear parameters for us to work to. We carefully design and expertly deliver clinical services that are safer for both patients and organisation alike. This ensures a clinical effective insourcing service solution.</p>

        </div>
    </div>
</div>


<div class="ui main fluid container">
    <div class="info-banner">
        <h1 class="white">Our Clinical Governance Framework</h1>
    </div>
</div>

    <div class="ui  container">
    <div class="row">
        <div class="column">
            <p>We are committed to ensuring the safety of patients, staff and the public through the integrated management of all aspects of governance and risk</p>
            <p>
                <img src="assets/images/gov_framework.png" class="ui fluid centered image" />
            </p>

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
