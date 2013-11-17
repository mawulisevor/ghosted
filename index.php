<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once("head.php");
    ?>
    <body>
      
      
      <div class="container" id="top">
          <?php require_once("menu.php");?>
          
        <!-- Carousel ================================================== -->
                <div id="myCarousel" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
              </ol>
                    <div class="carousel-inner">
                <div class="item active">
                  <img data-src="holder.js/1500x500/auto/#777:#7a7a7a/text:First slide" alt="">
                  <div class="container">
                    <div class="carousel-caption">
                      <img title="Ghosts"src="static/images/ghosts.jpg">
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="container">
                    <div class="carousel-caption">
                      <span class='centre'><h1>Ghosts on government payroll?<b> Yes!</b></h1></span>
                      <p>A ghost represents a dead or resigned employee who is still paid for work not done because they are still on payroll of the employer. The Controller and Account General's Department (CAGD) of the government of Ghana pays ghosts approximately GHC500,000 every month. 
                          GhostBusters are social entrepreneurs dedicated to identifying and removing these ghosts from government payroll.</p>
                      <span><h4>GhostBusters for real?<b> Yes!</b></h4></span>
                      <p>Do you know of an institution with ghosts? Do you want to help us bust ghosts?</p>
                      <span class='centre'><h5><a class="btn btn-large btn-primary" href="reportit.php">Join us today</a></h5></span>
                    </div>
                  </div>
                </div>                        
                <div class="item">
                  <div class="container">
                    <div class="carousel-caption marketing">
                        <span class='centre'><h1>Summary by Ministries</h1></span>
                        <span class='centre'><h3>A summary of total number of ghosts in each ministry as at August 2013</h3></span>
                        <?php getAllMinistry();?>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="container">
                    <div class="carousel-caption">
                    <span class='centre'><span class='centre'>
                        <h1>Summary by Regions</h1></span>
                        <span class='centre'><h3>A summary of total number of ghosts in each region as at August 2013</h3></span>
                        <?php getAllRegions();?>
                    <span class="white"></span>
                    </div>
                  </div>
                </div>                        
                <div class="item">  
                  <div class="container">
                    <div class="carousel-caption">
                        <span class='centre'><h1>Top 5 Haunted Ministries in August</h1></span>
                      <span><canvas id="cvs" width="700" height="250">[No canvas support]</canvas></span>
                        <script>
                            window.onload = function ()
                            {
                                var bar = new RGraph.Bar('cvs', [15,13,13,10,8]);
                                //bar.Set('background.image', 'static/images/colla/afmi.jpg');
                                bar.Set('background.grid', false);
                                //bar.Set('key', ['Sunshine in 2000', 'Sunshine in 2005']);
                                //bar.Set('key.position.gutter.boxed', false);
                                //bar.Set('key.position', 'gutter');
                                //bar.Set('key.background', 'rgb(255,255,255)');
                                //bar.Set('shadow', true);
                                //bar.Set('shadow.blur', 15);
                                //bar.Set('shadow.offsetx', 0);
                                //bar.Set('shadow.offsety', 0);
                                //bar.Set('shadow.color', '#aaa');
                                //bar.Set('strokestyle', 'rgba(0,0,0,0)');
                                //bar.Set('gutter.left', 55);
                                //bar.Set('gutter.right', 5);
                                bar.Set('labels', ['Education','Finance','Interior','Justice','Agriculture']);
                                bar.Draw();
                            };
                        </script>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="container">
                    <div class="carousel-caption">
                      <span class='centre'><h1>With the support of</h1></span>
                      <div class="row">
                        <div class="col-lg-3"><img title="World Bank Institute"src="static/images/colla/wbi_c.jpg" class="img-thumbnail"></div>
                        <div class="col-lg-3"><img title="Ghana Government"src="static/images/colla/gov_c.jpg" class="img-thumbnail"></div>
                        <div class="col-lg-3"><img title='Fair Wages and Salaries Commission'src="static/images/colla/fwsc_c.jpg" class="img-thumbnail"></div>
                        <div class="col-lg-3"><img title="Controller and Accountant General's Department"src="static/images/colla/cagd_c.jpg" class="img-thumbnail"></div>  
                      </div><br />
                      <div class="row">
                        <div class="col-lg-3"><img title="Africa Media Initiative"src="static/images/colla/afmi_c.jpg" class="img-thumbnail"></div>
                        <div class="col-lg-3"><img title="Code4Africa"src="static/images/colla/c4a_c.jpg" class="img-thumbnail"></div>
                        <div class="col-lg-3"><img title="Trades Union Congress"src="static/images/colla/tuc_c.jpg" class="img-thumbnail"></div>
                        <div class="col-lg-3"><img title="Open Knowledge Foundation"src="static/images/colla/okfn_c.jpg" class="img-thumbnail"> </div>
                      </div><br />
                  </div>
                </div>
              </div>
                    
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <!-- /.carousel -->
        
          
      </div>
    
        <!-- FOOTER -->
        <?php require_once("footer.php");?>
    
 
    </body>
</html>
