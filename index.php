<?php
/*
  Author: Jacob Pell
  Script: index.php
  LastUpdate: 11/08/2018
  Description: Index page for personal website and SDEV 253 project.
	       To be used as landing page for JPWeb website
*/

$author = "Jacob Pell";
$dateWritten = "11/08/2018";
$description = "Home page of JPWeb website";
$title = "Professional Web Design for Company or Personal Websites";
$pageID = "index";
$dbName = "jpellweb_projectJP";
$authenticated = 0;
$siteFlag = 0;

require("connecti2db.inc.php");
require("metaQueries.inc");
require("htmlHead.inc");
require("nav.inc");

echo <<<SECDOC
<article class="container-fluid text-center home">
    <div class="collab"></div>
    <h2 class="mx-auto">What can I do for you?</h2>
    <p class="col-md-6 mx-auto">The real question is, what are you looking for? Every website is unique and every need is different. If you are looking for a personal page you may only need a few basic pages, but if you are trying to run a small business you may need a full web application. We will work together to determine your needs and desires for your website and make it happen!</p>
</article>
SECDOC;
echo <<<SECDOC
<article class="container-fluid text-center home">
    <div class="proj"></div>
  	<h2 class="mx-auto">What do I bring to your next project?</h2>
  	<p class="col-md-6 mx-auto">Every client's needs are different and unique. What you are looking for in your next website, or re-design, may be very different from anyone else. I work with server-side and client-side tools to make sure that your users or customers have the web experience you want them to have. Whether you are looking for security in your administrator pages, or functionality for your next UX project, contact me to see what I can do for you!</p>
</article>
SECDOC;
echo <<<SECDOC
<article class="container-fluid text-center home">
    <div class="process"></div>
  	<h2 class="mx-auto">How does this process work?</h2>
  	<p class="col-md-6 mx-auto">The steps of creating and building a website can be a daunting task for many. There are a lot of things to consider like layouts, content, features, and even how the site is being hosted. I will help and walk you through these steps and try to make the process as simple as possible for you. We will work together on all steps of the process from the initial design and planning, all the way to the moment your website hits the web!</p>
</article>
SECDOC;

require("htmlFoot.inc");
mysqli_close($connection);
?>
