<?php
include('functions.php');
?>
<?php
$current_section = NULL;
foreach(array_keys($cat_ids) as $cid) {
  if (isset($_GET[$cid])) { $current_section = $cid; }
}
foreach(array_keys($facet_ids) as $fid) {
  if (isset($_GET[$fid])) { $current_section = $fid; }
}
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
<link href="stylesheet.css" media="all" rel="stylesheet" type="text/css" />
<!-- Favicon: the little picture on the tab -->
<link href="dclogo.png" rel="icon" type="image/x-icon" />  

</head>

<body>

<div id="topbar">
  <div id="titleblock">
    <a href="/dc"><img src="dclogo.png">GenderMag Design Catalog</a><br>
    <span id="subtitle">Examples of how to make your software inclusive</span><br>
    <span id="aboutlink"><a href="about.php">(What is this website and how do I use it?)</a></span>
  </div>
  <div id="filterblock">
    <div class="buttonwrap catbuttons">
      <div>Design changes in...</div>
      <?php 
      foreach($cat_ids as $key => $val) echo getFormattedButtonLink($key,$current_section);
      $all_button_class = getAllButtonClass($current_section);
      ?>
      <a href="."><div><div class="<?php echo $all_button_class; ?>">&nbsp;all&nbsp;</div></div></a>
    </div>
    <div class="buttonwrap facetbuttons">
      <div>Design changes by facet:</div>
      <?php 
      foreach($facet_ids as $key => $val) echo getFormattedButtonLink($key,$current_section);
      $all_button_class = getAllButtonClass($current_section);
      ?>
      <a href="."><div><div class="<?php echo $all_button_class; ?>">&nbsp;all&nbsp;</div></div></a>
    </div>
  </div>
</div>
<div id="gradientbar">&nbsp;</div>

<div id="topspacer">&nbsp;</div>

<div id="pagebody">