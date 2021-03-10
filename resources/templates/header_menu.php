    <div class="container">
        <div class="header_inner">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt=""/></a>
            </div>
            <div class="nav_download">
                <div class="navigation">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            <li <?php if(geturl()=='index.php') { echo "class='active'";}?>><a href="index.php">Home</a></li>
                            
                            <li <?php if(geturl()=='dnr-ed.php' || geturl()=='dnred_details.php') { echo "class='active'";}?>><a href="dnr-ed.php">DnrED</a></li>
                            <li <?php if(geturl()=='news.php'||geturl()=='newsdetails.php') { echo "class='active'";}?>><a href="news.php">News</a></li>
                            <li <?php if(geturl()=='podcast.php') { echo "class='active'";}?>><a href="https://whattheplasma.life/">Podcast</a></li>
                          </ul>
                    
                          
                        </div><!-- /.navbar-collapse -->

                    </nav>
                </div>
                <div class="app_download_btn">
                    <?php if(geturl()=='beta.php'){?>
                    <button data-toggle="modal" data-target="#myModal2">Sign Up</button>
                    <?php } else {?>
                    <button data-toggle="modal" data-target="#myModal">Find A Center</button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
