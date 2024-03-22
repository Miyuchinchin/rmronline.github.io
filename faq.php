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

@media (max-width: 1800px) {
  .theme-accordion-s1 .panel-heading a {
    background-color: #BE93E4;
  }
}


</style>

        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h3 style="color:white;font-size: 30px">Frequently Asked Question</h3>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a>Company</a></li>
                            <li><a>FAQ</a></li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
    
        <section class="about-us-faq">
            <div class="container">
            <br><br>
                    <div class="col col-lg-10 ">
                        <div class="faq-section">
                            <div class="section-title-s3">
                      
                                <h2>SAMPLE</h2>
                            </div>
                            <div class="details">
                                <p>SAMPLE</p>
                                <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"  aria-expanded="true">SAMPLE</a>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>SAMPLE</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"  href="#collapseTwo">SAMPLE</a>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>SAMPLE</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"  href="#collapseThree">SAMPLE</a>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>SAMPLE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
          <br><br><br><br>
        </section>


      
        <?php
    include('includes/footer.php');
?>  
   