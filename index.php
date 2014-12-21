<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <?php
      $meta = array(
        'title' => 'Choose your running event game',
        'description' => 'Use this choose your own adventure game to find the Central Texas running event that fits your interests.',
        'thumbnail' => 'http://projects.statesman.com/features/choose-your-race/assets/choose-your-race-share.png',
        'url' => 'http://projects.statesman.com/features/choose-your-race/'
      );
    ?>

    <title><?php print $meta['title']; ?> | Austin American-Statesman</title>
    <link rel="icon" type="image/png" href="//projects.statesman.com/common/favicon.ico">

    <link rel="canonical" href="<?php print $meta['url']; ?>" />

    <meta name="description" content="<?php print $meta['description']; ?>">

    <meta property="og:title" content="<?php print $meta['title']; ?>"/>
    <meta property="og:description" content="<?php print $meta['description']; ?>"/>
    <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
    <meta property="og:url" content="<?php print $meta['url']; ?>"/>

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@statesman" />
    <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
    <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
    <meta name="twitter:image" content="<?php print $meta['thumbnail']; ?>" />
    <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

    <link href="dist/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- cyoa specific stuff -->
    <link href="cyoa/css/style.css" rel="stylesheet" />
    <script src="cyoa/js/jquery.js"></script>
    <script src="cyoa/js/tabletop.js"></script>
    <script src="cyoa/js/script.js"></script>      
    <script type="text/javascript">
        jQuery(document).ready(function() {
                // this pulls from the spreadsheet that can be found at https://docs.google.com/spreadsheet/pub?key=0AswaDV9q95oZdHRQUlVQcDBJRU44NFdzc3lIeElkQXc&output=html
                // https://docs.google.com/spreadsheets/d/1_ZffYxfzjeW5gFKUlAAYw87JXPTf6VhxFGNx8RhDh5w/pubhtml
            var cyoa = jQuery.Cyoa('1_ZffYxfzjeW5gFKUlAAYw87JXPTf6VhxFGNx8RhDh5w',
                 { separator : ',',
                control_location: 'bottom'
                } 
            );
        });
    </script>


    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/advertising.inc";?>
    <?php include "includes/metrics-head.inc";?>
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
            <img width="273" height="26" src="assets/logo.png" />
          </a>
        </div>
      </div>
    </nav>

    <div class="container header">
      <h4>fit city</h4>
      <h2>'Choose your own race' adventure game</h2>
      <p><small>Interactive by Pam LeBlanc and Christian McDonald, Austin American-Statesman</small></p>
      <p>You've resolved to get fit and run more in 2015. Maybe that goal includes entering a race. But which one? The Central Texas running calendar is packed with possibilities. Answer these questions to pick one that’s right for you, <span style="font-weight:bold"><a href="pages/races.php?list=fun-runs">or go straight to the answer page to see all of them</a></span>.</p>

      <div class="cyoa_wrapper">
          <div style="clear:both" id="cyoa_container"></div>
      </div>
    </div>

    <?php /* Banner ad */ ?>
    <?php include "includes/banner-ad.inc";?>

    <p id="legal" class="center-block text-center"><small>© 2014 <a href="http://www.coxmediagroup.com" target="_blank">Cox Media Group</a>. By using this website, you accept the terms of our <a href="http://www.mystatesman.com/visitor_agreement/" target="_blank">Visitor Agreement</a> and <a target="_blank" href="http://www.mystatesman.com/privacy_policy/">Privacy Policy</a>, and understand your options regarding <a target="_blank" href="http://www.mystatesman.com/privacy_policy/#ad-choices">Ad Choices</a><img src="http://media.cmgdigital.com/shared/img/photos/2012/02/29/d3/da/ad_choices_logo.png" alt="AdChoices">.</small></p>

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <script src="dist/scripts.js"></script>
  </body>
</html>


