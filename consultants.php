
<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Consultants - People - Totally Healthcare</title>

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
    <h1 class="le-purp" id="people-title">Consultants</h1>
</div>

<div class="ui container">
    <img src="assets/images/consultnt.png" class="ui fluid image">
</div>
<div class="ui fluid container">
    <div class="info-banner">
        <h1 class="white">Who we are looking for</h1>
    </div>
</div>
<div class="ui container">
    <p>We are looking for consultants in all specialties to join our rapidly expanding network of highly-motivated and dedicated healthcare professionals. By working with us you will enjoy the following benefits:
      </p>
    <ul>
        <li>Flexibility to work to suit your availability</li>
        <li>Excellent rates of pay</li>
        <li>Paid travel and accommodation expenses</li>
    </ul>
  
    <p>
    Our team are on hand to make the registration process as efficient as possible for consultants looking to undertake work, below is a list of the registration documents required to register:
    </p>
    <ul>
        <li>Applicants must have been a Consultant for a minimum of 12 months</li>
        <li>Confirmation of Professional Registration (i.e. GMC/IMC)</li>
        <li>A copy of your most recent appraisal</li>
        <li>Proof of indemnity insurance cover for private practice</li>
        <li>Proof of right to work in the UK/Republic of Ireland</li>
        <li>Photo identity documents (Passport or Driving License).</li>
        <li>Two professional references, one of which must be from your current Medical/Clinical Director</li>
        <li>Completion of an enhanced DBS application form</li>
        <li>A completed Occupational Health form and evidence of health immunity status</li>
        <li>Evidence of statutory and mandatory training</li>
        <li>Recent audit data (if applicable)</li>
    </ul>
    

    <p>Please email a copy of your up to date CV to <a href="mailto: recruitment@totallyhealthcarelimited.com">recruitment@totallyhealthcarelimited.com</a> and a member of the team will be in touch.</p>

    <h2>Current vacancies</h2>
      <ul>
        <li><a href="https://www.totallyplc.com/wp-content/uploads/2019/07/Totally-Healthcare-Ltd-Adverts-Website-3.pdf" target="_blank" rel="noopener">Consultant Dermatologists</a></li>
        <li><a href="https://www.totallyplc.com/wp-content/uploads/2019/07/Totally-Healthcare-Ltd-Adverts-Website-4.pdf" target="_blank" rel="noopener">Consultant Gastroenterologists</a></li>
        <li><a href="https://www.totallyplc.com/wp-content/uploads/2019/07/Totally-Healthcare-Ltd-Adverts-Website-5.pdf" target="_blank" rel="noopener">Consultant Opthalmologists</a></li>
    </ul>
    
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

