<?php
include('header.php');
?>

	<div id="designs">
		<div id="top">
			<div id="titlebar">
				<img src="fourtuple.png">
				<span>The GenderMag Design Catalog</span>
			</div>
			<div id="explanation">
				This website shows evidence-based examples of designs that have been made more inclusive using <a href="http://gendermag.org" target="_blank">The GenderMag Method</a>.
				The changes are described in terms of the <a href="">GenderMag cognitive facets</a> <span class="todo">Link to a page that explains the facets</span>.
				If you would like to contribute your own pre- and post-GenderMag designs to this website, please email us at <a href="mailto:gendermag.method@gmail.com">gendermag.method@gmail.com</a>.
			</div>
		</div>

		<?php
		$desData = getDesData($cat);
		foreach($desData as $des) {
			$des_title = $des["title"];
			$dirnospaces = dirNoSpaces($des_title);
			$short_title = getShortTitle($des_title);
		?>

		<div class="title" id="<?php echo $dirnospaces; ?>">
			<?php 
			if(hasShortTitle($des_title)) { 
				$short_title = getShortTitle($des_title);
				echo "<span class=\"bolded\">{$short_title}</span>: "; 
			}
			echo $des["title"];
			if($facets != '') {
				foreach($des["facets"] as $facet) { echo "<img class=\"facet\" src=\"{$facet}-white.png\">"; }
			}
			?>
		</div>
		<div class="stage">
			<div class="before">
				<div class="inner">
					<div>
						<div class="problem">Problem</div>
						<?php if(hasImg($des['title'], $before_img_filename)) { ?>
						<a href="<?php echo "{$des['title']}/{$before_img_filename}"; ?>"><img src="<?php echo "{$des['title']}/{$before_img_filename}"; ?>"></a><br />
						<?php } ?>
						<?php echo $des["problem"]; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="stage">
			<div class="after">
				<div class="inner">
					<div>
						<div class="solution">Solution</div>
						<?php if(hasImg($des['title'], $after_img_filename)) { ?>
						<a href="<?php echo "{$des['title']}/{$after_img_filename}"; ?>"><img src="<?php echo "{$des['title']}/{$after_img_filename}"; ?>"></a><br />
						<?php } ?>
						<?php echo $des["solution"]; ?>
						<?php if($des["evidence"]) { ?>
						<p>
							<strong><em>Evidence: </em></strong><?php echo $des["evidence"]; ?>
						</p>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<?php
		}
		?>
	</div>

<?php
include('footer.php');
?>
