<div class="header_banner_section">
<div class="header">
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
                            <li <?php if(geturl()=='dnr-ed.php') { echo "class='active'";}?>><a href="dnr-ed.php">DnrED</a></li>
                            <li <?php if(geturl()=='news.php') { echo "class='active'";}?>><a href="news.php">News</a></li>
                            <li <?php if(geturl()=='podcast.php') { echo "class='active'";}?>><a href="https://www.dearwarriors.com">Podcast</a></li>
                          </ul>
                    
                          
                        </div><!-- /.navbar-collapse -->

                    </nav>
                </div>
                <div class="app_download_btn">
                    <button data-toggle="modal" data-target="#myModal">Find A Center</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
if(geturl()=='index.php'){
	include(realpath(dirname(__FILE__) . "/../templates/banner.php"));
}

?>
</div>