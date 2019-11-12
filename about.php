<?php
/*
  Author: Jacob Pell
  Script: about.php
  LastUpdate: 11/08/2018
  Description: About page for personal website and SDEV 253 project.
*/

$author = "Jacob Pell";
$dateWritten = "11/08/2018";
$description = "About page of JPWeb website";
$title = "About JPWeb: Jacob Pell";
$pageID = "about";
$dbName = "jpellweb_projectJP";
$authenticated = 0;
$siteFlag = 0;

require("connecti2db.inc.php");
require("metaQueries.inc");
require("htmlHead.inc");
require("nav.inc");

echo <<<ABOUTDOC
<article class="row">
  <img class="img col-md-2 offset-md-1 round" src="img/linkedin_pic.jpg" width="200" height="200" alt="Profile picture of Jacob Pell" />
  <div class="col-md-8">
    <h2 class="col-md mx-auto text-center">Bio</h2>
    <p class="col-md mx-auto text-center">I'm Jacob Pell, founder and sole employee of JP Web! I have been involved in web development since my first web scripting class over a year ago. Since then I have fallen in love with the art of web development. I'm 30 years old and live in Central Indiana with my family. My education comes from Ivy Tech where I am obtaining an Associate in Software Development with aspirations to move farther depending on where my career takes me. I'm a grand nerd of many colors from Harry Potter to Battlestar Galactica. I'm an avid reader (well, audiobook since I am aways working in one capacity or another) and my tastes vary depending on my mood. I've always had a creative eye, and was fortunate to discover web development and design which allows me to mingly my analytic and creative aspects of my brain!</p>
  </div>
</article>
<article class="row">
  <h2 class="col-md-3 my-auto text-center">Education</h2>
  <p class="col-md-8 text-center">I am currently in pursuit of my Associate in Software Development with a certification in Web Applications Development and Java Development from Ivy Tech. I am working on getting a certification in PHP and MySQL as well. I am always working diligently to learn new frameworks and technologies to stay up to date with modern web practices. The quest for education is never ending, but it is one that I am happy to take! If you would like to see some of my development work, please visit my <a href="fortfolio.php">portfolio page</a> where I will continue to post the websites I have completed for my clients.</p>
</article>
<article class="row">
  <h2 class="col-md-3 my-auto text-center">Contact</h2>
  <p class="col-md-8 text-center">If you would like to contact me about a website, whether new build or re-design, please visit my <a href="contact.php">contact page</a> where you can provide some details about your project and I will get back to you in a very timely manner. You can also find me on social media. A few of my social media links are listed below in the footer of the website. I'm always seeking new clients and opportunities! Please feel free to explore this website as well as the sites of my other clients found on the <a href="portfolio.php">portfolio page</a>. Not only will you enjoy their site, but they would enjoy your business and interest!</p>
</article>
ABOUTDOC;

require("htmlFoot.inc");
mysqli_close($connection);
?>
