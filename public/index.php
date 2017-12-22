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
        'thumbnail' => 'http://projects.statesman.com/features/choose-your-race/assets/choose-your-race-share.jpg',
        'twitter' => 'aasinteractive',
        'url' => 'http://projects.statesman.com/features/choose-your-race/'
      );
    ?>

    <title><?php print $meta['title']; ?> | Austin American-Statesman</title>
    <link rel="icon" type="image/png" href="assets/favicon.ico">

    <link rel="canonical" href="<?php print $meta['url']; ?>" />

    <meta name="description" content="<?php print $meta['description']; ?>">

    <meta property="og:title" content="<?php print $meta['title']; ?>"/>
    <meta property="og:description" content="<?php print $meta['description']; ?>"/>
    <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
    <meta property="og:url" content="<?php print $meta['url']; ?>"/>

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@austin360" />
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
                // this pulls from the spreadsheet key
            var cyoa = jQuery.Cyoa('11T6Jy5KHb4NSspL-HP275B8fmEdDTIzXFoKybsALmsM',
                 { separator : ',',
                control_location: 'bottom'
                } 
            );
        });
    </script>


    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/advertising.inc"; ?>
    <?php include "includes/cmg-head-metadata.inc"; ?>
    <?php include "includes/cmg-head-metrics.inc"; ?>
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
        <img width="147" height="30" role="presentation" src="assets/austin360.png" />
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./">Start <span class="sr-only">(current)</span></a></li>
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
      <h2>'Choose your own race' adventure game</h2>
      <p><small>Interactive by Pam LeBlanc and Christian McDonald, Austin American-Statesman. <a href="pages/photo-credits.php">Photo credits</a></small></p>
      <p>You've resolved to get fit and run more in 2018. Maybe that goal includes entering a race. But which one? The Central Texas running calendar is packed with possibilities. Answer these questions to pick one that’s right for you, <span style="font-weight:bold"><a href="pages/races.php?list=fun-runs">or go straight to the answer page to see all of them</a></span>.</p>

      <div class="cyoa_wrapper">
          <div style="clear:both" id="cyoa_container"></div>
      </div>
    </div>

    <?php /* CMG advertising and analytics */ ?>
    <?php include "includes/banner-ad.inc";?>
    <?php include "includes/legal.inc";?>
    <?php include "includes/cmg-body-scripts.inc"; ?>

    <script src="dist/scripts.js"></script>
  </body>
</html>


