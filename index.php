<?php
    if (isset($_POST['register'])) {
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAIR</title>
    <!-- Css Link -->
    <link rel="stylesheet" href="style.css">
    <!-- Plugins Link -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="plugins/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="plugins/bootstrap/assets/css/docs.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <link rel="stylesheet" href="plugins/animate/animate.min.css">
    <!-- Google Fonts Link -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <!-- Start of Navbar -->
        <nav class="navbar fixed-top navbar-expand-sm bgColor scrolled  navbar-dark">
            <div class="container">
                <div class="logo">
                    <<span>/</span>> 
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="#course" class="nav-link">Courses</a></li>
                    <li class="nav-item"><a href="#team" class="nav-link">Team</a></li>
                    <li class="nav-item"><a href="#home" class="nav-link">Register</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
              </div>
            </div>
          </nav> 
          <!-- End of Navbar -->

          <!-- Start of Main Header -->
        <section class="section1" id="home">
            <div class="">S. <p>School</p></div>
            <div class="">O. <p>Of</p></div>
            <div class="">A. <p>Artificial</p></div>
            <div class="">I. <p>Intelligence and</p></div>
            <div class="">R. <p>Robotics</p></div>
        </section>
        <div id="register" class="registerBtn" type="button">Register With Us</div>
        <!-- End of Main Header -->

        <!-- Hidden Form -->
        <form method="POST"  class="register-box form-controls" id="modal" >
            <div class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h3 class="modal-title">REGISTER WITH US AT S.O.A.I.R.</h3>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <h4>Please Fill Out The Form Below So We Can Contact You</h4>
                    
                    <div class="my-3">
                        <label for="firstName" class="">First Name</label>
                        <input type="text" name="firstName" maxlength="30" class="">
                    </div>
                    <div class="my-3">
                        <label for="lastName" class="">Last Name</label>
                        <input type="text" name="lastName" maxlength="30" class="">
                    </div>
                    <div class="my-3">
                        <label for="email" class="">Email</label>
                        <input type="email" name="email" maxlength="20" class="">
                    </div>
                    <div class="my-3">
                        <label for="phoneNo" class="">Phone No.</label>
                        <input type="tel" name="phoneNumber" maxlength="11" class="">
                    </div>
                    <h4>Select Course Combination</h4>
                    <div class="courseCombimation">
                        
                        <div class="subject-container">
                            <div class="subject">
                                <label for="">Web Design</label>
                                <input type="checkbox" name="webDesign" id="">
                            </div>
                            <div class="subject">
                                <label for="">Web Development</label>
                                <input type="checkbox" name="webDevelopment" id="">
                            </div>
                            <div class="subject">
                                <label for="">Corel Draw</label>
                                <input type="checkbox" name="corelDraw" id="">
                            </div>
                        </div>
                        <div class="subject-container">
                            <div class="subject">
                                <label for="">Arduino</label>
                                <input type="checkbox" name="arduino" id="">
                            </div>
                            <div class="subject">
                                <label for="">Lorem</label>
                                <input type="checkbox" name="lorem1" id="">
                            </div>
                            <div class="subject">
                                <label for="">Lorem</label>
                                <input type="checkbox" name="lorem2" id="">
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="modal-footer">
                    <input type="submit" value="REGISTER" name="register" class="btn btn-success">
                    <button type="button" id="closeBtn" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                </div>
                
              </div>
            </div>
          </div>
          
        </form>

    </header>


    <!-- About Us Section -->
    <section>
        <div class="general-header" id="about">ABOUT US</div>
        <div class="about-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt,
                voluptates, praesentium neque consectetur repudiandae inventore facilis
                explicabo necessitatibus dolore ab laudantium delectus corporis recusandae
                aliquam saepe non eum. Recusandae quo id perspiciatis eligendi doloremque
                quibusdam corporis, laborum culpa eveniet rem saepe, accusamus ipsam 
                possimus mollitia nihil necessitatibus non adipisci quos. Non, fugiat eum.
                Similique vitae accusantium, minus cum voluptatibus ullam commodi aliquam qui,
                possimus repellendus nesciunt placeat recusandae, harum vel aperiam Nulla
                aspernatur ducimus tempore natus? Fuga, iusto quam? Molestias accusamus
                dignissimos corrupti aut perspiciatis maxime repudiandae exercitationem veritatis
                libero unde eligendi labore cum quia nesciunt, debitis possimus cumque? Maxime 
                accusamus porro officiis explicabo? Odio in quis ullam, temporibus adipisci tempore, 
                sed deserunt debitis recusandae, atque sequi illum reiciendis provident unde sapiente 
                autem assumenda sunt facere tempora. Vero neque voluptas tempora cum ex molestiae 
                et ducimus alias eveniet. Quibusdam distinctio vel ipsam dolores delectus voluptate. 
                Perspiciatis adipisci sint eos tempora iusto ad voluptates omnis quidem ipsam a, id 
                expedita praesentium excepturi, molestiae, dolor in odit. Ullam fugiat consequatur 
                voluptates laborum ab eaque nesciunt nostrum ipsum optio fugit voluptatum, 
                asperiores quibusdam, repellendus eius reiciendis. Consequuntur sint aspernatur 
                omnis nesciunt optio. Nulla facere, perferendis voluptate quis quidem, odio sequi 
                veritatis porro maiores, exercitationem provident consequuntur dolores voluptatum dolor 
                voluptatibus nam officiis omnis est ipsa corrupti? Labore nemo veniam dolore sit iste quo 
                eaque! Delectus, facere perspiciatis expedita ab magni dignissimos impedit esse! Eaque 
                ad atque repudiandae placeat, nesciunt molestiae! Modi accusantium fuga error quas dicta 
                quibusdam deserunt tempore voluptatum incidunt magnam nisi, voluptate id maiores odit! 
                Veniam quisquam, esse praesentium vitae obcaecati sed aspernatur impedit, quaerat, 
                quasi eveniet tenetur non repellendus neque commodi placeat! Perspiciatis excepturi 
                suscipit reprehenderit beatae officia architecto, accusantium, obcaecati facilis quae 
                reiciendis ad quasi earum ipsam commodi. Incidunt doloribus voluptate impedit molestias, 
                dolores quo doloremque aliquid magnam!
                </p>
        </div>
    </section>

    <!-- Courses Section -->
    <section>
        <div class="general-header" id="course">COURSES</div>
        <div class="courses-row" id="course">
            <div id="accordion">

                <div class="card">
                <div class="card-header">
                    <a class="card-link stretched-link" data-toggle="collapse" href="#collapseOne">
                        Web Design
                    </a>
                </div>
                <div id="collapseOne" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Sed temporibus delectus, cumque nulla esse deleniti corrupti quis 
                    exercitationem, inventore provident aut consequatur tempore nesciunt, 
                    vel fugit! Non illum molestiae impedit!
                    </div>
                </div>
                </div>
            
                <div class="card">
                    <div class="card-header">
                    <a class="card-link stretched-link" data-toggle="collapse" href="#collapseTwo">
                        Web Development
                    </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Sed temporibus delectus, cumque nulla esse deleniti corrupti quis 
                        exercitationem, inventore provident aut consequatur tempore nesciunt, 
                        vel fugit! Non illum molestiae impedit!
                    </div>
                    </div>
                </div>
            
                <div class="card">
                    <div class="card-header">
                    <a class="card-link stretched-link" data-toggle="collapse" href="#collapseThree">
                        Corel Draw
                    </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Sed temporibus delectus, cumque nulla esse deleniti corrupti quis 
                        exercitationem, inventore provident aut consequatur tempore nesciunt, 
                        vel fugit! Non illum molestiae impedit!
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                    <a class="card-link stretched-link" data-toggle="collapse" href="#collapseFour">
                        Arduino
                    </a>
                    </div>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Sed temporibus delectus, cumque nulla esse deleniti corrupti quis 
                        exercitationem, inventore provident aut consequatur tempore nesciunt, 
                        vel fugit! Non illum molestiae impedit!
                    </div>
                    </div>
                </div>
            
            </div> 
            <div id="accordion">

                <div class="card ">
                <div class="card-header">
                    <a class="card-link stretched-link" data-toggle="collapse" href="#collapseFive">
                        Web Design
                    </a>
                </div>
                <div id="collapseFive" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Sed temporibus delectus, cumque nulla esse deleniti corrupti quis 
                    exercitationem, inventore provident aut consequatur tempore nesciunt, 
                    vel fugit! Non illum molestiae impedit!
                    </div>
                </div>
                </div>
            
                <div class="card">
                    <div class="card-header">
                    <a class="card-link stretched-link" data-toggle="collapse" href="#collapseSix">
                        Web Development
                    </a>
                    </div>
                    <div id="collapseSix" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Sed temporibus delectus, cumque nulla esse deleniti corrupti quis 
                        exercitationem, inventore provident aut consequatur tempore nesciunt, 
                        vel fugit! Non illum molestiae impedit!
                    </div>
                    </div>
                </div>
            
                <div class="card">
                    <div class="card-header">
                    <a class="card-link stretched-link" data-toggle="collapse" href="#collapseSeven">
                        Corel Draw
                    </a>
                    </div>
                    <div id="collapseSeven" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Sed temporibus delectus, cumque nulla esse deleniti corrupti quis 
                        exercitationem, inventore provident aut consequatur tempore nesciunt, 
                        vel fugit! Non illum molestiae impedit!
                    </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                    <a class="card-link stretched-link" data-toggle="collapse" href="#collapseEight">
                        Arduino
                    </a>
                    </div>
                    <div id="collapseEight" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Sed temporibus delectus, cumque nulla esse deleniti corrupti quis 
                        exercitationem, inventore provident aut consequatur tempore nesciunt, 
                        vel fugit! Non illum molestiae impedit!
                    </div>
                    </div>
                </div>
            
            </div> 
        </div>
    </section>

    <!-- Team Section -->
    <section>
        <div class="general-header" id="team">TEAM</div>
        <div class="team" >
            <div class="team-card1 shadow">
                <img src="codeBackground/210-2101051_dark-web-scanning-background-image-for-website-of.jpg" class="" alt="">
                <div class="">
                    <b>Mr Sam</b>
                    <small>CEO</small>
                    <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, corrupti?</p>
                </div>
            </div>
            <div class="team-row">
                <div class="team-card shadow">
                    <img src="codeBackground/istockphoto-1291971619-170667a.jpg" class="" alt="">
                    <div class="">
                        <b>Mr Charels</b>
                        <small>Mentor</small>
                        <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, corrupti?</p>
                    </div>
                </div>
                <div class="team-card shadow">
                    <img src="codeBackground/MetaTags.png" class="" alt="">
                    <div class="">
                        <b>Mr Matt</b>
                        <small>Mentor</small>
                        <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, corrupti?</p>
                    </div>
                </div>
                <div class="team-card shadow">
                    <img src="codeBackground/istockphoto-1283633813-170667a.jpg" class="" alt="">
                    <div class="">
                        <b>Mr Bode</b>
                        <small>Mentor</small>
                        <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, corrupti?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class="general-header">STUDENT TESTIMONIES</div>
        
    </section> -->

    <!-- Contact Us Section -->
    <section>
        <div class="general-header" id="contact">CONTACT US</div>
        <div class="contact">
            <div class="row">
                <!-- Google Maps -->
                <div class="mapouter col-sm-6">
                    <div class="gmap_canvas col-sm-12">
                        <iframe width="584"  height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Plot%20480,%20Omotunde%20Akinsola%20Street,%20Omole%20Phase%201,%20Ikeja%20Lagos,%20Nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.online-timer.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:584px;}</style><a href="https://www.embedgooglemap.net">embed google map in wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:584px;}</style>
                    </div>
                </div>
                <form action="index.php" class="col-sm-6" method="post">
                    <div class="inputs">
                        <div>
                            <label for="firstName">Name</label>
                            <input type="text" name="firstName" placeholder="Enter Full Name" id="">
                        </div>
                        <div>
                            <label for="lastName">Email</label>
                            <input type="email" placeholder="Enter Email Address" name="email">
                        </div>
                        <div>
                            <label for="subject">Subject</label>
                            <input type="text" placeholder="Subject" name="subject" id="">
                        </div>
                        <div class="text-area">
                            <label for="meassage">Message</label>
                            <textarea type="tel" placeholder="Message" name="message" id=""></textarea>
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="Send Message" class="contactSubmitBtn btn-success">
                    </div>
                </form>

            </div>
        </div>
    </section>

    <!-- First Footer Section -->
    <section class="footer">
        <div class="details">
            <div class="soair">S.O.A.I.R.</div>
            <div class=""><i class="fa fa-home"></i><small> Plot 480, Omotunde Akinsola Street, Omole Phase 1, Ikeja Lagos, Nigeria</small></div>
            <div class=""><i class="fa fa-phone"></i> <small> 08011221221</small></div>
            <div class=""><i class="fa fa-envelope"></i><small> soair@gmail.com</small></div>
        </div>
        <div class="socials">
            <div class="">Social Media Links</div>
            <a href=""><i class="fa fa-facebook fa-2x"></i></a> 
            <a href=""><i class="fa fa-instagram fa-2x"></i></a>
            <a href=""><i class="fa fa-whatsapp fa-2x"></i></a>
            <a href=""><i class="fa fa-twitter fa-2x"></i></a>
        </div>
    </section>

    <!-- Main Footer Section -->
    <footer>
        <div class="footers">
            <div class=""><i class="fa fa-copyright"></i>Copyright S.O.A.I.R</div>
            <div class="">Designed By<a href=""> Bada O. David</a></div>
        </div>
    </footer>

    <!-- End Of Webiste Body -->

    <!-- Plugins Js Links -->
    <script src="plugins/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="plugins/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="plugins/bootstrap/assets/js/vendor/clipboard.min.js"></script>
    <script src="plugins/bootstrap/assets/js/vendor/anchor.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/wow/wow.min.js"></script>
    <script>
      new WOW().init()
    </script>

    <!-- My JS Link -->
    <script src="app.js"></script>
</body>
</html>