<?php
/*	Author: 	Jacob Pell	
	Program:	htmlFoot.inc
	Date Written:	09/02/2018	
	Description:	Include file for session demos
*/

$year = "2018";

echo <<<FOOTDOC
<footer>
  <div class="row text-center no-gutters my-0">
    <a href="https://www.facebook.com/jpewb.us/" target="_blank" class="fb col mb-0"><i class="fab fa-facebook-square mr-2"></i>Facebook</a>
    <a href="https://twitter.com/jpweb_developer" target="_blank" class="tw col mb-0"><i class="fab fa-twitter-square mr-2"></i>Twitter</a>
    <a href="https://www.linkedin.com/in/jacob-pell-6a824a110/" target="_blank" class="in col mb-0"><i class="fab fa-linkedin mr-2"></i>LinkedIn</a>
    <a href="contact.php" target="_blank" class="email col mb-0"><i class="fas fa-envelope-square mr-2"></i>Email</a>
  </div>
  <div class="row no-gutters my-0">
    <p class="text-center col mb-0" id="copyright">&copy; $year. JPWeb.</p>
  </div>
</footer>
FOOTDOC;

echo "</div>\n";
echo "</body>\n</html>";
?>
