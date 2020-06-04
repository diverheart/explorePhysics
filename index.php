<?php
require 'include/common.php';
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="description" content="Explorations of Physics Coaching center official website">
        <meta name="keywords" content="physics, exploration, of, explorations of physics, coaching, kuntal, paul, kuntal paul website, best, india, amit, ghosh, amit ghosh, iit, neet, jee, homepage, home, admission">
        <meta name="author" content="Kuntal Paul">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="MF3AtpQUuKHDtDDLMx80cGkYgjCTDcV8A-fIfN8_iTY" />
        <link rel="icon" type="images/png" href="img/icon.png">
        <title>Home | Explorations of Physics</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <style>
            .js-marquee-wrapper:hover{
                animation-play-state: paused !important;
            }
            @keyframes marqueeAnimation-26074670  { 100%  {transform:translateY(-100%)}}
        </style>
    </head>
    <body>
        <?php
        include 'include/header.php';
        ?>
        <div id="container-fluid">
            <div class="banner">
                <center>
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div id="banner-cont" class="text-center">
                                  <h3>W E L C O M E&nbsp;&nbsp;&nbsp;&nbsp;T O</h3>
                                  <h1>EXPLORATIONS OF PHYSICS</h1>
                                  <p>Dive into the depth of LEARNING PHYSICS</p><br>
                                  <p>HURRY!</p>
                                  <a  href="admission" class="btn btn-danger btn-lg active">Apply Now</a>
                            </div>
                          </div>
                          <div class="carousel-item">
                              <img class="d-block" src="img/phys.jpg" width="660px">
                              <div class="carousel-caption">
                                  <h4>EXPLORE PHYSICS LIKE NEVER BEFORE!</h4>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <img class="d-block" src="img/stu1.jpg" width="50%">
                          </div>
                          <div class="carousel-item">
                              <img class="d-block" src="img/stu2.jpg" width="50%">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                </div>
                </center>
            </div>
        </div>
        <div class="container-fluid cont">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-sm-6">
                        <div class="quotext">
                            <p><i>"In the matter of physics, the first lessons should contain nothing but what is experimental and interesting to see. A pretty experiment is in itself often more valuable than twenty formulae extracted from our minds."</i></p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-5">
                        <center><div id="ein"></div></center>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-4 col-sm-offset-2 ml-5 mb-4">
                        <center><div id="tes"></div></center>
                    </div>
                    <div class="col-sm-6">
                        <div class="quotext mt-5">
                            <p><i>“If you want to find the secrets of the universe, think in terms of energy, frequency and vibration.”</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid">
            <div class="container text-left">
                <div class="abt text-center mt-3"><h2>Latest Uploads</h2></div>
                <center><img src="img/under.png" class="under"></center>
            <div class="action-area marquee text-center" style="overflow-y: hidden;">
                <div class="js-marquee-wrapper" style="transform: translateY(100%); animation: 5s linear 0s infinite normal none running marqueeAnimation-26074670; :hover">
                    <div class="js-marquee" style="margin-right: 0px; float: none; margin-bottom: 0px;">
                         
				         <center><?php
                            $files = scandir("uploads");
                            $a = count($files)-1;
                            while($a>=2)
                            {
                            ?>
                                 <li style="list-style-type:none;"><a href="upload" style="text-decoration: none; color: black  !important; display: block; padding: 30px 0 30px 0; -webkit-transition: all .3s ease-in-out; -moz-transition: all .3s ease-in-out; transition: all .3s ease-in-out; font-size: 14px; line-height: 20px;" onMouseOver="this.style.color='#03b6fc'" onMouseOut="this.style.color='black'"><i class="fa fa-bell" aria-hidden="true" style="color: #fea116; font-size: 20px; display: inline-block;"></i>&nbsp;&nbsp;<?php echo $files[$a]; $a--; ?></a></li>
                            <?php
                            }?>
                        </center>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        
        <div class="container-fluid">
            <div class="container text-left mycard">
                <div class="abt text-center mt-3"><h2>ABOUT US</h2></div>
                <center><img src="img/under.png" class="under"></center>
                <div class="row mt-5">
                        <div id="about">
                            <img src="img/sir.jpg" class="sir ml-3">
                            <p align="justify">Dear Students, I am <strong>Amit Ghosh (Faculty of Explorations of Physics)</strong>, hosting a website for you helping 
                            to achieve your dreams in proper way. All of you are very muc expensive gems to me. I have a responsibility for raising your 
                            shining career. You are very much welcome to the world of <strong>EXPLORATIONS OF PHYSICS.</strong> Specially I would like to 
                            thank to my student <i>Kuntal Paul</i> to construct this website on behalf of me. <brI would like to draw your attention to 
                            follow this website for better performance.</p>
                            <p>Thank You.</p><br>
                            <p><b>Amit Ghosh<br>Faculty of Physics - Explorations of Physics,<br>Faculty, Deptt of Physics,<br>Baranagar Vidyamandir School for Boys</b></p>
                        </div> 
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h2 class="text-center">Reviews</h2>
            <center><img src="img/under.png" class="under"></center>
            <center>
                    <div id="carouselExampleFade1" class="carousel slide carousel-fade mt-3" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 300px;">
                                <img src="img/ranjit.jpg" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Ranjit Biswas(MBBS, Kol, 2010-passout)</h5>
                                    <p class="card-text">I am very grateful to be a part of Explorations of Physics. The extremely honorable guidance of yours helped me to achieve my dream to be a doctor. I want to thank Explorations of Physics for providing me all necessary guidelines to achieve my goal.</p>
                                </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                              <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 300px;">
                                <img src="img/me.jpg" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Kuntal Paul(2018-passout)</h5>
                                    <p class="card-text">Extremely grateful to Explorations of Physics &AMP; corresponding faculty. The way I learned Physics, was unique. It increased my concepts in physics and boosted my practical &amp; theoretical physics interest which will always help me in my career.</p>
                                </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 300px;">
                                  <img src="img/Sreejat.jpg" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sreejat Das(2019-passout)</h5>
                                    <p class="card-text">I had an exceptional experience with Explorations of Physics Classes. Respected sir, thanks for your guidance to achieve my dream of scoring 93&percnt; in Madhyamik (WBBSE) Examinations.</p>
                                </div>
                              </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade1" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade1" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                </div>
                </center>
        </div>
        <div class="container">
                <div class="text-center mt-3"><h2>Our Latest Video</h2></div>
                <center><img src="img/under.png" class="under"></center>
                <div class="embed-responsive embed-responsive-16by9 z-depth-1 mt-5">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Tj7SfbS6H6o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
        </div>
        <div class="container mt-3 pt-3">
            <center><div id="sfchabblctnagwut9z2hm4b7fj9pkchjaf8"></div>
<script type="text/javascript" src="https://counter4.stat.ovh/private/counter.js?c=habblctnagwut9z2hm4b7fj9pkchjaf8&down=async" async></script>
<noscript><a href="https://www.freecounterstat.com" title="hit counter"><img src="https://counter4.stat.ovh/private/freecounterstat.php?c=habblctnagwut9z2hm4b7fj9pkchjaf8" border="0" title="hit counter" alt="hit counter"></a></noscript>
</center>
        </div>
        
        <div class="container-fluid bg-dark">
            <div class="container top">
                <div class="row mt-2">
                    <div class="col-sm-4">
                        <center><a href="https://www.facebook.com/profile.php?id=100004759368804"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></center>
                    </div>
                    <div class="col-sm-4">
                        <center><a href="mailto:amitg646@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></center>
                    </div>
                    <div class="col-sm-4">
                        <center><a href="https://www.youtube.com/user/amitg646"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></center>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-dark container-fluid text-center text-white">
            <p><span class="cp">Copyright Reserved 2020 &copy;</span> Made with <span class="hr">♥</span><span class="cp"> by Kuntal Paul</span></p>
        </footer>
    </body>
    
</html>
