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
        'thumbnail' => 'http://projects.statesman.com/features/choose-your-race/assets/choose-your-race-share.jpg',
        'twitter' => 'aasinteractive',
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

    <!-- cyoa specific stuff -->
    <!-- so our mobie nav will work -->
    <script src="../cyoa/js/jquery.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
        });
    </script>


    <?php /* CMG advertising and analytics */ ?>
    <?php include "../includes/advertising.inc"; ?>
    <?php include "../includes/cmg-head-metadata.inc"; ?>
    <?php include "../includes/cmg-head-metrics.inc"; ?>
  </head>
  <body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

        <a class="navbar-brand" href="http://www.austin360.com/" title="Austin360 logo" target="_blank">
        <img width="147" height="30" role="presentation" src="../assets/austin360.png" />
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../">Start <span class="sr-only">(current)</span></a></li>
        <li class="visible-xs small-social"><a target="_blank" title="Share on Facebook" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a><a target="_blank" title="Share on Twitter" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" title="Share on Facebook" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" title="Share on Twitter" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
        </ul>
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
            <li>Do you want to race?: RALPH BARRERA / AMERICAN-STATESMAN</li>
            <li>Do you want to race on roads?: JAY GODWIN / AMERICAN-STATESMAN</li>
            <li>Casual running alone or with friends is for you: RODOLFO GONZALEZ / AMERICAN-STATESMAN</li>
            <li>Join a running group: RALPH BARRERA / AMERICAN-STATESMAN</li>
            <li>Do you want to go long? (13 miles or more): CHRIS LEBLANC / FOR AMERICAN-STATESMAN</li>
            <li>K, let's consider trails. You want to run all day?: ANDY SHARP / FOR AMERICAN-STATESMAN</li>
            <li>Like marathon long?: CONTRIBUTED</li>
            <li>Do you want to do a relay?: RODOLFO GONZALEZ / AMERICAN-STATESMAN</li>
            <li>Try an ultra trail run!: COURTESY CHRIS LEBLANC</li>
            <li>Try these shorter trail runs!: CONTRIBUTED</li>
            <li>Go for a marathon!: RODOLFO GONZALEZ / AMERICAN-STATESMAN</li>
            <li>Try these middle-distance races!: ANDY SHARP / FOR AMERICAN-STATESMAN</li>
            <li>Run a relay!: CONTRIBUTED</li>
            <li>Short runs: LARRY KOLVOORD / AMERICAN-STATESMAN</li>
            <li>Do you want to run in costume?: RODOLFO GONZALEZ / AMERICAN-STATESMAN</li>
            <li>Costumes encouraged at these runs!: RODOLFO GONZALEZ / AMERICAN-STATESMAN</li>
            <li>Do you want to get splashed in color?: CONTRIBUTED</li>
            <li>Have fun at these novelty races!: CONTRIBUTED</li>
            <li>Try these fun runs and fund-raising 5Ks!: CONTRIBUTED</li>

          </ul>          
        </div>
        <div class="col-sm-4 col-lg-4">
          <?php include "_race-nav.php"; ?>
        </div>
      </div>
    </div>


    <?php /* Banner ad */ ?>
    <?php include "../includes/banner-ad.inc";?>

    <p id="legal" class="center-block text-center"><small>© 2014 <a href="http://www.coxmediagroup.com" target="_blank">Cox Media Group</a>. By using this website, you accept the terms of our <a href="http://www.mystatesman.com/visitor_agreement/" target="_blank">Visitor Agreement</a> and <a target="_blank" href="http://www.mystatesman.com/privacy_policy/">Privacy Policy</a>, and understand your options regarding <a target="_blank" href="http://www.mystatesman.com/privacy_policy/#ad-choices">Ad Choices</a><img src="http://media.cmgdigital.com/shared/img/photos/2012/02/29/d3/da/ad_choices_logo.png" alt="AdChoices">.</small></p>

    <?php /* CMG advertising and analytics */ ?>
    <?php include "../includes/banner-ad.inc";?>
    <?php include "../includes/legal.inc";?>
    <?php include "../includes/cmg-body-scripts.inc"; ?>

    <script src="../dist/scripts.js"></script>
  </body>
</html>


