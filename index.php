<?php
include('functions.php');
?>
<?php
$cat = NULL;
// Don't change these conditionals unless you're sure the code will still be secure afterwards
if (isset($_GET[$name_cat_survey])) { $cat = $name_cat_survey; }
if (isset($_GET[$name_cat_opensource])) { $cat = $name_cat_opensource; }
if (isset($_GET[$name_cat_website])) { $cat = $name_cat_website; }
if (isset($_GET[$name_cat_atr])) { $cat = $name_cat_atr; }
if (isset($_GET[$name_cat_ips])) { $cat = $name_cat_ips; }
if (isset($_GET[$name_cat_m])) { $cat = $name_cat_m; }
if (isset($_GET[$name_cat_cse])) { $cat = $name_cat_cse; }
if (isset($_GET[$name_cat_ls])) { $cat = $name_cat_ls; }
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
		<div>
			<div class="subTitle">Design changes in...</div>
			<div class="sub<?php if($cat==$name_cat_survey) { echo ' selected'; } ?>"><a href="<?php echo getLink($name_cat_survey,$cat); ?>">Surveys</a></div>		
			<?php if($cat==$name_cat_survey) printDesList($name_cat_survey); ?>	
			<div class="sub<?php if($cat==$name_cat_website) { echo ' selected'; } ?>"><a href="<?php echo getLink($name_cat_website,$cat); ?>">Websites</a></div>
			<?php if($cat==$name_cat_website) printDesList($name_cat_website); ?>			
			<div class="sub<?php if($cat==$name_cat_opensource) { echo ' selected'; } ?>"><a href="<?php echo getLink($name_cat_opensource,$cat); ?>">Open-source projects</a></div>
			<?php if($cat==$name_cat_opensource) printDesList($name_cat_opensource); ?>			
		</div>
		<div>
			<div class="subTitle">Design changes by&nbsp;Facet&nbsp;<a href="">(?)</a>:</div>
			<div class="sub<?php if($cat==$name_cat_m) { echo ' selected'; } ?>"><img src="<?php echo $name_cat_m; ?>-black.png" /><a href="<?php echo getLink($name_cat_m,$cat); ?>">Motivations</a></div>
			<?php if($cat==$name_cat_m) printDesList($name_cat_m, true); ?>	
			<div class="sub<?php if($cat==$name_cat_cse) { echo ' selected'; } ?>"><img src="<?php echo $name_cat_cse; ?>-black.png" /><a href="<?php echo getLink($name_cat_cse,$cat); ?>">Computer Self-Efficacy</a></div>
			<?php if($cat==$name_cat_cse) printDesList($name_cat_cse, true); ?>	
			<div class="sub<?php if($cat==$name_cat_atr) { echo ' selected'; } ?>"><img src="<?php echo $name_cat_atr; ?>-black.png" /><a href="<?php echo getLink($name_cat_atr,$cat); ?>">Attitude Toward Risk</a></div>
			<?php if($cat==$name_cat_atr) printDesList($name_cat_atr, true); ?>	
			<div class="sub<?php if($cat==$name_cat_ips) { echo ' selected'; } ?>"><img src="<?php echo $name_cat_ips; ?>-black.png" /><a href="<?php echo getLink($name_cat_ips,$cat); ?>">Information Processing Style</a></div>
			<?php if($cat==$name_cat_ips) printDesList($name_cat_ips, true); ?>	
			<div class="sub<?php if($cat==$name_cat_ls) { echo ' selected'; } ?>"><img src="<?php echo $name_cat_ls; ?>-black.png" /><a href="<?php echo getLink($name_cat_ls,$cat); ?>">Learning Style</a></div>
			<?php if($cat==$name_cat_ls) printDesList($name_cat_ls, true); ?>	
		</div>
		<div>
			<div class="sub<?php if($cat==NULL) { echo ' selected'; } ?>"><a href=".">All design changes</a></div>
			<?php if($cat==NULL) printDesList(); ?>
		</div>		
	</div>
	<div id="designs">
		<div id="top">
			<div id="titlebar">
				<img src="fourtuple.png">
				<span>The GenderMag Design Catalog</span>
			</div>
			<div id="explanation">
				This website shows examples of designs that have been made more inclusive using <a href="http://gendermag.org" target="_blank">The GenderMag Method</a>.
				The changes are described in terms of the <a href="">GenderMag cognitive facets</a> <span class="todo">Link to a page that explains the facets</span>.
				If you would like to contribute your own pre- and post-GenderMag designs to this website, please email us at <a href="mailto:gendermag.method@gmail.com">gendermag.method@gmail.com</a>.
			</div>
		</div>

		<?php
		$desData = getDesData($cat);
		foreach($desData as $des) {
			$dirnospaces = dirNoSpaces($des["title"]);
		?>

		<div class="title">
			<a name="<?php echo $dirnospaces; ?>"></a><span class="bolded">Design</span>: <?php echo $des["title"]; ?>
			<?php
			if($facets != '') {
				foreach($des["facets"] as $facet) { echo "<img class=\"facet\" src=\"{$facet}-white.png\">"; }
			}
			?>
		</div>
		<div class="stage">
			<div class="before">
				<div class="inner">
					<div><span class="problem">Problem</span><br><?php echo $des["problem"]; ?></div>
					<div><a href="<?php echo "{$des['title']}/{$before_img_filename}"; ?>"><img src="<?php echo "{$des['title']}/{$before_img_filename}"; ?>"></a></div>
				</div>
			</div>
		</div>
		<div class="stage">
			<div class="after">
				<div class="inner">
					<div><span class="solution">Solution</span><br><?php echo $des["solution"]; ?></div>
					<?php if($des['evidence']) { ?><div class="evidence"><?php echo $des["evidence"]; ?></div><?php } ?>
					<div><a href="<?php echo "{$des['title']}/{$after_img_filename}"; ?>"><img src="<?php echo "{$des['title']}/{$after_img_filename}"; ?>"></a></div>
				</div>
			</div>
		</div>

		<?php
		}
		?>
	</div>
</body>
</html>