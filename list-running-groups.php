<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <?php
      $meta = array(
        'title' => 'Starter template',
        'description' => 'This is a starter template.',
        'thumbnail' => '',
        'url' => ''
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
      <h4>FIT CITY</h4>
      <h2>Wanna run?</h2>
      <p><small>Interactive by Pam LeBlanc and Christian McDonald, Austin American-Statesman</small></p>
      <p><a href="./">Back to the Choose Your Race Adventure</a></p>

      <h3>Running groups</h3>
      <div class="row">
        <div class="col-sm-4 col-lg-8">
          <div class="list-group">
            <a href="http://austinrunners.org" target="_blank" class="list-group-item">
              <h4 class="list-group-item-heading">Austin Runners Club</h4>
            </a>
            <a href="http://capitalcityrunning.com" target="_blank" class="list-group-item">
              <h4 class="list-group-item-heading">Capital City Running</h4>
              <p class="list-group-item-text">1700 Ranch Road 620 North, (512) 266-1000</p>
            </a>
            <a href="http://gilbertsgazelles.com" target="_blank" class="list-group-item">
              <h4 class="list-group-item-heading">Gilbert’s Gazelles</h4>
            </a>
            <a href="http://lukeslocker.com" target="_blank" class="list-group-item">
              <h4 class="list-group-item-heading">Luke’s Locker</h4>
              <p class="list-group-item-text">115 Sandra Muraida Way, (512) 482-8676</p>
            </a>
            <a href="http://readytoruntexas.com" target="_blank" class="list-group-item">
              <h4 class="list-group-item-heading">Ready to Run</h4>
              <p class="list-group-item-text">3616 Far West Boulevard, (512) 241-0323</p>
            </a>
            <a href="http://" target="_blank" class="list-group-item">
              <h4 class="list-group-item-heading">Rogue Running</h4>
              <p class="list-group-item-text">410 Pressler Street, Austin, (512) 373-8704; 2800 East Whitestone Boulevard, Cedar Park, (512) 777-4467</p>
            </a>
            <a href="http://http://tinyurl.com/nnyo3uc" target="_blank" class="list-group-item">
              <h4 class="list-group-item-heading">Texas Running Company</h4>
              <p class="list-group-item-text">1011 W. Fifth Street, (512) 474-0022; 9901 N. Capital of Texas Highway, (512) 795-2022</p>
            </a>
          </div>
        </div>
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


