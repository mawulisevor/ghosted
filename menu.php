<div class="container">
    <h1 class="identity page-header">
        <strong><span class="ghosts">kB</span></strong>
        <span class="busters">Ghostbusters GH</span>
    </h1>

    <div class="navbar-wrapper">
     <ul class="nav navbar-inverse nav-tabs">
            <li><a class="btn btn-default btn-large active menu"title="Ghostbusters Homepage"id='top' data-toggle="tab" href="#" >Home</a></li>
            <li><a class="btn btn-default btn-large menu" title="All institutions in our database" href="institutions.php">Institutions</a></li>
            <li><a class="btn btn-default btn-large menu" title="Report a ghost at your workplace" href="reportit.php">Bust the ghost</a></li>
            <li><a class="btn btn-default btn-large menu disabled" title="Ghosts on Ghana government payroll" href="#"><span class="text-danger"><b><?php getTotal();?> </b></span>ghosts identified</a></li>
        <form class="navbar-form pull-right form-inline" action="search.php" method="post">
            <input style="width: 500px;" type="text" required name="s4g" title="By Institution, District, Region or Ministry"placeholder="Search">
            <button type="submit" class="btn btn-primary btn-default btn-mini">Find them</button>
        </form>
      </ul>
    </div>
</div>
