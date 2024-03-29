# GenderMag Design Catalog

The purpose of the GenderMag Design Catalog (http://gendermag.org/dc/) is to provide ideas for making software user interfaces inclusive to more cognitive styles.

## Overview of How to Contribute
**Prerequisites**: These instructions are for _GenderMagProject/dc_ repo collaborators with access to _gendermag/dc_ on the OSU _guille_ server. Please contact Lara Letaw at letawl@oregonstate.edu if you'd like to become a new collaborator.

Overall procedure for getting started and contributing:
1. Modify files in _gendermag/dc_ as needed.
2. If you feel like it, commit, push to origin---or you can wait for another maintainer to do that.

I know this setup is a little unconventional, but it should be fine for our purposes for now.

## How to Add to the Catalog
1. Create a new top-level folder. The name of the folder is title (short description) of the design change.
2. Add these files to the folder:
	- cats.txt (the non-facet categories the design goes in, one per line. options: survey, opensource, website)
	- problem.txt (why the design isn't inclusive to some cognitive styles)
	- solution.txt (how the design tries to solve the problem)
	- facets.txt (one facet per line, use these abbreviations: m, cse, atr, ips, ls)
	- zoom_before.png (what the design looked like before it was changed; png or jpg; other image formats might also work)
	- zoom_after.png (what the design looked like after it was changed; png or jpg; other image formats might also work)
	- evidence.txt (what paper proves it's a good design change -- optional)
  - long_title.txt (a brief description of the problem / design change, about a sentence)

3. See rubric below for more guidance

### Facets Cheat Sheet
* m - Motivation
* cse - Computer Self-Efficacy
* atr - Attitude Toward Risk 
* ips - Information Processing Style
* ls - Learning Style

### Rubric for adding a new design
- Folder name / Title: follow the format of the other titles.
- Long title: put solution first followed by verbage used in the facet description (e.g., helps with confidence, navigating, etc.)
- Problem Column:
  * Problem statement about which items specifically in the UI are problematic (**past tense**)
  * A single facet is chosen as the “prominent” facet and used to describe why a user would run into issues (**present tense**)
  * "Also affects users with:" other facets that are implicated but said with an Abi or Tim trait (i.e., low computer self efficacy, selective information processing style, etc.)
- Solution Column:
  * Solution statement about which items specifically in the UI were fixed (**past tense**)
  * Reference a single “prominent” facet to describe how the fix helps that type of user. Also, include how it doesn’t hinder a persona with the opposite end of the spectrum facet. (i.e., help risk aversion but doesn’t hurt risk tolerant) (**present tense**)
  * Use wording that applies to the fix (e.g., Better organization also helps users with:) and list the facets that were implicated with the problem column
- Evidence File (optional):
  * Add a validation (e.g., user study) (**past tense**)
