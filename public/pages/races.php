<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <?php
      $meta = array(
        'title' => 'Central Texas running events, 2016',
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
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="http://www.austin360.com/" target="_blank">
          <img width="122" height="50" src="../assets/logo_austin360_color.png">
        </a>
      </div>
       <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
  </nav>

    <div class="container header">
      <h4>FIT CITY</h4>
      <h2><?php print $meta['title']; ?></h2>
      <p><small>Interactive by Pam LeBlanc and Christian McDonald, Austin American-Statesman. <a href="photo-credits.php">Photo credits</a></small></p>
      <div class="row">
        <div class="col-sm-8 col-lg-8">
          <div class="list-group">

          <!-- fetching json from url parameter -->
          <?php
            $list = file_get_contents('../data/'.$_GET["list"].'.json');
            $list = json_decode($list);
          ?>

          <!-- walking through array to print list -->
          <h3><?php print $list->name; ?></h3>
          <p>Click or tap on each race for more information.</p>
          <?php  foreach ($list->items as $item): ?>           
            <a href="<?php print $item->url; ?>" target="_blank" class="list-group-item">
              <h4 class="list-group-item-heading"><?php print $item->title; ?></h4>
              <h5><?php print $item->date; ?></h5>
              <p class="list-group-item-text"><?php print $item->description; ?></p>
            </a>
          <?php endforeach; ?>
          </div>
        </div>
        <div class="col-sm-4 col-lg-4">
          <h4>Choose your Race Adventure Start</h4>
          <div><a href="../"><img class=" img-responsive" src="../assets/choose-your-race/list-start.jpg"></a></div>
          <hr>
          <h4>Running Groups</h4>
          <div><a href="?list=running-groups"><img class=" img-responsive" src="../assets/choose-your-race/list-running-groups.jpg"></a></div>
          <hr>
          <h4>Fun runs</h4>
          <div><a href="?list=fun-runs"><img class=" img-responsive" src="../assets/choose-your-race/list-fun-runs.jpg"></a></div>
          <hr>
          <h4>Novelty runs</h4>
          <div><a href="?list=novelty-runs"><img class=" img-responsive" src="../assets/choose-your-race/list-novelty-runs.jpg"></a></div>
          <hr>
          <h4>Costume runs</h4>
          <div><a href="?list=costume-runs"><img class=" img-responsive" src="../assets/choose-your-race/list-costume-runs.jpg"></a></div>
          <hr>
          <h4>Short runs</h4>
          <div><a href="?list=short"><img class=" img-responsive" src="../assets/choose-your-race/list-short-runs.jpg"></a></div>
          <hr>
          <h4>Relays</h4>
          <div><a href="?list=relays"><img class=" img-responsive" src="../assets/choose-your-race/list-relays.jpg"></a></div>
          <hr>
          <h4>Half-marathons and middle distance</h4>
          <div><a href="?list=middle-distance"><img class=" img-responsive" src="../assets/choose-your-race/list-middle-distance.jpg"></a></div>
          <hr>
          <h4>Marathons</h4>
          <div><a href="?list=marathons"><img class=" img-responsive" src="../assets/choose-your-race/list-marathons.jpg"></a></div>
          <hr>
          <h4>Austin Distance Challenge</h4>
          <div><a href="?list=distance-challenge"><img class=" img-responsive" src="../assets/choose-your-race/list-distance-challenge.jpg"></a></div>
          <hr>
          <h4>Shorter trail runs</h4>
          <div><a href="?list=trail-runs"><img class=" img-responsive" src="../assets/choose-your-race/list-trail-runs.jpg"></a></div>
          <hr>
          <h4>Ultra trail runs</h4>
          <div><a href="?list=ultra-trail-runs"><img class=" img-responsive" src="../assets/choose-your-race/list-ultras.jpg"></a></div>
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


