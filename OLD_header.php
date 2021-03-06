<?php
include('functions.php');
?>
<?php
$cat = NULL;

// Don't change these conditionals unless you're sure the code will still be secure afterwards
if (isset($_GET[$code_cat_survey])) { $cat = $code_cat_survey; }
if (isset($_GET[$code_cat_opensource])) { $cat = $code_cat_opensource; }
if (isset($_GET[$code_cat_website])) { $cat = $code_cat_website; }
if (isset($_GET[$code_cat_confwebsite])) { $cat = $code_cat_confwebsite; }
if (isset($_GET[$code_cat_atr])) { $cat = $code_cat_atr; }
if (isset($_GET[$code_cat_ips])) { $cat = $code_cat_ips; }
if (isset($_GET[$code_cat_m])) { $cat = $code_cat_m; }
if (isset($_GET[$code_cat_cse])) { $cat = $code_cat_cse; }
if (isset($_GET[$code_cat_ls])) { $cat = $code_cat_ls; }
?>

<!doctype html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132750618-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-132750618-1');
    </script>
  <title>The GenderMag Project | Design Catalog</title>
  <meta charset="utf-8"> 
  <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
  <link href="stylesheet.css" media="all" rel="stylesheet" type="text/css" />
    <!-- Favicon: the little picture on the tab -->
    <link href="fourtuple.png" rel="icon" type="image/x-icon" />  
</head>
<body>
  <div id="nav">
    <div class="sub"><a href="index.php">Home</a></div>
    <div>
      <div class="subTitle">Design changes in...</div>
      <div class="sub<?php if($cat==$code_cat_survey) { echo ' selected'; } ?>"><a href="<?php echo getLink($code_cat_survey,$cat); ?>">Surveys</a></div>   
      <?php if($cat==$code_cat_survey) printDesList($code_cat_survey); ?> 
      <div class="sub<?php if($cat==$code_cat_website) { echo ' selected'; } ?>"><a href="<?php echo getLink($code_cat_website,$cat); ?>">Websites</a></div>
      <?php if($cat==$code_cat_website) printDesList($code_cat_website); ?>   
      <!--
      <div class="sub<?php if($cat==$code_cat_confwebsite) { echo ' selected'; } ?>"><a href="<?php echo getLink($code_cat_confwebsite,$cat); ?>">Conference Websites</a></div>
      <?php if($cat==$code_cat_confwebsite) printDesList($code_cat_confwebsite); ?> 
      -->
      <div class="sub<?php if($cat==$code_cat_confwebsite) { echo ' selected'; } ?>"><a href="conference-checklist.php">Conference Websites</a></div>
      <div class="sub<?php if($cat==$code_cat_opensource) { echo ' selected'; } ?>"><a href="<?php echo getLink($code_cat_opensource,$cat); ?>">Open-source projects</a></div>
      <?php if($cat==$code_cat_opensource) printDesList($code_cat_opensource); ?>     
    </div>
    <div>
      <div class="subTitle">Design changes by&nbsp;Facet&nbsp;<a href="">(?)</a>:</div>

      <div class="sub<?php if($cat==$code_cat_m) { echo ' selected'; } ?>"><img src="<?php echo $code_cat_m; ?>-black.png" alt="<?php echo $name_cat_m; ?>" /><a href="<?php echo getLink($code_cat_m,$cat); ?>">Motivations</a></div>
      <?php if($cat==$code_cat_m) printDesList($code_cat_m, true); ?> 
      <div class="sub<?php if($cat==$code_cat_cse) { echo ' selected'; } ?>"><img src="<?php echo $code_cat_cse; ?>-black.png" /><a href="<?php echo getLink($code_cat_cse,$cat); ?>">Computer Self-Efficacy</a></div>
      <?php if($cat==$code_cat_cse) printDesList($code_cat_cse, true); ?> 
      <div class="sub<?php if($cat==$code_cat_atr) { echo ' selected'; } ?>"><img src="<?php echo $code_cat_atr; ?>-black.png" /><a href="<?php echo getLink($code_cat_atr,$cat); ?>">Attitude Toward Risk</a></div>
      <?php if($cat==$code_cat_atr) printDesList($code_cat_atr, true); ?> 
      <div class="sub<?php if($cat==$code_cat_ips) { echo ' selected'; } ?>"><img src="<?php echo $code_cat_ips; ?>-black.png" /><a href="<?php echo getLink($code_cat_ips,$cat); ?>">Information Processing Style</a></div>
      <?php if($cat==$code_cat_ips) printDesList($code_cat_ips, true); ?> 
      <div class="sub<?php if($cat==$code_cat_ls) { echo ' selected'; } ?>"><img src="<?php echo $code_cat_ls; ?>-black.png" /><a href="<?php echo getLink($code_cat_ls,$cat); ?>">Learning Style</a></div>
      <?php if($cat==$code_cat_ls) printDesList($code_cat_ls, true); ?> 
    </div>
    <div>
      <div class="sub<?php if($cat==NULL) { echo ' selected'; } ?>"><a href=".">All design changes</a></div>
      <?php if($cat==NULL) printDesList(); ?>
    </div>    
  </div>