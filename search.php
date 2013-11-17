<!DOCTYPE html>
<html>
    <?php require_once("head.php");?>
    <body>
        <div class="container" id="top">
            <?php require_once("c_menu.php");?>
            <div class="white" id="search">
                <?php   
                            if(isset($_REQUEST['s4g'])|| isset($_REQUEST['f'])) {
                                if(!isset($_REQUEST['s4g'])){$search= htmlspecialchars($_REQUEST['f']);}
                                else {$search= htmlspecialchars($_REQUEST['s4g']);}
                                print '<div class="white" id="search">';
                                //findCentre(QUERY);
//Include the PS_Pagination class
        include('ps_pagination.php');
       // include('condb.php');
        // setLocalCon();
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
	//Connect to mysql db
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
	$pager = new PS_Pagination($conn, $sql, 15, 5,"f=$search");
	
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
            <thead><tr><th>Ministry</th><th>Region</th><th>Institution</th><th>District</th><th><abbr title='$abbr'>CAGD</abbr> Roll</th><th>Staff Roll</th><th>Ghosts</th></tr></thead><tbody>";
        while ($result = mysql_fetch_assoc($rs)) {
                    $resultset= $result['Ghosts'];$region = $result['region'];$centre = $result['centre_name'];$district = $result['district'];
                    $ministry = $result['ministry'];$cagd_roll = $result['cagd_roll'];$staff_roll = $result['staff_roll'];
                print "<tr><td>$ministry</td><td>$region</td><td>$centre</td><td>$district</td><td>$cagd_roll</td><td>$staff_roll</td><td>$resultset</td></tr>
                      ";
        }
        print "</tbody></table>";
	//Display the full navigation in one go
	echo $pager->renderFullNav();
	                                
                                print '</div>';
                            }
       else{
           print "
                  <div class='container'>
                      <span class='centre alert-danger'><h3>Look for ghosts in the search box above</h3></span>
                      <span class='centre'><h1>Top 5 Haunted Ministries in August with ghosts per region</h1></span>
                      <span><canvas id='cvs1' width='900' height='500'>[No canvas support]</canvas></span>
    <script>
        window.onload = function ()
        {
            var bar = new RGraph.Bar('cvs1', [[45,40,34,30,30,25,28,33,29,32],[40,43,37,38,39,30,28,27,26,38],[8,24,33,23,32,40,54,12,32,10], [28,33,18,39,20,44,17,26,35,37], [12,9,8,10,15,33,21,19,22,29]])
            bar.Set('grouping', 'stacked');
            bar.Set('labels', ['Education','Finance','Interior','Agriculture','Local Government']);
            bar.Set('labels.above', true);
            bar.Set('background.grid', false);
            bar.Set('labels.above.decimals', 0);
            bar.Set('linewidth', 1);
            bar.Set('strokestyle', 'white');
            bar.Set('colors', ['#66f','#F56E14','#2A820A','#BE0768','#5F0467','#06BD4C','#BD0631','#977B55','#0C0331','#83950E']);
            bar.Set('shadow', true);
            bar.Set('shadow.offsetx', 0);
            bar.Set('shadow.offsety', 0);
            bar.Set('shadow.blue', 1);
            bar.Set('hmargin', 25);
            bar.Set('gutter.left',45);
            bar.Set('background.grid.vlines', false);
            bar.Set('background.grid.border', false);
            bar.Set('axis.color', '#ccc');
            bar.Set('noyaxis', false);
            bar.Set('key', ['ASH','BA','CR','EA','GA','NR','UE','UW','VR','WR']);
            bar.Set('key.position', 'gutter');
            bar.Set('key.position.x', bar.canvas.width - 600);
            bar.Set('key.position.y', 20);
            bar.Set('key.colors', ['#66f','#F56E14','#2A820A','#BE0768','#5F0467','#06BD4C','#BD0631','#977B55','#0C0331','#83950E']);
            
            bar.ondraw = function (obj)
            {
                for (var i=0; i<obj.coords.length; ++i) {
                    obj.context.fillStyle = 'white';
                    RGraph.Text(obj.context, 'Verdana', 10, obj.coords[i][0] + (obj.coords[i][2] / 2), obj.coords[i][1] + (obj.coords[i][3] / 2),obj.data_arr[i].toString(),'center', 'center', null,null,null,true);
                }
            }
            
            bar.Draw();
        }
    </script>
                </div>";
       }            
                  
                ?>
            </div>
        </div>
        
    <!-- FOOTER -->
      <?php require_once("footer.php");?>
    </body>
</html>
