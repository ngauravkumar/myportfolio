<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
    <head>
        <title>Gaurav Kumar Portfolio</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Responsive HTML5 Website Landing Page for Developers">
        <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
        <link rel="shortcut icon" href="favicon.ico">  
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <!-- Global CSS -->

        <?= $this->Html->css('/plugins/bootstrap/css/bootstrap.min.css') ?>
        <!-- Plugins CSS -->

        <?= $this->Html->css('/plugins/font-awesome/css/font-awesome.css') ?>

        <!-- github calendar css -->

        <?= $this->Html->css('/plugins/github-calendar/dist/github-calendar.css') ?>
        <?= $this->Html->css('intlTelInput') ?> 
        <!-- github acitivity css -->
        <?= $this->Html->css('/plugins/github-activity/src/github-activity.css') ?>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">


        <!-- Theme CSS -->  
        <?= $this->Html->css('styles.css', ['id' => 'theme-style']) ?>
        <?= $this->Html->css('custom.css') ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head> 


    <body>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1318774378176525";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>


        <?= $this->element('top'); ?>



        <div class="gau">
            <?= $this->fetch('content'); ?>
        </div>

        <?= $this->element('bottom'); ?>
        <!-- Javascript -->          

        <?= $this->Html->script('/plugins/jquery-1.11.3.min.js') ?>
        <?= $this->Html->script('/plugins/bootstrap/js/bootstrap.min.js') ?>
        <?= $this->Html->script('/plugins/jquery-rss/dist/jquery.rss.min.js') ?>
        <!-- github calendar plugin -->
        <?= $this->Html->script('https://s3-eu-west-1.amazonaws.com/marajobs/frontend/js/intlTelInput.js?v=2') ?>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <?= $this->Html->script('plugins/github-calendar/dist/github-calendar.min.js') ?>
        <!-- github activity plugin -->
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
        <?= $this->Html->script('/plugins/github-activity/src/github-activity.js') ?>
        <!-- custom js -->
        <?= $this->Html->script('main.js') ?>
        <?= $this->Html->script('validator.js') ?>
        <?= $this->Html->script('contact.js') ?>

        <script>
            $("#phoneno3").intlTelInput({
                autoHideDialCode: false,
                autoPlaceholder: "polite",
                preferredCountries: [loc],
                separateDialCode: true,
                utilsScript: "https://s3-eu-west-1.amazonaws.com/marajobs/frontend/js/utils.js"
            }).done(function () {
                // analytics
                $('#phoneno3').on('keyup', function () {
                    $("#phone_full3").val($("#phoneno3").intlTelInput("getNumber"));
                });
            });
        </script>
    </body>
</html> 

