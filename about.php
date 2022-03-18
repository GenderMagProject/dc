<?php
include('header.php');
?>

<div id="about">

<h1>About the GenderMag Design Catalog</h1>

<p>This website is a catalog of before/after examples of how to make your software more inclusive. Each design was improved using <a href="https://gendermag.org">GenderMag</a>. Click the filter buttons to navigate by category or GenderMag cognitive facet (explained below).</p>

<h2>What are the GenderMag cognitive facets?</h2> 

<p>The GenderMag cognitive facets are five aspects of users that affect how they solve problems in software: <strong>motivations, information processing style, computer self-efficacy, attitude toward risk, and learning style</strong>. Each facet has two values.</p>

<p>The facet values are grouped into three sets (or "personas"): <a href="AbiPersona.pdf">Abi</a>, <a href="PatriciaPersona.pdf">Pat</a>, and <a href="TimPersona.pdf">Tim</a>. Software tends to work better for the Tim persona, and less well for the Abi and Pat personas. To make your software more inclusive, make it work for as many facet values as you can. We recommend starting with Abi.</p>

<p><strong>Select a facet to learn more about it.</strong></p>

<ol>
	<li class="accordion">Motivations</li>
	<li class="panel">
		<div class="panel_headings">What is it?</div>
		<p>Motivation refers to why the person is using this technology? What do they hope to achieve?</p>
		<div class="panel_headings">Why is it relevant?</div>
		<p>Research showed that the tendency to use technology for the love of technology is more prevalent among men. Women tended to use technology because they had a particular task to carry out.</p>
		<div class="panel_headings">Evidence in the Personas</div>
		<p>In the Abi persona, Abi's motivation to use technology is to accomplish tasks. She prefers to use methods/features she already knows when she can.</p>
		<p>In contrast, the Tim persona uses technology in a broader scope. He likes to explore features regardless of whether they will be helpful in acomplishing his tasks.</p>	
	</li>
	<li class="accordion">Computer Self-Efficacy</li>
	<li class="panel">
		<div class="panel_headings">What is it?</div>
		<p>Computer Self-Efficacy takes into account a person’s confidence level on  whether they’ll succeed at a specific task using technology. It gives insignt on how likely a person is to give up on a task, their cognitive strategies, and how they cope when presented with obstacles.</p>
		<div class="panel_headings">Why is it relevant?</div>
		<p>Research showed that men tended to have higher computer self-efficacy than women.</p>
		<div class="panel_headings">Evidence in the Personas</div>
		<p>The two extremes of Computer Self-Efficacy are shown in the Abi and Tim personas.</p>
		<p>Abi has lower self confidence than her peers about doing unfamiliar computing tasks. If problems arise, she is more likely to blame herself.</p>
		<p>In contrast, Tim has high confidence in his abilities with technology, and thinks he’s better than the average person at learning new features. If he can’t fix the problem, he blames it on the software vendor.</p>
	</li>	
	<li class="accordion">Attitude towards Risk</li>
	<li class="panel">
		<div class="panel_headings">What is it?</div>
		<p>Attitute towards risk refers to whether people will venture out and engage with certain feautres that might not be helpful or waste time.</p>
		<div class="panel_headings">Why is it relevant?</div>
		<p>Research has indicated that women tend to be more risk-averse than men.</p>
		<p>This means that there is a group of users who may not engage with certain features, as they may consider the risk of using them to be too high and potentially waste time.</p>
		<div class="panel_headings">Evidence in the Personas</div>
		<p>The Abi persona represnts those who are risk averse about using unfamiliar technologies that may require more time to learn and use them, even if the new features may be relevant. Instead Abi works with features she is already familiar with.</p>
		<p>The Tim persona represents those who doesn’t mind taking risks when using features of technology that haven’t been proven to work. Regardless of whether certain features work or not his attitude towards technology remains the same.</p>	
	</li>	
	<li class="accordion">Information Processing Style</li>
	<li class="panel">
		<div class="panel_headings">What is it?</div>
		<p>Information processing style refers to how people look at and understand, new information in order to solve problems with technology.</p>
		<div class="panel_headings">Why is it relevant?</div>
		<p>Research shows that men tend to select promising leads, then backtrack if needed when using technology.</p>
		<p>Women tend to gather information more comprehensively, collecting a fairly complete set of necessary information before proceeding.</p>
		<div class="panel_headings">Evidence in the Personas</div>
		<p>A diffrence in information processing styles is seen in the contrast of the Abi and Tim persona.</p>
		<p>Abi tends towards a comprehensive information processing style when she needs more information. So she gathers as much information as possible about the problem before attempting to solve it.</p>
		<p>Tim in contrast, leans towards a selective information processing style or “depth first” approach. He pursues the first promising option to solve the problem, and works backwards if it doesn't work.</p>
	</li>	
	<li class="accordion">Learning Style</li>
	<li class="panel">
		<div class="panel_headings">What is it?</div>
		<p>Learning style refers to how people interact and go about technologies that are new or unknown to them.</p>
		<div class="panel_headings">Why is it relevant?</div>
		<p>In our research, men were much more likely than women to “tinker”. That is, playfully engage with a piece of technology while learning it.</p>
		<p>Women tended to follow a process when it came to learning.</p>
		<p>Note when women did tinker, they tended to do so more mindfully than men, and learned more thoroughly.</p>
		<div class="panel_headings">Evidence in the Personas</div>
		<p>In our Personas, Abi represents the group of users who are more process oriented. Those who refer to tutorials, step-by-step
		processes, wizards, online how-to videos, etc.</p>
		<p>The Tim persona, contrasts this by representing users who try to construct their own understanding of how the software/technology works internally, through tinkering;exploring the menu items and functions of the software in order to build that understanding.</p>
		<p>The Pat persona represents the middle ground; those who explore features more purposefully. That is reflecting on each bit of
		feedback they get along the way to understand how the features might be beneficial.</p>
	</li>	
</ol>

<h2>How do I contribute?</h2>

If you would like to contribute your own pre- and post-GenderMag designs to this website, please email us at <a href="mailto:gendermag.method@gmail.com">gendermag.method@gmail.com</a>.

</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

<?php
include('footer.php');
?>

