<?php
    session_start();
    error_reporting(0);
    include('includes/header.php');
    
    
?>  
<style>
 .page-title {
  background: #072743;
  height: 140px;
  position: relative;
  width: 100%;
}

@media (max-width: 767px) {
  .page-title {
    height: 220px;
  }
}

.page-title:before {
  content: "";
  background-color: rgba(0, 0, 0, 0.3);
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}

.page-title .container {
  height: 100%;
  display: table;
}

.page-title .container > .row {
  vertical-align: middle;
  display: table-cell;
}

.page-title h2,
.page-title ol {
  color: #fff;
}

.page-title h2 {
  font-size: 20px;
  font-size: 3.2rem;
  font-weight: 800;
  margin: 1em 0 0.23em;
}

@media (max-width: 1199px) {
  .page-title h2 {
    font-size: 42px;
    font-size: 2.8rem;
  }
}

@media (max-width: 991px) {
  .page-title h2 {
    font-size: 35px;
    font-size: 2.33333rem;
  }
}

@media (max-width: 767px) {
  .page-title h2 {
    font-size: 28px;
    font-size: 1.86667rem;
    font-weight: bold;
  }
}

.page-title .breadcrumb {
  background-color: transparent;
  padding: 0;
}

@media (max-width: 767px) {
  .page-title .breadcrumb {
    text-align: center;
  }
}

.page-title .breadcrumb li {
  font-size: 18px;
  font-size: 1.2rem;
  color: purple;
  margin-right: 5px;
}

@media (max-width: 991px) {
  .page-title .breadcrumb li {
    font-size: 15px;
    font-size: 1rem;
  }
}

.page-title .breadcrumb li a {
  color: #fff;
}

.page-title .breadcrumb li a:hover {
  color: purple;
}

.page-title .breadcrumb > li + li:before {
  font-family: "FontAwesome";
  content: "\f105";
  color: #fff;
  margin-right: 5px;
}

.preloader {
  width: 100%;
  background-color: #fff;
  width: 100%;
  height: 100%;
  position: fixed;
  z-index: 10001;
}

.preloader div {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.service-single-sidebar .services-link-widget ul li a:hover,
.service-single-sidebar .services-link-widget ul li.current a {
  background-color:  #BE93E4;
}


</style>

        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h3 style="color:white;font-size: 30px">Hiring</h3>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a>Announcement</a></li>
                            <li><a>Hiring</a></li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->

        <!-- start project-single-section -->
        <section class="project-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-7">
                        <div class="project-single-img">
                        <img src="assets/images/hiringme.png" alt>
                        </div>
                    </div>
                    <div class="col col-md-5">
                        <div class="project-single-details">
                            <h3>Hiring sample</h3>
                            <p>Dut perspiciatis unde omnis iste natus error sit voluptatems accusantium doloremqu laudantiums ut, totams se aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae duis autems vell eums iriure dolors in hendrerit saep.</p>
                            <p>Eveniet in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at seds eros sed et accumsan et iusto odio dignissim. Temporibus autem quibusdam et aut officiis.</p>
                            <ul class="project-info">
                                <li><i class="fa fa-tag"></i> <span>What:</span> Sample</li>
                                <li><i class="fa fa-user"></i> <span>When:</span> Sample</li>
                                <li><i class="fa fa-calendar"></i> <span>Where:</span> Sample</li>
                                <li><i class="fa fa-calendar"></i> <span>Email:</span> sample@sample.com</li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>

        <?php
    include('includes/footer.php');
?>  
   