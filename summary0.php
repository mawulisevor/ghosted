'ASHANTI','BRONG AHAFO','CENTRAL','EASTERN','GREATER ACCRA','NORTHERN','UPPER EAST','UPPER WEST','VOLTA','WESTERN'
<?php
// Connection details

class More{
    function functionName(){}
}
define('QUERY', htmlspecialchars($_POST['s4g']));
                   if(!(QUERY === NULL)){
                       //$find=htmlspecialchars($_POST['s4g']);
                       //$query=htmlspecialchars($_POST['s4g']);
                       print '<div class="white" id="institutions">';
                        findCentre(htmlspecialchars(QUERY));
                        print '</div>';
//Number of ghosts per region === Select sum(cagd_roll-staff_roll) as ghost from centre where region like'%$Rname%'    
function setRegion($Rname){
    setCon();
    $total = @mysql_query("Select sum(cagd_roll-staff_roll) as ghost from centre where region like'%$Rname%'");
    if (!$total) {
    exit('<p>Error retrieving summary from database<br />'.
    'Error: ' . mysql_error() . '</p>');
    }

    $rows = array();
    while($r = mysql_fetch_assoc($total)) {
        $rows[] = $r;
    }
    $data = array($Rname => $rows);
    print json_encode($data);
}   

//Number of ghosts per country === Select sum(cagd_roll-staff_roll) as ghost from centre
function getTotal(){
    setCon();    
    $total = @mysql_query("Select sum(cagd_roll-staff_roll) as ghost from centre");
    if (!$total) {
    exit('<p>Error retrieving summary from database<br />'.
    'Error: ' . mysql_error() . '</p>');
    }
    
    $rows = array();
    while($r = mysql_fetch_assoc($total)) {
        $rows[] = $r;
    }
    $data = array('All' => $rows);
    print json_encode($data);
    
}
//All ghosts in the database === Select sum(cagd_roll-staff_roll) as ghost from centre where region like'%$Rname%' group by district
function getAll(){
    $total = @mysql_query("Select centre_name as Institution, district as District,region as Region, ministry as Ministry, cagd_roll as CAGDNo, staff_roll as StaffNo, (cagd_roll-staff_roll) as Ghosts from centre");
    if (!$total) {
    exit('<p>Error retrieving summary from database<br />'.
    'Error: ' . mysql_error() . '</p>');
    }
    //====================================================================
    //
    //====================================================================
    $rows = array();
    while($r = mysql_fetch_assoc($total)) {
        $rows[] = $r;
    }
    $data = array('Institutions' => $rows);
    print json_encode($data);


}


//Number of ghosts per a district in region === Select sum(cagd_roll-staff_roll) as ghost from centre where region like'%$Rname%' and district like '%$Dname%'
function setDistrict($Rname,$Dname){
//    setCon();
    $total = @mysql_query("Select sum(cagd_roll-staff_roll) as ghost from centre where region like'%$Rname%' and district like '%$Dname%'");
    if (!$total) {
    exit('<p>Error retrieving summary from database<br />'.
    'Error: ' . mysql_error() . '</p>');
    }
    $rows = array();
    while($r = mysql_fetch_assoc($total)) {
        $rows[] = $r;
    }
    $data = array('Result' => $rows);
    print json_encode($data);
    
}           
//Number of ghosts per all districts in region === Select sum(cagd_roll-staff_roll) as ghost from centre where region like'%$Rname%' group by district
function setAllDistrictsRegion($Rname){
//    setCon();
    $total = @mysql_query("Select district, sum(cagd_roll-staff_roll) as ghost from centre where region like'%$Rname%' group by district");
    if (!$total) {
    exit('<p>Error retrieving summary from database<br />'.
    'Error: ' . mysql_error() . '</p>');
    }
    //====================================================================
    //
    //====================================================================
    $rows = array();
    while($r = mysql_fetch_assoc($total)) {
        $rows[] = $r;
    }
    $data = array('District' => $rows);
    print json_encode($data);


}

//Number of ghosts of all ministries by region=== Select ministry, sum(cagd_roll-staff_roll) as ghost from centre
function setAllMinistryRegion(){
    //    setCon();
    $total = @mysql_query("Select ministry,region, sum(cagd_roll-staff_roll) as ghost from centre group by ministry,region");
    if (!$total) {
    exit('<p>Error retrieving summary from database<br />'.
    'Error: ' . mysql_error() . '</p>');
    }
    $rows = array();
    while($r = mysql_fetch_assoc($total)) {
        $rows[] = $r;
    }
    $data = array('District' => $rows);
    print json_encode($data);

}
// Retrieve for all ministries
function setAllMinistry(){
//    setCon();
    //if($Mname == NULL){echo NULL;}
    $total = @mysql_query("Select ministry, sum(cagd_roll-staff_roll) as ghost from centre group by ministry");
    if (!$total) {
    exit('<p>Error retrieving summary from database<br />'.  'Error: ' . mysql_error() . '</p>');
    }
    print '<p>Grrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr</p>';
    $rows = array();
    while($r = mysql_fetch_assoc($total)) {
        $rows[] = $r;
    }
    $data = array('District' => $rows);
    print json_encode($data);
}

//Selecting data from regions table  ==== select region_name from region
function getRegions(){
    $total = @mysql_query("select region_name as Region from region");
    if (!$total) {
    exit('<p>Error retrieving regions from database<br />'.  'Error: ' . mysql_error() . '</p>');
    }
    print '<p>Grrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr</p>';
    $rows = array();
    while($r = mysql_fetch_assoc($total)) {
        $rows[] = $r;
    }
    $data = array('Regions' => $rows);
    print json_encode($data);
}

//Selecting data from regions table  ==== select region_name from region
function getDistricts(){
    $total = @mysql_query("select district_name, region_name from district join region on district.region_id=region.region_id order by region_name");
    if (!$total) {
    exit('<p>Error retrieving regions from database<br />'.  'Error: ' . mysql_error() . '</p>');
    }
    print '<p>Grrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr</p>';
    $rows = array();
    while($r = mysql_fetch_assoc($total)) {
        $rows[] = $r;
    }
    $data = array('Districts' => $rows);
    print json_encode($data);
                   }}
