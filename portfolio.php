<?php
/*
  Author: Jacob Pell
  Script: portfolio.php
  LastUpdate: 11/08/2018
  Description: Portfolio page for personal website and SDEV 253 project.
*/

$author = "Jacob Pell";
$dateWritten = "11/08/2018";
$description = "Portfolio page of JPWeb website";
$title = "JPWeb Design Portfolio";
$pageID = "portfolio";
$dbName = "projectJP";
$authenticated = 0;
$siteFlag = 0;

require("connecti2db.inc.php");
require("metaQueries.inc");
require("htmlHead.inc");
require("nav.inc");

echo <<<PORTDOC
<div class="row">
  <a class="sitelink row" href="https://www.al-van.org" target="_blank">
    <img src="img/AV_screenshot.PNG" width="260" height="180" class="img-fluid col-md-3 my-auto ml-md-3" alt="Screen shot of Al-Van website" />
    <div class="col-8">
      <h2 class="text-center">Al-Van Humane Society</h2>
      <p class="text-center">The Al-Van Humane Society site was my first. The site was built with a Bootstrap framework, custom JavaScript, and HTML. The site will soon be undergoing an overhaul to turn it into a full CMS application to allow the client to better update the site themselves. After this overhaul, it will be built with PHP.</p>
    </div>
  </a>
  <a class="sitelink row" href="wedding/landing.php" target="_blank">
    <img src="img/200px-Commons-emblem-Under_construction-green.svg.png" width="200" height="200" class="img-fluid col-md-3 my-auto ml-md-3" alt="under construction img" />
    <div class="col-8">
      <h2 class="text-center">The Pell Wedding</h2>
      <p class="text-center">This is my wedding website. Built as a full PHP web application, this site allows users to sign in, register, interact with a database by selecting items from the wedding registry, and allows the guests to RSVP for the wedding. This site is still under construction and will be available shortly. A test of the full functionality will not be possible, due to security permissions, until after the wedding date.</p>
    </div>
  </a>
</div>
<div class="row">
  <a class="sitelink row" href="#" target="_blank">
    <img src="img/200px-Commons-emblem-Under_construction-green.svg.png" width="200" height="200" class="img-fluid col-md-3 my-auto ml-md-3" alt="under construction img" />
    <div class="col-8">
      <h2 class="text-center">R &amp; M Music and Memories</h2>
      <p class="text-center">R &amp; M Music and Memories is a DJ in Mishawaka, IN. His site is another full web application. The site has the capability to log in to a personal profile, select music choices from a database, choose from a selection of options, manage client documents and contracts, and provide online payments. This site is still under construction and will hopefully be available soon.</p>
    </div>
  </a>
  <a class="sitelink row" href="#" target="_blank">
    <img src="img/200px-Commons-emblem-Under_construction-green.svg.png" width="200" height="200" class="img-fluid col-md-3 my-auto ml-md-3" alt="under construction img" />
    <div class="col-8">
      <h2 class="text-center">Mae Flower Cakes</h2>
      <p class="text-center">The business page of an Indianapolis cake decorator and baker, this site is my newest project and work has not begun on it yet. We are still in the planning and development phase of the project. From my conversations with the client, she would like a beautiful site from chich she can do business and show off her decorating portfolio. We have yet to decide on theme or full functionality yet. I will update as the project progresses.</p>
    </div>
  </a>
</div>
PORTDOC;

require("htmlFoot.inc");
mysqli_close($connection);
?>
