<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <?php require_once("head.php");?>
    <body>
        <?php 
        require_once("summary.php");
        require_once("c_menu.php");
        setCon();
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
	$sql = 'Select centre_name, district,region, ministry, cagd_roll, staff_roll, (cagd_roll-staff_roll) as Ghosts from centre order by Ghosts desc';
	
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
        print "<table class='table table-hover table-condensed table-bordered'>
            <thead><tr><th>Institution</th><th>District</th><th>Region</th><th>Ministry</th><th><abbr title='$abbr'>CAGD</abbr> Roll</th><th>Staff Roll</th><th>Ghosts</th></tr></thead><tbody>";
        while ($result = mysql_fetch_assoc($rs)) {
                $resultset= $result['Ghosts'];
                $region = $result['region'];
                $centre = $result['centre_name'];
                $district = $result['district'];
                $ministry = $result['ministry'];
                $cagd_roll = $result['cagd_roll'];
                $staff_roll = $result['staff_roll'];
                print "<tr><td>$centre</td><td>$district</td><td>$region</td><td>$ministry</td><td>$cagd_roll</td><td>$staff_roll</td><td>$resultset</td></tr>
                      ";
        }
        print "</tbody></table>";
	//Display the full navigation in one go
	//echo $pager->renderFullNav(); //echo "<br />\n";
	
	/*
	 * Or you can display the individual links for more control over HTML rendering.
         * <ul class="pagination">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
	*/
	//Display the link to first page: First
        
        echo ' '.$pager->renderFirst().' ';
	//Display the link to previous page: <<
        
        echo ' '.$pager->renderPrev().' ';
	/*
	 * Display page links: 1 2 3
	 * $prefix = Will be prepended to the page link (optional)
	 * $suffix = Will be appended to the page link (optional)
	 * 
	*/
	echo ' '.$pager->renderNav('<span>', '</span>').' ';
	//Display the link to next page: >>
        
	echo ' '.$pager->renderNext().' ';
	
	//Display the link to last page: Last
	echo ' '.$pager->renderLast().' ';
        
        ?>

       
  
  

        
        
        
        
       <?php// getAll();?>
    <!-- FOOTER -->
      <?php require_once("footer.php");?>
    </body>
</html>