?>





//Contacts form
<?php 
$your_email ='ghostsbusters@gmail.com';// <<=== update to your email address

session_start();
$errors = '';
$name = '';
$visitor_email = '';
$user_message = '';

if(isset($_POST['submit']))
{
	
	$visitor_email = $_POST['email'];
	$user_message = $_POST['message'];
	///------------Do Validations-------------
	if(empty($user_message))
	{
		$errors .= "\n You cannot send an empty message. ";	
	}
	if(IsInjected($visitor_email))
	{
		$errors .= "\n Bad email value!";
	}
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	}
	
	if(empty($errors))
	{
		//send the email
		$to = $your_email;
		$subject="New form submission";
		$from = $your_email;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		$body = "A user  $name submitted the contact form:\n".
		"Name: $name\n".
		"Email: $visitor_email \n".
		"Message: \n ".
		"$user_message\n".
		"IP: $ip\n";	
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $visitor_email \r\n";
		
		mail($to, $subject, $body,$headers);
		
		header('Location: thank-you.html');
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once("head.php");
        require_once("summary.php");
        setCon();
    ?>
    <body>
    <?php require_once("summary.php");
        setCon();
    ?>
<container>
    <div class="container white top">
        <h1 class="identity page-header">
            <strong><span class="ghosts">kB</span></strong>
            <span class="busters">Ghostbusters GH</span>
        </h1>

        <div class="navbar-wrapper">
         <ul class="nav navbar-inverse nav-tabs">
            <li><a title="Ghostbusters Homepage"id='top' href="index.php" >Home</a></li>
            <li><a title="All institutions in our database" href="institutions.php">Institutions</a></li>
            <li><a title="Report a ghost at your workplace" href="#">Bust the ghost</a></li>
            <li><a title="Ghosts on Ghana government payroll" href="#"><span class="text-danger"><b><?php getTotal();?> </b></span>ghosts identified</a></li>
          </ul>
        </div>
    </div>


<div class="row pink jumbotron collab" id="colla">
    <div class="col-lgs-8 ">
           <h3>Supported by</h3>
                   <?php
           if(!empty($errors)){
           echo "<p class='err'>".nl2br($errors)."</p>";
           }
           ?>
           <div id='contact_form_errorloc' class='err'></div>
           <form class='form' method="POST" name="contact_form" 
           action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"> 
           <p>
           <label for='email'>Email (Not required): </label><br>
           <input type="text" placeholder='myemail@example.com' name="email" value='<?php echo htmlentities($visitor_email) ?>'>
           </p>
           <p>
           <label for='message'>Message:</label> <br>
           <textarea required autofocus name="message"><?php echo htmlentities($user_message) ?></textarea>
           </p>
           <p>
           <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
           <label for='message'>Enter the code above here:</label><br>
           <input required id="6_letters_code" name="6_letters_code" type="text"><br>
           <small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
           </p>
           <button class="btn btn-large btn-primary btn-block" type="submit" name='submit'>Submit</button>
    </div>
</div>    


</container>


<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*800;
}
</script>
    </body>
</html>
