
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ropheka</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/fav-ropheka.jpg">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <link rel="stylesheet" href="css/font/flaticon.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Select CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Elements CSS -->
    <link rel="stylesheet" href="css/elements.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernizr Js -->
    <script src="js/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- scrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollUp">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- scrollUp End Here -->
    <div id="wrapper" class="wrapper">
        <!-- Header Area Start Here -->
        <?php
        include("./header.php");
        ?>
                          <div class="contact-box-layout1">
                            <h3 class="title title-bar-primary4">Leave Us Message</h3>
                            <form  method="POST" class="contact-form-box" id="contact-us">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text"  placeholder="First Name *" class="form-control"
                                            name="first_name" id="first_name" data-error="Phone field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" placeholder="Last Name *" class="form-control"
                                            name="last_name" id="last_name" data-error="E-mail field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" id="email" placeholder="E-mail *" class="form-control" name="email"
                                            data-error="Subject field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" id="phone" placeholder="Phone *" class="form-control" name="phone"
                                            data-error="Subject field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <!-- <div class="col-12 form-group">
                                        <select class="select2" name="subject">
                                            <option value="0">Select Subject *</option>
                                            <option value="1">Dr. Mou</option>
                                            <option value="2">Dr. Kalvin</option>
                                            <option value="3">Dr. Mark Willy</option>
                                            <option value="4">Dr. Zinia Zara</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div> -->
                                    <div class="col-12 form-group">
                                        <textarea placeholder="Message*" class="textarea form-control" name="message"
                                             id="message" rows="7" cols="20" data-error="Message field is required"
                                            required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group margin-b-none">
                                        <button class="item-btn" type="submit">Submit Message</button>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-box-layout1">
                            <h3 class="title title-bar-primary4">Address</h3>
                            <div class="contact-info">
                                <ul>
                                    <li><i class="fas fa-map-marker-alt"></i>1065, TH road, thangal, Chennai</li>
                                    <li><i class="far fa-envelope"></i>rophekahospital@gmail.com</li>
                                    <li><i class="fas fa-phone"></i>044 4813 2960</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us Area End Here -->
        <!-- Footer Area Start Here -->
        <?php
        include("./footer.php");
        ?>
        <!-- Footer Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Counterup Js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Waypoints Js -->
    <script src="js/waypoints.min.js"></script>
    <!-- WOW JS -->
    <script src="js/wow.min.js"></script>
    <!-- Parallaxie Js -->
    <script src="js/parallaxie.js"></script>
    <!-- Owl Carousel Js -->
    <script src="vendor/OwlCarousel/owl.carousel.min.js"></script>
    <!-- Meanmenu Js -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js"></script>
    <!-- Select Js -->
    <script src="js/select2.min.js"></script>
    <!-- Isotope Js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- Smoothscroll Js -->
    <script src="js/smoothscroll.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <script>
            // mail function 
            $(document).ready(function () {
                $("form").submit(function (e){
                e.preventDefault();
                var formData = {
                        first_name: $("#first_name").val(),
                        last_name: $("#last_name").val(),
                        email: $("#email").val(),
                        phone: $("#phone").val(),
                        message: $("#message").val(),
                    };
                    console.log(formData)
                    $.ajax({
                        url: "mails.php",
                        type: "POST",
                        data: formData,
                        // beforeSend: function() {
                        //     n.html("<div class='alert alert-info'><p>Loading ...</p></div>")
                        // },
                        success: function(data) {
                            $("#contact-us").trigger('reset');
                            alert(data)
                        },
                        error: function() {
                            n.html("<div class='alert alert-success'><p>Error !!!</p></div>")
                            // Reset the form.
                          
                        }
                    })
                })

            })
        </script>
</body>

</html>
