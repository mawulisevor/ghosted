<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once("head.php");        
    ?>
    <body>
      
      
      <div class="container" id="top">
<div class="container">
    <h1 class="identity page-header">
        <strong><span class="ghosts">kB</span></strong>
        <span class="busters">Ghostbusters GH</span>
    </h1>

    <div class="navbar-wrapper">
     <ul class="nav navbar-inverse nav-tabs">
            <li><a class="btn btn-default btn-large menu"title="Ghostbusters Homepage"id='top' href="index.php" >Home</a></li>
            <li><a class="btn btn-default btn-large menu" title="All institutions in our database" href="institutions.php">Institutions</a></li>
            <li><a class="btn btn-default btn-large active menu" title="Report a ghost at your workplace" href="reportit.php">Bust the ghost</a></li>
            <li><a class="btn btn-default btn-large menu disabled" title="Ghosts on Ghana government payroll" href="#"><span class="text-danger"><b><?php getTotal();?> </b></span>ghosts identified</a></li>
        <form class="navbar-form pull-right form-inline" action="search.php" method="post">
            <input style="width: 500px;" type="text" required name="s4g" title="By Institution, District, Region or Ministry"placeholder="Search">
            <button type="submit" class="btn btn-primary btn-default btn-mini">Find them</button>
        </form>
      </ul>
    </div>
</div> <!-- menu ends here -->
          
<div class="row pink jumbotron collab">
      <h2>Report a ghost | Or give us feedback</h2>
      <p>Remember: You have a role to play in busting ghosts. </p>
      <div class="row">
        
          <form class=" form-horizontal" action="mailto:report@ghosts.gh.com" method="post" enctype="text/plain" id="request_form">
            <fieldset>
        <div class="col-lg-5">
                    Phone: +233-208359041<br />
                    Email: report@ghosts.gh.com<br />
                    <input type="text" name="visitor" id="visitor" value="Name (not required)" size="22"/><br /><br />
                    <input type="email" name="email" id="email" value="Email (not required)" size="22"/>
        </div>
        <div class="col-lg-5">
              <textarea name="quest" id="quest" cols="18" rows="5" value="Please enter your message here"required></textarea>
              <button type="submit" name="submit" id="send">Submit</button>
         </div>
            </fieldset>
              
          </form>
        
      </div>
      </div>
</div>              
        
        
<!-- End of mother container -->          
      </div> 
    
        <!-- FOOTER -->
        <?php require_once("footer.php");?>
    
 
    </body>
</html>
