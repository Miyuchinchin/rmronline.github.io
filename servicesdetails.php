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
                        <h3 style="color:white;font-size: 30px">Services</h3>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a>Services</a></li>
                            <li><a>Service Detail</a></li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->

        <section class="service-singel-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-push-4">
                        <div class="service-single-content">
                            <div>
                                <img src="assets/images/servicesex.jpg" alt>
                            </div>
                            <div class="title">
                                <h3>SAMPLE ONLY</h3>
                          
                            </div>
                            <div class="details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!</p>
                              
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!</p>
                                <h4>Sample</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!</p>
                             
                            </div>
                        </div> <!-- end service content -->
                    </div> <!-- end col -->
                    
                    <div class="col col-md-4 col-md-pull-8">
                        <div class="service-single-sidebar">
                            <div class="services-link-widget widget">
                                <ul>
                                    <li class="current"><a href="#">Sample</a></li>
                                    <li><a href="#">Sample</a></li>
                                    <li><a href="#">Sample</a></li>
                                    <li><a href="#">Sample</a></li>
                                    <li><a href="#">Sample</a></li>
                                    <li><a href="#">Sample</a></li>
                                    <li><a href="#">Sample</a></li>
                                </ul>
                            </div>
                     
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
      

         
        </section>

        <?php
    include('includes/footer.php');
?>  
   