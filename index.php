<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/ico/favicon.png">

        <title>EGU Hugo-Jean - CV</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/main.css" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/css?family=Lato:400i" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400i' rel='stylesheet' type='text/css'> 

        <script src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/smoothscroll.js"></script> 
        <script src="assets/js/Chart.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/icons/icon_profile.png" />
    </head>

    <body data-spy="scroll" data-offset="0" data-target="#nav">

        <div id="section-topbar">
            <div id="topbar-inner">
                <div class="container">
                    <div class="row">
                        <div class="dropdown">                            
                            <ul id="nav" class="nav">
                                <li class="menu-item">
                                    <a class="js-scrollTo" href="#about" title="About"><i class="icon-user"></i></a>
                                </li>

                                <li class="menu-item">
                                    <a class="js-scrollTo" href="#resume" title="Resume"><i class="icon-check-sign"></i>
                                    </a>
                                </li>

                                <li class="menu-item"><a class="js-scrollTo" href="#skillswrap" title="Skill"><i class="
                                    icon-circle-blank"></i></a></li>

                                <li class="menu-item">
                                    <a class="js-scrollTo" href="#hobbies" title="Hobbies"><i class="icon-heart"></i></a>
                                </li>
                                
                                <li class="menu-item">
                                    <a class="js-scrollTo" href="#portfolio" title="Portfolio"><i class="icon-foursquare"></i></a>
                                </li>

                                <li class="menu-item"><a class="js-scrollTo" href="#contact" title="Contact"><i class="icon-comments-alt"></i></a></li>
                            </ul><!--/ uL#nav -->
                        </div><!-- /.dropdown -->

                        <div class="clear"></div>
                    </div><!--/.row -->
                </div><!--/.container -->

                <div class="clear"></div>
            </div><!--/ #topbar-inner -->
        </div><!--/ #section-topbar -->

        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                        <h1>EGU Hugo-Jean</h1>
                        <h3>Student | hugoj.egu@gmail.com</h3>
                    </div><!--/.col-lg-12 -->
                </div><!--/.row -->
            </div><!--/.container -->
        </div><!--/.#headerwrap -->


        <section id="about" name="about"></section>
        <div id="intro">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2 col-lg-offset-1">
                        <h5>ABOUT</h5>
                    </div>
                    <div class="col-lg-5">
                        <p><img class="img-responsive" src="assets/img/me.jpg" alt=""></p>
                    </div>
                    <div class="col-lg-4">
                        <p><more>I am following Bachelor cursus in Ynov Ingesup campus. I choose computer science because I was always interested by technology area since I was a kid. Moreover computer science and digital is almost everywhere nowadays. I choose a program with close relationship with business world to get experience from the field for my resumee and which will help me to get a job later.<br/><br/></more></p>
                    </div>

                </div><!--/.row -->
            </div><!--/.container -->
        </div><!--/ #intro -->


        <section id="resume" name="resume"></section>
        <!--EDUCATION DESCRIPTION -->
        <div class="container desc">
            <div class="row">

                <div class="col-lg-2 col-lg-offset-1">
                    <h5>EDUCATION</h5>
                </div>
                <div class="col-lg-6">
                    <p><t>Ingesup - Bachelor</t>
                        <br/>
                        Ynov
                        <br/>
                        <i>One Years Course</i>
                    </p>
                </div>
                <div class="col-lg-3">
                    <p><sm>GRADUATING IN 2022</sm><br/>
                        <imp><sm>IN PROGRESS</sm></imp>
                    </p>
                </div>

                <div class="col-lg-6 col-lg-offset-3">
                    <p><t>BAC/ Science - Mathematical specialization</t>
                        <br/>
                        Lycée Saint-Exupéry - Montigny le Bretonneux
                        <br/>
                    </p>
                </div>
                <div class="col-lg-3">
                    <p><sm>JUNE 2017</sm></p>
                </div>

            </div><!--/.row -->
            <br>
            <hr>
        </div><!--/.container -->


        <!--WORK DESCRIPTION -->
        <div class="container desc">
            <div class="row">

                <div class="col-lg-2 col-lg-offset-1">
                    <h5>WORK</h5>
                </div>
                <div class="col-lg-6">
                    <p><t>Trainee</t>
                        <br/>
                        Danone
                        <br/>
                    </p>
                    <p><more>This experience allowed me to know how takes place the world of the work and reinforce my desire to work in the computer science</more></p>
                </div>
            </div><!--/.row -->
            <br>
        </div><!--/.container -->


        <!--SKILLS DESCRIPTION -->
        <div id="skillswrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-1">
                        <h5>SKILLS</h5>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="javascript" height="130" width="130"></canvas>
                        <p>English</p>
                        <br>
                        <script>
                            var doughnutData = [
                                {
                                    value: 80,
                                    color:"#1565C0"
                                },
                                {
                                    value : 20,
                                    color : "#000"
                                }
                            ];
                            var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="bootstrap" height="130" width="130"></canvas>
                        <p>Bootstrap</p>
                        <br>
                        <script>
                            var doughnutData = [
                                {
                                    value: 70,
                                    color: "#1565C0",
                                },
                                {
                                    value : 30,
                                    color : "#000"
                                }
                            ];
                            var myDoughnut = new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="wordpress" height="130" width="130"></canvas>
                        <p>Python</p>
                        <br>
                        <script>
                            var doughnutData = [
                                {
                                    value: 60,
                                    color:"#1565C0"
                                },
                                {
                                    value : 40,
                                    color : "#000"
                                }
                            ];
                            var myDoughnut = new Chart(document.getElementById("wordpress").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>

                    <div class="col-lg-3 col-lg-offset-3 centered">
                        <canvas id="html" height="130" width="130"></canvas>
                        <p>HTML/CSS</p>
                        <br>
                        <script>
                            var doughnutData = [
                                {
                                    value: 80,
                                    color:"#1565C0"
                                },
                                {
                                    value : 20,
                                    color : "#000"
                                }
                            ];
                            var myDoughnut = new Chart(document.getElementById("html").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="photoshop" height="130" width="130"></canvas>
                        <p>CCNA 1</p>
                        <br>
                        <script>
                            var doughnutData = [
                                {
                                    value: 75,
                                    color:"#1565C0"
                                },
                                {
                                    value : 25,
                                    color : "#000"
                                }
                            ];
                            var myDoughnut = new Chart(document.getElementById("photoshop").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="illustrator" height="130" width="130"></canvas>
                        <p>Hardware</p>
                        <br>
                        <script>
                            var doughnutData = [
                                {
                                    value: 90,
                                    color:"#1565C0"
                                },
                                {
                                    value : 10,
                                    color : "#000"
                                }
                            ];
                            var myDoughnut = new Chart(document.getElementById("illustrator").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>

                </div><!--/.row -->
                <br>
            </div><!--/.container -->
        </div><!--/ #skillswrap -->

        <section id="hobbies" name="hobbies"></section>
        <!--HOBBIES DESCRIPTION -->
        <div class="container desc">
            <div class="row">
                <div class="col-lg-2 col-lg-offset-1">
                    <h5>HOBBIES</h5>
                </div>
                <div class="col-lg-6">
                    <p><img class="img-responsive" src="assets/img/enduro.jpg" alt=""></p>
                </div>
                <div class="col-lg-3">
                    <p>SPORT MOTORCYCLE</p>
                    <p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/></more></p>
                </div>

                <div class="col-lg-6 col-lg-offset-3">
                    <p><img class="img-responsive" src="assets/img/informatique.jpg" alt=""></p>
                </div>
                <div class="col-lg-3">
                    <p>COMPUTING</p>
                    <p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/></more> 
                    </p>
                </div>

            </div><!--/.row -->
            <br>
            <br>
            <hr>
        </div><!--/.container -->
        
        <section id="portfolio" name="portfolio"></section>
        <!--PORTFOLIO DESCRIPTION -->
        <div class="container desc">
            <div class="row">
                <div class="col-lg-2 col-lg-offset-1">
                    <h5>PORTFOLIO</h5>
                </div>
                <div class="col-lg-6">
                    <p><img class="img-responsive" src="assets/img/port01.jpg" alt=""></p>
                </div>
                <div class="col-lg-3">
                    <p>PROJET 1</p>
                    <p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/></more></p>
                </div>

                <div class="col-lg-6 col-lg-offset-3">
                    <p><img class="img-responsive" src="assets/img/port03.jpg" alt=""></p>
                </div>
                <div class="col-lg-3">
                    <p>PROJET 2</p>
                    <p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br/><br/></more> 
                    </p>
                </div>

            </div><!--/.row -->
            <br>
            <br>
        </div><!--/.container -->



        <section id="contact" name="contact"></section>
        <!--FOOTER DESCRIPTION -->
        <div id="footwrap">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2 col-lg-offset-1">
                        <h5>CONTACT</h5>
                    </div>
                    <div class="col-lg-5">
                        <p><t>Email</t><br/>
                            hugoj.egu@gmail.com<br/>
                        </p>
                        <p><t>Email Pro</t><br/>
                            hugojean.egu@ynov.com<br/>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <p><sm>SOCIAL LINKS</sm></p>
                        <p>
                            <a href="https://www.facebook.com/hugojean.egu"><button style="background-color: #3b5998; color: #fff;" type="button" class="btn btn-fb"><i class="icon-facebook"></i> Facebook</button></a>
                            <a href="https://twitter.com/egu_hj"><button style="background-color: #00aced; color: #fff;" type="button" class="btn btn-tw"><i class="icon-twitter"></i> Twitter</button></a>
                            <a href="https://www.linkedin.com/in/hugo-jean-egu-228573150/"><button style="background-color: #0077B5; color: #fff;" type="button" class="btn btn-li"><i class="icon-linkedin"></i> Linkedin</button></a>

                        </p>
                    </div>
                </div><!--/.row -->
            </div><!--/.container -->
        </div><!--/ #footer -->


        <!-- Bootstrap core JavaScript -->
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
