<?php

$short_title_filename = 'short_title.txt';
$cats_filename = 'cats.txt';
$problem_filename = 'problem.txt';
$solution_filename = 'solution.txt';
$facets_filename = 'facets.txt';
$evidence_filename = 'evidence.txt';
$before_img_filename = 'zoom_before';
$after_img_filename = 'zoom_after';

$img_file_extensions = array('png','PNG','gif','GIF','jpg','JPG','jpeg','JPEG'); // allowed image file extensions

$cat_ids = array(	"survey" => array("Surveys","surveys"),
         					"website" => array("Websites","websites"),
         					"confwebsite" => array("Conference Websites","conference websites"),
         					"opensource" => array("Open-Source Projects","open-source projects"));

$facet_ids = array(	"m" => array("Motivations","motivations"),
           					"ls" => array("Learning Style","learning style"),
           					"atr" => array("Attitude Toward Risk","attitude toward risk"),
           					"cse" => array("Computer Self-Efficacy","computer self-efficacy"),
           					"ips" => array("Information Processing Style","information processing"));

$facets = array_keys($facet_ids);

function hasCat($dir, $cat) {
	global $cats_filename;
	$out = false;
	$cats = '';
	$cats_path = "{$dir}/{$cats_filename}";
	if(file_exists($cats_path)) { $cats = file($cats_path, FILE_IGNORE_NEW_LINES); }
	if(in_array($cat, $cats)) { $out = true; }
	return $out;
}

function hasFacet($dir, $facet) {
	$out = false;
	$facets = getFacets($dir);
	if(in_array($facet, $facets)) { $out = true; }
	return $out;
}

function hasImg($dir, $img_filename) {
	global $img_file_extensions;
	$out = false;
	foreach($img_file_extensions as $i) {
		$img_path = "{$dir}/{$img_filename}.{$i}";
		if(file_exists($img_path)) { $out = true; break; }
	}
	return $out;
}

function hasShortTitle($dir) {
	global $short_title_filename;
	$out = false;
	$short_title_path = "{$dir}/{$short_title_filename}";
	if(file_exists($short_title_path)) { $out = true; }
	return $out;
}

function getProblem($dir) {
	global $problem_filename;
	$problem = '';
	$problem_path = $dir.'/'.$problem_filename;
	if(file_exists($problem_path)) { $problem = file_get_contents($problem_path); }
	return $problem;
}

function getSolution($dir) {
	global $solution_filename;
	$solution = '';
	$solution_path = $dir.'/'.$solution_filename;
	if(file_exists($solution_path)) { $solution = file_get_contents($solution_path); }
	return $solution;
}

function getFacets($dir) {
	global $facets_filename;
	$facets = '';
	$facets_path = $dir.'/'.$facets_filename;
	if(file_exists($facets_path)) { $facets = file($facets_path, FILE_IGNORE_NEW_LINES); }
	return $facets;
}

function getCats($dir) {
	global $cats_filename;
	$cats = '';
	$cats_path = $dir.'/'.$cats_filename;
	if(file_exists($cats_path)) { $cats = file($cats_path, FILE_IGNORE_NEW_LINES); }
	return $cats;
}

function getEvidence($dir) {
	global $evidence_filename;
	$evidence = '';
	$evidence_path = $dir.'/'.$evidence_filename;
	if(file_exists($evidence_path)) { $evidence = file_get_contents($evidence_path); }
	return $evidence;
}

function getShortTitle($dir) {
	global $short_title_filename;
	$short_title = '';
	$short_title_path = "{$dir}/{$short_title_filename}";
	if(hasShortTitle($dir)) { $short_title = file_get_contents($short_title_path); }
	return $short_title;
}

function dirNoSpaces($dir) {
	return str_replace(' ', '', $dir);
}

// Return names of all directories in a given category
function getDirs($cat=NULL) {
	global $facets;
	$newDirs = array();
	$dirs = array_filter(glob('*'), 'is_dir');
	if($cat!=NULL) {
		if(in_array($cat,$facets)) {
			$newDirs = getFacetDirs($cat);
		} else {
			foreach($dirs as $dir) {
				if(hasCat($dir, $cat)) {
					array_push($newDirs,$dir);
				}
			}
		}
	} else { $newDirs = $dirs; }
	return $newDirs;
}

function getFacetDirs($facet) {
	$newDirs = array();
	$dirs = array_filter(glob('*'), 'is_dir');
	if($facet!=NULL) {
		foreach($dirs as $dir) {
			if(hasFacet($dir, $facet)) {
				array_push($newDirs,$dir);
			}
		}
	} else { $newDirs = $dirs; }
	return $newDirs;	
}

function getDesData($cat=NULL) {
	$desData = array();
	$dirs = getDirs($cat);
	foreach($dirs as $dir) {
		$problem = getProblem($dir);
		$solution = getSolution($dir);
		$facets = getFacets($dir);
		$evidence = getEvidence($dir);
		$cats = getCats($dir);
		$data = [
			"title" => $dir, 
			"problem" => $problem,
			"solution" => $solution,
			"facets" => $facets,
			"evidence" => $evidence,
			"cats" => $cats
		];
		array_push($desData,$data);
	}
	return $desData;
}

function printDesList($cat=NULL, $is_facet=false) {
	$desList = getDirs($cat);
	if($desList) {
		echo '<ul class="dashed">';
		foreach($desList as $desTitle) {
			$displayTitle = $desTitle;
			if(hasShortTitle($desTitle)) { $displayTitle = getShortTitle($desTitle); }
			$link = dirNoSpaces($desTitle);
			echo "<li><a href=\"index.php#{$link}\">{$displayTitle}</a></li>";
		}	
	}
	echo '</ul>';
}

function getLink($thisCat,$selectedCat) {
	$catLink = '';
	if($thisCat==$selectedCat) {
		$catLink = '#';
	} else if($thisCat=='confwebsite') {
		$catLink = 'conference-checklist.php?confwebsite';
	} else {
		$catLink = "index.php?{$thisCat}";
	}
	return $catLink;
}

function getFormattedButtonLink($thisSection,$selectedSection) {
	global $cat_ids,$facet_ids;
	if (array_key_exists($thisSection,$cat_ids)) {
		$array = $cat_ids;
	} elseif (array_key_exists($thisSection,$facet_ids)) {
		$array = $facet_ids;
	}
	$buttonTitle = $array[$thisSection][1];
	$buttonLink = getLink($thisSection,$selectedSection);
	$buttonClass = '';
	if($thisSection==$selectedSection) {
		$buttonClass = 'selected';
	}
	return "<a href=\"{$buttonLink}\"><div><div class=\"{$buttonClass}\">&nbsp;{$buttonTitle}&nbsp;</div></div></a>";
}

function getAllButtonClass($currentSection) {
	$allButtonClass = '';
	if (!$currentSection) $allButtonClass = 'selected';
	return $allButtonClass;
}

?>