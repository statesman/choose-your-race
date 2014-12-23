<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <?php
      $meta = array(
        'title' => 'Central Texas running events',
        'description' => 'Find the best running event for your tastes and style.',
        'thumbnail' => 'http://projects.statesman.com/features/choose-your-race/assets/choose-your-race/choose-your-race-share.png',
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

    <link href="../dist/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <?php /* CMG advertising and analytics */ ?>
    <?php include "../includes/advertising.inc";?>
    <?php include "../includes/metrics-head.inc";?>
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
            <img width="273" height="26" src="../assets/logo.png" />
          </a>
        </div>
      </div>
    </nav>

    <div class="container header">
      <h4>FIT CITY</h4>
      <h2>Central Texas running events</h2>
      <p><small>Interactive by Pam LeBlanc and Christian McDonald, Austin American-Statesman. <a href="photo-credits.php">Photo credits</a></small></p>

      <div class="row">
        <div class="col-sm-8 col-lg-8">
          <h3>Photo credits</h3>
          <ul>
            <li>Do you want to race?: RICARDO B. BRAZZIELL / AMERICAN-STATESMAN</li>
            <li>Do you want to race on roads?: JAY GODWIN / AMERICAN-STATESMAN</li>
            <li>Casual running alone or with friends is for you: RODOLFO GONZALEZ / AMERICAN-STATESMAN</li>
            <li>Join a running group<!: RALPH BARRERA / AMERICAN-STATESMAN</li>
            <li>Do you want to go long? (13 miles or more): CHRIS LEBLANC / FOR AMERICAN-STATESMAN</li>
            <li>K, let's consider trails. You want to run all day?: ANDY SHARP / FOR AMERICAN-STATESMAN</li>
            <li>Like marathon long?: CONTRIBUTED</li>
            <li>Do you want to do a relay?: RODOLFO GONZALEZ / AMERICAN-STATESMAN</li>
            <li>Try an ultra trail run!: COURTESY CHRIS LEBLANC</li>
            <li>Try these shorter trail runs!: CONTRIBUTED</li>
            <li>Go for a marathon!: RODOLFO GONZALEZ / AMERICAN-STATESMAN</li>
            <li>Try these middle-distance races!: ANDY SHARP / FOR AMERICAN-STATESMAN</li>
            <li>Run a relay!: CONTRIBUTED</li>
            <li>Do you want to run in costume?: RODOLFO GONZALEZ / AMERICAN-STATESMAN</li>
            <li>Costumes encouraged at these runs!: RODOLFO GONZALEZ / AMERICAN-STATESMAN</li>
            <li>Do you want to get splashed in color?: CONTRIBUTED</li>
            <li>Have fun at these novelty races!: CONTRIBUTED</li>
            <li>Try these fun runs and fund-raising 5Ks!: CONTRIBUTED</li>

          </ul>          
        </div>
        <div class="col-sm-4 col-lg-4">
          <h4>Choose your Race Adventure Start</h4>
          <div><a href="../"><img class=" img-responsive" src="../assets/choose-your-race/list-start.jpg"></a></div>
          <h4>Running Groups</h4>
          <div><a href="races.php?list=running-groups"><img class=" img-responsive" src="../assets/choose-your-race/list-running-groups.jpg"></a></div>
          <h4>Fun runs</h4>
          <div><a href="races.php?list=fun-runs"><img class=" img-responsive" src="../assets/choose-your-race/list-fun-runs.jpg"></a></div>
          <h4>Novelty runs</h4>
          <div><a href="races.php?list=novelty-runs"><img class=" img-responsive" src="../assets/choose-your-race/list-novelty-runs.jpg"></a></div>
          <h4>Costume runs</h4>
          <div><a href="races.php?list=costume-runs"><img class=" img-responsive" src="../assets/choose-your-race/list-costume-runs.jpg"></a></div>
          <h4>Relays</h4>
          <div><a href="races.php?list=relays"><img class=" img-responsive" src="../assets/choose-your-race/list-relays.jpg"></a></div>
          <h4>Half-marathons and middle distance</h4>
          <div><a href="races.php?list=middle-distance"><img class=" img-responsive" src="../assets/choose-your-race/list-middle-distance.jpg"></a></div>
          <h4>Marathons</h4>
          <div><a href="races.php?list=marathons"><img class=" img-responsive" src="../assets/choose-your-race/list-marathons.jpg"></a></div>
          <h4>Austin Distance Challenge</h4>
          <div><a href="races.php?list=distance-challenge"><img class=" img-responsive" src="../assets/choose-your-race/list-distance-challenge.jpg"></a></div>
          <h4>Shorter trail runs</h4>
          <div><a href="races.php?list=trail-runs"><img class=" img-responsive" src="../assets/choose-your-race/list-trail-runs.jpg"></a></div>
          <h4>Ultra trail runs</h4>
          <div><a href="races.php?list=ultra-trail-runs"><img class=" img-responsive" src="../assets/choose-your-race/list-ultras.jpg"></a></div>
        </div>
      </div>
    </div>


    <?php /* Banner ad */ ?>
    <?php include "../includes/banner-ad.inc";?>

    <p id="legal" class="center-block text-center"><small>© 2014 <a href="http://www.coxmediagroup.com" target="_blank">Cox Media Group</a>. By using this website, you accept the terms of our <a href="http://www.mystatesman.com/visitor_agreement/" target="_blank">Visitor Agreement</a> and <a target="_blank" href="http://www.mystatesman.com/privacy_policy/">Privacy Policy</a>, and understand your options regarding <a target="_blank" href="http://www.mystatesman.com/privacy_policy/#ad-choices">Ad Choices</a><img src="http://media.cmgdigital.com/shared/img/photos/2012/02/29/d3/da/ad_choices_logo.png" alt="AdChoices">.</small></p>

    <?php /* CMG advertising and analytics */ ?>
    <?php include "../includes/project-metrics.inc"; ?>
    <?php include "../includes/metrics.inc"; ?>

    <script src="../dist/scripts.js"></script>
  </body>
</html>


