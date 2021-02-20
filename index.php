<?php
include('header.php');
?>

<?php
$desData = getDesData($current_section);
foreach($desData as $des) {
	$long_title = $des["title"];
	$title = getShortTitle($long_title);
	$dirnospaces = dirNoSpaces($long_title);
	$before_img_path = "{$long_title}/{$before_img_filename}";
	$after_img_path = "{$long_title}/{$after_img_filename}";
	$problem_desc = $des["problem"];
	$solution_desc = $des["solution"];
	$evidence = $des["evidence"];
	$facets = $des["facets"];
	$cats = $des["cats"];
?>

<div class="designtitle">
  <div>
    <div class="designshorttitle"><?php echo $title; ?></div>
    <div class="designshortdesc"><?php echo $long_title; ?></div>
  </div>
  <div class="designbuttons">
	  <div class="buttonwrap facetbuttons">
	  	<?php foreach($facets as $facet) echo getFormattedButtonLink($facet,$current_section); ?>
	  </div>
	  <div class="buttonwrap catbuttons">
	  	<?php foreach($cats as $cat) echo getFormattedButtonLink($cat,$current_section); ?>
	  </div>
	</div>
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