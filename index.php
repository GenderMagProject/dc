<?php
include('header.php');
?>

<?php
$desData = getDesData($current_section);
ksort($desData);
?>

<div class="intro">
	The software designs in this catalog had <strong>bias bugs</strong>. Using the <a href="https://gendermag.org">GenderMag method</a>, the designs were changed to be more inclusive. <a href="about.php">What is this site and how do I use it?</a>
</div>

<div class="contents">
	<h2>Design Changes <?php if($current_section) { $sectionName = getSectionName($current_section); echo "<span class=\"filterstatus\">(filter: $sectionName)</span>";} ?></h2>
	
	<div id="filterblock">
	  <div class="buttonslabel">Filter by category: </div>
	  <div class="buttonwrap catbuttons">
	    <?php 
	    foreach($cat_ids as $key => $val) echo getFormattedButtonLink($key,$current_section);
	    $all_button_class = getAllButtonClass($current_section);
	    ?>
	    <a href="."><div><div class="<?php echo $all_button_class; ?>">&nbsp;all&nbsp;</div></div></a>
	  </div>
	  <div class="buttonslabel facetbuttonslabel">Filter by <a href="about.php">cognitive facet</a>: </div>
	  <div class="buttonwrap facetbuttons">
	    <?php 
	    foreach($facet_ids as $key => $val) echo getFormattedButtonLink($key,$current_section);
	    $all_button_class = getAllButtonClass($current_section);
	    ?>
	    <a href="."><div><div class="<?php echo $all_button_class; ?>">&nbsp;all&nbsp;</div></div></a>
	  </div>
	</div>

	<div id="designslistlabel">List of design changes:</div>
	<ul id="designslist">
		<?php 
		$count = 0;
		foreach($desData as $des) { 
			$count += 1;
			$long_title = $des["long_title"];
			$short_title = $des["dir"];
			echo "<li><a href=\"#$count\">$short_title</a></li>"; 
		}?>
	</ul>
</div>

<div style="clear:both"></div>

<?php
$count = 0;
foreach($desData as $des) {
	$count += 1;
	$dir = $des["dir"];
	$short_title = $dir;
	$long_title = $des["long_title"];
	$before_img_path = "$dir/$before_img_filename";
	$after_img_path = "$dir/$after_img_filename";
	$problem_desc = $des["problem"];
	$solution_desc = $des["solution"];
	$evidence = $des["evidence"];
	$facets = $des["facets"];
	$cats = $des["cats"];
?>

<a name="<?php echo "$count"; ?>"></a>
<div class="designtitle">
  <div>
    <div class="designshorttitle"><?php echo $short_title; ?></div>
    <div class="designshortdesc"><?php echo $long_title; ?></div>
  </div>
  <div class="designbuttons">
	  <div class="buttonwrap facetbuttons">
	  	<?php foreach($facets as $facet) echo getFormattedButtonLink($facet,$current_section); ?>
	  </div>
	  <div class="buttonwrap catbuttons">
	  	<?php foreach($cats as $cat) echo getFormattedButtonLink($cat,$current_section);
      $all_button_class = getAllButtonClass($current_section);
      ?>
      <a href="."><div><div style="display:none;" class="<?php echo $all_button_class; ?>">&nbsp;all&nbsp;</div></div></a>
	  </div>
	</div>
	<div style="clear:both"></div>
	<div class="backtotop"><a href="#top">^ Back to top</a></div>
</div>
<div class="design">
  <div class="designbefore">
    <img class="designstage" src="before.png" alt="Before" title="Before"><br/>
    <a href="<?php echo $before_img_path; ?>"><img class="designimg" src="<?php echo $before_img_path; ?>"></a><br/>
    <div class="designdesc"><?php echo $problem_desc; ?></div>
  </div>
  <div class="designafter">
    <img class="designstage" src="after.png" alt="After" title="After"><br/>
    <a href="<?php echo $after_img_path; ?>"><img class="designimg" src="<?php echo $after_img_path; ?>"></a><br/>
    <div class="designdesc">
    	<?php echo $solution_desc; ?>
			<?php if($evidence) { ?>
				<p><strong>Evidence: </strong><?php echo $evidence; ?></p>
			<?php } ?>	
    </div>
  </div>
</div>

<?php
}
?>

<?php
include('footer.php');
?>