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
                        <h3 style="color:white;font-size: 30px">Contact</h3>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a>Contact</a></li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>      
        <br><br>  
 
        <section class="contact-pg-section ">
        <div class="container">
            <div class="row">
                <div class="col col-md-3">
                    <div class="contact-info">
                        <ul>
                            <li>
                                <div class="icon"><i class="fa fa-phone"></i></div>
                                <p><span>Phone</span> (+63)977-073-0418 </p>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-envelope"></i></div>
                                <p><span>Email</span> admin@Rmrmanufacturing.Com  </p>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-clock-o"></i></div>
                                <p><span>Working Hours:</span> 7:00AM - 4:00PM </p>
                            </li>
                            <li>
                                <div class="icon"><i class="fa fa-location-arrow"></i></div>
                                <p><span>Office</span> Sarah Building - 161 Tamsui Avenue, Bayan Luma 3, Imus, Cavite 4103 PH </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col col-md-offset-1 col-md-8">
                    <div class="location-map" id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.136542610843!2d120.93488077391383!3d14.419291281492326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d30aeb1c0de5%3A0x1b877dc31c60cdbd!2sRMR%20Personal%20Care%20and%20Cosmetics%20Manufacturing!5e0!3m2!1sen!2sph!4v1710923396820!5m2!1sen!2sph" width="750" height="357" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div> <!-- end row -->
            <br><br>
            <div class="row">
                <div class="col col-xs-12">
                    <form class="contact-form form contact-validation-active row" id="contact-form-s2">
                        <div class="col col-sm-6">
                            <label for="f-name">First Name</label>
                            <input type="text" class="form-control" id="f-name" name="f_name">
                        </div>
                        <div class="col col-sm-6">
                            <label for="l-name">Last Name</label>
                            <input type="text" class="form-control" id="l-name" name="l_name"><br>
                        </div>
                        <div class="col col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col col-sm-6">
                            <label for="phone">Phone No</label>
                            <input type="text" class="form-control" id="phone" name="phone"><br>
                        </div>
                        <div class="col col-sm-12">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="note"></textarea><br>
                        </div>
                        <div class="col col-sm-12 submit-btn">
                            <button class="theme-btn">Submit</button>
                      
                        </div>
                      
                    </form>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
<br><br>

        <?php
    include('includes/footer.php');
?>  
   