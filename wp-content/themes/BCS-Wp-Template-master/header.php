    <html>
        <head>
            <title><?php print get_blogInfo('name'); ?> :: <?php the_title(); ?></title>

            <script src='<?php print get_template_directory_uri(); ?>/js/jQuery.js'></script>
            <script src='<?php print get_template_directory_uri(); ?>/js/wow.min.js'></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
            <script src='<?php print get_template_directory_uri(); ?>/js/bootstrap.js'></script>

            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
            <link rel='stylesheet' type='text/css' href='<?php print get_template_directory_uri(); ?>/css/bootstrap.min.css'>
            <link rel='stylesheet' type='text/css' href='<?php print get_template_directory_uri(); ?>/css/style.php'>

           <script>
            new WOW().init();
          </script>
        </head>
        <body>
            <nav class='navbar navbar-default navbar-fixed-top'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-9'>
                            <a class='navbar-brand' href='<?php print get_blogInfo('url'); ?>'>
                                <?php if(has_custom_logo()): ?>
                                    <?php the_custom_logo(); ?>
                                <?php else: ?>
                                    <?php print get_blogInfo('name'); ?>
                                <?php endif; ?>
                            </a>
                            <ul class='nav navbar-nav pull-right'>
                                <?php bootstrap_nav(); ?>
                            </ul>
                        </div>
                        <div class='col-md-3'>
                            <a class='navbar-brand contact-number pull-right text-right'>0115 939 0906</a>
                        </div>
                    </div>
                </div>
            </nav>
