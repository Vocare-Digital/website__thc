
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
        .map-responsive{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-responsive iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
    </style>
</head>
<body>
<?php require_once('menu.php'); ?>

    <div class="ui container" style="padding-top: 50px; padding-bottom: 25px">
        <h1 class="le-purp" id="people-title">Contact us</h1>
    </div>

    <div class="ui  container">
        <div class="ui  two columns doubling stackable grid">
            <div class="column">
        <address>
            Totally plc<br>
            Cardinal Square West<br>
            10 Nottingham Road<br>
            Derby<br>
            DE1 3QT<br>
            Telephone: +44 (0)20 3866 3330<br>
            Email: <a href="mailto:info@totallyhealthcarelimited.com">info@totallyhealthcarelimited.com</a>
        </address>
            </div>
            <div class="column" >
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1202.6294063551939!2d-1.4693998417155798!3d52.92576919497322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879f113b3f642dd%3A0x9c4c07b2c9a7cfea!2sTotally%20Plc!5e0!3m2!1sen!2suk!4v1569422570877!5m2!1sen!2suk" width="500" height="450" frameborder="0" style="border:0;"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="ui container" style="margin-top: 25px;">
    <div class="ui form">
    <div class="field">
      <label>Name</label>
      <input type="text" name="name" placeholder="Name">
    </div>
    <div class="field">
      <label>Comment</label>
      <textarea name="comment"></textarea>
    </div>
    <a class="mailto-link" href="">
      <div class="ui button">Submit</div>
    </a>
  </div>


  <script type="text/javascript">
      $(document).ready(function () {
        $name = $('.form input[name="name"]')
        $comment = $('.form textarea[name="comment"]')
        $link = $('.mailto-link')

        var updateBody = function () {
          $link.attr(
            'href',
            `mailto:enquiries@totallyhealthcare.com?body=${$comment.val()} - ${$name.val()}`
          )
        }

        $name.on('keyup', updateBody)
        $comment.on('keyup', updateBody)
      })
  </script>
</div>

<!-- end of the content -->

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
</script>

</html>
<!-- end of the page right here -->
