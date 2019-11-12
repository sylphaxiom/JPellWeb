<?php
/*
  Author: Jacob Pell
  Script: contact.php
  LastUpdate: 11/08/2018
  Description: Contact page for personal website and SDEV 253 project.
	       To be used as landing page for JPWeb website
*/

$author = "Jacob Pell";
$dateWritten = "11/08/2018";
$description = "Contact page of JPWeb website";
$title = "Contact JPWeb for Your New Website or Website Update";
$pageID = "contact";
$dbName = "jpellweb_projectJP";
$thisScript = htmlspecialchars($_SERVER['PHP_SELF']);
$authenticated = 0;
$siteFlag = 0;

function formatPhone($number)
{
  $split = str_split($number,3);
  $phoneNum = "(".$split[0].")".$split[1]."-".$split[2].$split[3];
  return $phoneNum;
}

require("connecti2db.inc.php");
require("metaQueries.inc");
require("htmlHead.inc");
require("nav.inc");

if(!isset($_POST['submit']))
{
echo <<<FORMDOC
<h2 class="text-center mx-auto">Contact Request</h2>
<p class="text-center mx-auto col-md-10 offest-md-1">Please fill out this form below to submit your contact request. All fields are required with the exception of the "company" field if you are requesting a personal website and the "phone number" field. The description need only be brief in order to give me a general idea of what you are looing for. We will go into more detail during the planning process. Quotes are based on the complexity of the website as well as the features you would like to have available. I will return your request by email in a timely manner so we can get the ball rolling on your new (or improved!) website!</p>
<form action="$thisScript" method="post" class="container text-center">
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="col-md-3" id="fname" name="fname" max-length="15" placeholder="John" required />
    <label for="lname">Last Name</label>
    <input type="text" class="col-md-3 ml-2" id="lname" name="lname" max-length="15" placeholder="Doe" required />
    <label for="biz" class="col-md-2">Business<input type="radio" name="type" value="business" id="biz" class="ml-2" /></label>
    <label for="pers" class="col-md-2">Personal<input type="radio" name="type" value="personal" id="pers" class="ml-2" checked /></label>
  </div>
  <div class="form-group row justify-content-start">
    <label for="email" class="col-md-1">Email</label>
    <input type="email" class="col-md-3" id="email" name="email" max-length="25" placeholder="example@gmail.com" required />
    <label for="company" class="col-md-1">Company</label>
    <input type="text" class="col-md-4" id="company" name="company" max-length="15" placeholder="Company Inc" />
    <label for="phone" class="col-md-1">Phone</label>
    <input type="number" class="col-md-2" id="phone" name="phone" min="1000000000" max="9999999999" />
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea id="description" name="description" rows="5" cols="80" required></textarea>
    <button type="reset" name="reset" class="btn btn-primary col-md-2 mb-4 ml-2" value="reset">Clear Form</button>
    <button type="submit" name="submit" class="btn btn-primary col-md-2 mb-4 ml-2" value="submit">Submit</button>
  </div>
</form> 
FORMDOC;
} // END IF !ISSET
else
{
$fname = mysqli_real_escape_string($connection,stripslashes($_POST['fname']));
$lname = mysqli_real_escape_string($connection,stripslashes($_POST['lname']));
$email = mysqli_real_escape_string($connection,stripslashes($_POST['email']));
$phone = mysqli_real_escape_string($connection,stripslashes($_POST['phone']));
if(isset($_POST['company']))
{ $company = mysqli_real_escape_string($connection,stripslashes($_POST['company'])); }
else
{ $company = "personal"; }
$type = mysqli_real_escape_string($connection,stripslashes($_POST['type']));
$request = mysqli_real_escape_string($connection,stripslashes($_POST['description']));

$query = "INSERT INTO contactReq
	  (firstName,lastName,email,phone,company,type,request)
	  VALUES
	  ('$fname','$lname','$email','$phone','$company','$type','$request')";
$result = mysqli_query($connection,$query)
or
die("<b>Query Failed.</b><br />" . mysqli_error($connection));

echo <<<RESULTDOC
<h2 class="text-center mx-auto">Thank You</h2>
<p class="text-center mx-auto col-md-8">I appreciate you contacting me regarding your web needs. An email has been sent to me containing your information and I will be in touch shortly to follow up and begin the process of working on your web project!</p>
<p class="text-center mx-auto col-md-8">If you would like, you can visit me on <a href="https://www.facebook.com/jpewb.us">Facebook</a> or <a href="https://twitter.com/jpweb_developer">Twitter</a> where you can find more information and see what I've been up to lately!</p>
RESULTDOC;

  // build email headers
  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "To: Jacob Pell <pelljacoba@gmail.com>\r\n";
  $headers .= "From: JP Web Contact <jpell3@ivytech.edu>\r\n";
  $headers .= "X-Priority: 1\r\n";
  $headers .= "X-MSMail-Priority: High\r\n";
  $headers .= "X-Mailer: PHP / ".phpversion() ."\r\n";
  $subject  = "You have a new contact request!";

  $body  = "<p>You have a new contact request from $fname $lname</p>\n";
  $body .= "Company: $company<br>\n";
  $body .= "Email: $email<br>\n";
  $body .= "Phone Number: ".formatPhone($phone)." <br />";
  $body .= "<p>$request</p>\n";
  $body  = stripslashes($body);

  // send the email
  mail("",$subject,$body,$headers);

} // END ELSE !ISSET

require("htmlFoot.inc");
mysqli_close($connection);
?>
