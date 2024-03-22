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

</style>

        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h3 style="color:white;font-size: 30px">About us</h3>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a>Company</a></li>
                            <li><a>About us</a></li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start offer -->
        <section class="section-padding offer-section">
            <div class="container">
                <div class="row">
                    <div class="col col-md-5">
                        <div class="section-title-s3">
                            <h2>About us Sample</h2>
                        </div>                        
                        <div class="offer-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna.</p>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur</p>
                        
                            <a href="#" class="theme-btn-s2 read-more">Company history</a>
                        </div>
                    </div>
                    <div class="col col-md-7">
                        <div class="offer-pic">
                            <img src="assets/images/about.jpg" alt>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
            <br><br><br><br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="features-title">
                            <h2>Mission</h2>
                            <p>We aim to become an innovative leader in the development and manufacturing of skin care and cosmetic products.</p>
                        </div>
                    </div>

                    <div class="col col-md-6">
                        <div class="features-title">
                            <h2>Vision</h2>
                            <p>Our Vision is to set international standards for superior skin care and cosmetic products.</p>
                        </div>
                    </div>

                 
                    
                </div>
            </div> 
<br><br>
<div class="container">
                <div class="row">
                    <div class="col col-md-12">
                        <div class="features-title">
                            <h2>Core Values</h2>
                            <img src="assets/images/core.jpg" style="text-align:center" alt>
                        </div>
                    </div>

             

                 
                    
                </div>
            </div> 

                   

                 
                    
                </div>
            </div> 

          
        </section>


        <!-- start our-team -->
       


        <!-- start fun-fact -->
        <section class="fun-fact">
            <div class="container">
                <div class="row start-count">
                    <div class="col col-sm-4">
                        <div class="grid">
                            <h3><span class="counter" data-count="1200">00</span><span>+</span></h3>
                            <span class="fact-title">Projects</span>
                            <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="grid">
                            <h3><span class="counter" data-count="800">00</span><span>+</span></h3>
                            <span class="fact-title">Clients</span>
                            <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="grid">
                            <h3><span class="counter" data-count="99.5">00</span><span>%</span></h3>
                            <span class="fact-title">satisfaction</span>
                            <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end fun-fact -->


        <!-- start partners -->
    
        <!-- end partners -->


        <!-- start site-footer -->
        <?php
    include('includes/footer.php');
?>  
   