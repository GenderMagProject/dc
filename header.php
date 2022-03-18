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
<a name="top"></a>

<div id="topbar">
  <div id="titleblock">
    <a href="/dc"><img src="dclogo.png"><span id="dctitle">GenderMag Design Catalog</span></a><br>
  </div>
</div>

<div id="pagebody">