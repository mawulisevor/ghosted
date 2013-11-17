<?php
// Connection details
function setCon(){
    $host="localhost";
    $username="root";
    $password="senalabs";
    $dbase="ghosts";
    $custcon = @mysql_connect($host, $username, $password);
    if (!$custcon) {
    exit('<p>Unable to connect to the ' .
    'database server at this time.</p>');
    }
    if (!@mysql_select_db($dbase)) {
    exit('<p>Unable to locate the database at this time.</p>');
    }
}

//Number of ghosts per region === Select sum(cagd_roll-staff_roll) as ghost from centre where region like'%$Rname%'    
function setRegion($Rname){
    setCon();
    $total = @mysql_query("Select sum(cagd_roll-staff_roll) as ghost from centre where region like'%$Rname%'");
    if (!$total) {
    exit('<p>Error retrieving summary from database<br />'.
    'Error: ' . mysql_error() . '</p>');
    }

    while ($result = mysql_fetch_array($total)) {
            $resultset= $result['ghost'];
            echo $resultset ."from this $Rname";
    }
}   

//Number of ghosts per country === Select sum(cagd_roll-staff_roll) as ghost from centre
function getTotal(){
    setCon();    
    $total = @mysql_query("Select sum(cagd_roll-staff_roll) as ghost from centre");
    if (!$total) {
    exit('<p>Error retrieving summary from database<br />'.
    'Error: ' . mysql_error() . '</p>');
    }
    while ($result = mysql_fetch_array($total)) {
            $resultset= $result['ghost'];
            echo $resultset;
    }
    
}
function getAllRegions(){
    
    $total = @mysql_query("select region, sum(cagd_roll-staff_roll) as ghost from centre group by region order by ghost desc");
    if (!$total) {
    exit('<p>Error retrieving summary from database<br />'.
    'Error: ' . mysql_error() . '</p>');
    }
    print "<table class='table table-bordered'>
        <thead><tr><th>Region</th><th>Ghosts</th></tr></thead><tbody>";
    while ($result = mysql_fetch_array($total)) {
            $resultset= $result['ghost'];
            $region = $result['region'];
            print "<tr><td>$region</td><td>$resultset</td></tr>";
    }
    print "</tbody></table>";
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
function getAllMinistry(){
//    setCon();
    //if($Mname == NULL){echo NULL;}
    $total = @mysql_query("Select ministry, sum(cagd_roll-staff_roll) as ghost from centre group by ministry");
    if (!$total) {
    exit('<p>Error retrieving summary from database<br />'.  'Error: ' . mysql_error() . '</p>');
    }
    print "<table class='table table-bordered'>
        <thead><tr><th>Ministry</th><th>Ghosts</th></tr></thead><tbody>";
    while ($result = mysql_fetch_array($total)) {
            $resultset= $result['ghost'];
            $ministry = $result['ministry'];
            print "<tr><td>$ministry</td><td>$resultset</td></tr>";
    }
    print "</tbody></table>";
}

//Selecting data from regions table  ==== select region_name from region
function getRegions(){
    $total = @mysql_query("select region_name as Region from region");
    if (!$total) {
    exit('<p>Error retrieving regions from database<br />'.  'Error: ' . mysql_error() . '</p>');
    }
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
}
function findGhosts(){
    
    print "
            <input type='text' class='form-control' title='By Institution, District, Region or Ministry' placeholder='Search'>
            <button type='submit' class='btn btn-default'>Find them</button>
          
        ";
}

function findCentre($search){
    
        //Include the PS_Pagination class
        include('ps_pagination.php');
        
	//Connect to mysql db
        $host="localhost";
        $username="root";
        $password="senalabs";
        $dbase="ghosts";
        $conn = @mysql_connect($host, $username, $password);
        if (!$conn) {
        exit('<p>Unable to connect to the ' .
        'database server at this time.</p>');
        }
        if (!@mysql_select_db($dbase)) {
        exit('<p>Unable to locate the database at this time.</p>');
        }
	$sql = "Select centre_name, district,region, ministry, cagd_roll, staff_roll, (cagd_roll-staff_roll) as Ghosts from centre
                where centre_name like '%$search%' or district like '%$search%' or region like '%$search%' or ministry like '%$search%' order by Ghosts desc";
	
	/*
	 * Create a PS_Pagination object
	 * 
	 * $conn = MySQL connection object
	 * $sql = SQl Query to paginate
	 * 10 = Number of rows per page
	 * 5 = Number of links
	 * "param1=valu1&param2=value2" = You can append your own parameters to paginations links
	 */
	$pager = new PS_Pagination($conn, $sql, 15, 5);
	
	/*
	 * Enable debugging if you want o view query errors
	*/
	$pager->setDebug(true);
	
	/*
	 * The paginate() function returns a mysql result set
	 * or false if no rows are returned by the query
	*/
	$rs = $pager->paginate();
	if(!$rs) die(mysql_error());
        $abbr= "Controller and Accountant General Department";
        print "<table class='white table table-hover table-condensed table-bordered'>
            <thead><tr><th>Institution</th><th>District</th><th>Region</th><th>Ministry</th><th><abbr title='$abbr'>CAGD</abbr> Roll</th><th>Staff Roll</th><th>Ghosts</th></tr></thead><tbody>";
        while ($result = mysql_fetch_assoc($rs)) {
                    $resultset= $result['Ghosts'];$region = $result['region'];$centre = $result['centre_name'];$district = $result['district'];
                    $ministry = $result['ministry'];$cagd_roll = $result['cagd_roll'];$staff_roll = $result['staff_roll'];
                print "<tr><td>$centre</td><td>$district</td><td>$region</td><td>$ministry</td><td>$cagd_roll</td><td>$staff_roll</td><td>$resultset</td></tr>
                      ";
        }
        print "</tbody></table>";
	//Display the full navigation in one go
	echo $pager->renderFullNav();
	
	/*
	 * Or you can display the individual links for more control over HTML rendering.
	*/
	//Display the link to first page: First 
}
function getCentres(){
        //Include the PS_Pagination class
        include('ps_pagination.php');
        
	//Connect to mysql db
        $host="localhost";
        $username="root";
        $password="senalabs";
        $dbase="ghosts";
        $conn = @mysql_connect($host, $username, $password);
        if (!$conn) {
        exit('<p>Unable to connect to the ' .
        'database server at this time.</p>');
        }
        if (!@mysql_select_db($dbase)) {
        exit('<p>Unable to locate the database at this time.</p>');
        }
	$sql = "Select centre_name, district,region, ministry, cagd_roll, staff_roll, (cagd_roll-staff_roll) as Ghosts from centre order by Ghosts desc";
	
	/*
	 * Create a PS_Pagination object
	 * 
	 * $conn = MySQL connection object
	 * $sql = SQl Query to paginate
	 * 10 = Number of rows per page
	 * 5 = Number of links
	 * "param1=valu1&param2=value2" = You can append your own parameters to paginations links
	 */
	$pager = new PS_Pagination($conn, $sql, 15, 5);
        
	
	/*
	 * Enable debugging if you want o view query errors
	*/
	$pager->setDebug(true);
	
	/*
	 * The paginate() function returns a mysql result set
	 * or false if no rows are returned by the query
	*/
        
	$rs = $pager->paginate();
        
	if(!$rs) die(mysql_error());
        $abbr= "Controller and Accountant General Department";
        print "<table class='table white table-hover table-condensed table-bordered'>
            <thead><tr><th>Ministry</th><th>Region</th><th>Institution</th><th>District</th><th><abbr title='$abbr'>CAGD</abbr> Roll</th><th>Staff Roll</th><th>Ghosts</th></tr></thead><tbody>";
        while ($result = mysql_fetch_assoc($rs)) {
                    $resultset= $result['Ghosts'];$region = $result['region'];$centre = $result['centre_name'];$district = $result['district'];
                    $ministry = $result['ministry'];$cagd_roll = $result['cagd_roll'];$staff_roll = $result['staff_roll'];
                print "<tr><td>$ministry</td><td>$region</td><td>$centre</td><td>$district</td><td>$cagd_roll</td><td>$staff_roll</td><td>$resultset</td></tr>
                      ";
        }
        print "</tbody></table>";
	//Display the full navigation in one go
	echo $pager->renderFullNav(); //echo "<br />\n";
	
	/*
	 * Or you can display the individual links for more control over HTML rendering.
	*/
	//Display the link to first page: First 
}

?>
