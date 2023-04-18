<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Fjalla+One&family=Roboto&family=Teko:wght@500&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Anton', sans-serif;
            font-family: 'Fjalla One', sans-serif;
            font-family: 'Roboto', sans-serif;
            font-family: 'Teko', sans-serif;
        }
        
        .dropdown-menu {
            --bs-dropdown-min-width: 16rem;
        }
        
        .navbar-nav {
            margin: auto;
        }
        
        .navbar {
            background-color: white;
            height: 80px;
            margin-top: 0%;
            border-bottom: 1px solid grey;
        }
        
        .nav-link {
            margin: 0px 30px 10px 10px;
            color: black;
        }
        
        .nav-link:hover {
            font-size: 20px;
            color: rgb(117, 109, 109)
        }
        
        .dropdown-item {
            color: black;
        }
        
        #h {
            margin-top: 70px;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        .hi {
            height: 100px;
        }
        
        .box {
            height: 50px;
            width: 50px;
        }
        
        #com {
            height: 100px;
            width: 100px;
            background-color: white;
        }
        
        #imi {
            border-radius: 380px;
        }
        
        #btn4 {
            height: 50px;
            width: 50px;
        }
        
        p#cod {
            font-size: 30px;
        }
        
        #para2 {
            font-size: 30px;
        }
        
        @media only screen and (max-width: 575px) {
            .hi {
                width: 250px;
                margin-bottom: 30px;
                ;
            }
            .box {
                width: 250px;
                margin: auto;
            }
            p#cod {
                font-size: 15px;
            }
            #para2 {
                font-size: 15px;
            }
            .box {
                margin: auto;
            }
            .section22 {
                width: 100%;
                margin: auto;
                margin-top: 100px;
            }
            .body {
                background-color: aqua;
            }
            ul {
                background-color: white;
                opacity: 0.95;
            }
        }
        
        .modal-backdrop {
            z-index: -1;
        }
        
        .body {
            font-size: 30px;
        }
        
        .section22 {
            width: 80%;
            margin: auto;
            margin-top: 100px;
        }
        *{
            /* overflow:scroll; */
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-xl  fixed-top" id="navi">
            <div class="container-fluid">
                <img class="navbar-brand" width="60px" height="60px" src="./imsgrs/pngwing.com.png" alt="logo">
                <button type="button" class="navbar-toggler z-3" data-bs-toggle="collapse" data-bs-target="#navbarid"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarid">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="blogs.php">BLOGS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#h">PROGRAMS</a></li>
                        <li class="nav-item"><a class="nav-link" href="note.php">NOTE</a></li>

                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             PROJECTS
                        </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://github.com/AnkitTisawar/Web_Designing/tree/main/Blogs_web" target="_blank">website1</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="https://github.com/AnkitTisawar/Web_Designing/tree/main/Food_Odering_website" target="_blank">website2</a></li>



                            </ul>
                        </li>
                        <li class="nav-item">
                            <form class="d-flex m-1" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </li>
                        <li class="nav-item mx-3 mt-1">
                            <div class="container-fliud">

                                <div class="dropdown">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
          LOGIN
        </button>
                                    <form class="dropdown-menu p-4">
                                        <div class="mb-3">
                                            <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                                <label class="form-check-label" for="dropdownCheck2">
                Remember me
              </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                        </li>




                        <li class="nav-item mt-1 mx-3">



                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Sign up
                          </button>

                            <!-- Modal -->

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Sing in</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="index.php" method="post">
                                                <div class="mb-3">
                                                    <label for="Formname" class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name" id="Formname" placeholder="Enter Your Name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Formnumber" class="form-label">Number</label>
                                                    <input type="number" class="form-control" id="Formnumber" name="number" placeholder="Enter Your Number">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="FormEmail2" class="form-label">Email address</label>
                                                    <input type="email" class="form-control" id="FormEmail2" name="email" placeholder="email@example.com">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="FormPassword2" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="FormPassword2" name="pass" placeholder="Password">
                                                </div>
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="Check2">
                                                        <label class="form-check-label" for="Check2">
                                                            rember me
                        </label>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">SUBMIT</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <div class="container-fluid ">
        <div class="section22 ">

            <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./imsgrs/pexels-mati-mango-5952651.jpg" class="d-block w-100 m-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./imsgrs/pexels-danny-meneses-943096.jpg" class="d-block w-100 m-auto" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./imsgrs/pexels-pixabay-270360.jpg" class="d-block w-100 m-auto" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
            </div>
        </div>
    </div>

    <hr>
    <div class="container-fluid  mt-5">

        <h1 class="text-center mb-5  " id="h">PROGRAMS</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 ">
            <div class="col">
                <div class="card text-center">
                    <img src="./imsgrs/pexels-porapak-apichodilok-346885.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Courses</h2>
                        <p class="card-text">Full-stack developers develop both the front-end and the server-side of the application, deploy, debug and maintain their databases and servers. Being a Full Stack Web Developer, you will be at an edge as you make better technical
                            decisions and see the big picture.</p>
                        <a href="https://www.coursera.org/search?query=Computer%20Science&index=prod_all_products_term_optimization&isPartOfCourseraPlus=true&utm_source=gg&utm_medium=sem&utm_campaign=B2C_INDIA__branded_FTCOF_courseraplus_arte&utm_content=B2C&campaignid=18216928758&adgroupid=141296026312&device=c&keyword=computer%20science&matchtype=b&network=g&devicemodel=&adpostion=&creativeid=619458216857&hide_mobile_promo&gclid=Cj0KCQiA3eGfBhCeARIsACpJNU_3OmjWijngliri_I1DeDqHGBYQbIBDPxElS5_9tS9v82T5d4Av3SQaAlmiEALw_wcB"
                            target="_blank" class="btn btn-danger " class="align-self-end btn btn-lg btn-block">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <img src="./imsgrs/pexels-vojtech-okenka-392018.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title ">JOB</h2>
                        <p class="card-text">If You Are Searching For A Web Devlopment Job Yes You Came To Right Platform All You Need To Do Is Just Click On the Button Below And Open The New Gate Of You Life Were You Can Find The Perfect Job Or Salary Pakage And Also You
                            Get Hike In Your Salary</p>
                        <a href="https://in.indeed.com/Software-Developer-jobs-in-Ludhiana?vjk=e334dd2beaae1971" target="_blank" class="btn btn-danger " class="align-self-end btn btn-lg btn-block">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col ">
                <div class="card text-center ">
                    <img src="./imsgrs/pexels-fauxels-3184465.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title ">Interview Prepration</h2>
                        <p class="card-text">Get trained in Java, HTML, CSS, Python, AJAX & more. Become a Full Stack Web Developer. Join Our Platform and Work on Projects. Interact with Experts. Get Job-Ready. Expert Training. Cutting Edge Skillsets. Placement Assistance.
                            E-Verified Certification. Interview Prep. Courses:</p>
                        <a href="https://trailhead.salesforce.com/content/learn/modules/strategies-for-successful-software-engineer-interviews/complete-the-virtual-technical-screening" target="_blank" class="btn btn-danger " class="align-self-end btn btn-lg btn-block">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr>
    <div class="container-fluid" id="blogs">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-center m-5">BLOGS</h1>
            </div>
            <div class="col-xl-6 col-xxl-6 col-md-12 col-sm-12 col-lg-12 col-lg-12 align-items-center">
                <img src="./imsgrs/anki.gif" height="600px" width="700px" class="img-fluid rounded" alt="">
            </div>
            <div class="col-xl-6 col-xxl-6 col-md-12 col-sm-12 col-lg-12 col-lg-12 text-center mt-5">
                <h1 class="text-center">CODING</h1>
                <p class="mt-5 m-2" id="cod">Programming is an intriguing sector as it gives us the superpower to regulate computer programs on the go. It can be used for ships, traffic control, robotics, self-driving vehicles, smartphone applications, websites, and many other things.
                    To ensure that you remain up to date on standards and protocols, and even more so in the field of coding, it is important to track developments in your field. Programmers of all specialties can easily benefit from keeping track of
                    the new developments & following industry-leading blogs and websites. These bloggers have made a name for themselves in the programming world by posting important, high-quality data and tips for coders. You can learn tricks and shortcuts
                    <a href="blogs.php" class="text-decoration-none"><mark>Readmore....</mark></a>
                </p>

            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-xxl-6 col-md-12 col-sm-12 col-lg-12 col-lg-12 ">
                <h1 class="text-center mt-5">PROGRAMING</h1>
                <p class="mt-5 m-2" id="para2">Programming is an intriguing sector as it gives us the superpower to regulate computer programs on the go. It can be used for ships, traffic control, robotics, self-driving vehicles, smartphone applications, websites, and many other things.
                    To ensure that you remain up to date on standards and protocols, and even more so in the field of coding, it is important to track developments in your field. Programmers of all specialties can easily benefit from keeping track of
                    the new developments & following industry-leading blogs and websites. These bloggers have made a name for themselves in the programming world by posting important, high-quality data and tips for coders. You can learn tricks and shortcuts
                    <a href="blogs.php" class="text-decoration-none"><mark>Readmore....</mark></a></p>
            </div>
            <div class="col-xl-6 col-xxl-6 col-md-12 col-sm-12 col-lg-12 col-lg-12 text-center mb-5">
                <img src="./imsgrs/image_processing20210511-12175-1v0etim.gif" height="600px" width="800px" class="img-fluid rounded mt-5" alt="">
            </div>
        </div>

    </div>
    <hr>

    <section>
        <div class="row">
            <div class="col-12">
                <h1 class="mx-5 mt-5 text-center">My Portfolio</h1>
                </h1>
            </div>

        </div>
        <div class="row">
            <div class="col-6 text-center">
                <div class="box m-2 mt-3 mx-3" id="com"><img class="img-fluid" src="./imsgrs/pngwing.com (1).png"></div>
                <hr>
                <div class="box m-2 mt-3 mx-3" id="com"><img class="img-fluid" src="./imsgrs/pngwing.com (3).png"></div>
                <hr>
                <div class="box m-2 mt-3 mx-3" id="com"><img class="img-fluid" src="./imsgrs/pngwing.com (2).png"></div>
                <hr>
            </div>
            <div class="col-6 text-center">
                <div class="hi m-2 mt-5">
                    <h5 class="m-1  mb-1"><mark>HTML</h5>
                    <p class=" m-1">intermediate in html coding</p>
                    
                </div>
                <div class="hi m-2 mt-5">
                    <h5 class="m-1 active mb-1"><mark>CSS</h5>
                    <p class="m-1">intermediate in CSS coding</p>
                  
                </div>
                <div class="hi m-2 mt-5">
                    <h5 class="m-1 mb-1"><mark>JAVASCRIPT</h5>
                    <p class="m-1">intermediate in JAVASCRIPT coding</p>
                    
                </div>
            </div>
    </div>
    
    <div class="row">
    <div class="col-6 text-center">
                <div class="box m-2 mt-3 mx-3" id="com"><img class="img-fluid" src="./imsgrs/pngegg (1).png"></div>
                <hr>
                <div class="box m-2 mt-3 mx-3" id="com"><img class="img-fluid" src="./imsgrs/pngegg (3).png"></div>
                <hr>
                <div class="box m-2 mt-3 mx-3" id="com"><img class="img-fluid" src="./imsgrs/pngegg (4).png"></div>
                <hr>
                <div class="box m-2 mt-3 mx-3" id="com"><img class="img-fluid" src="./imsgrs/1-2-php-logo-free-download-png.png"></div>
                <hr>
                <div class="box m-2 mt-3 mx-3" id="com"><img class="img-fluid" src="./imsgrs/2-2-wordpress-logo-png-hd.png"></div>
                <hr>
            </div>
            <div class="col-6   text-center">
                <div class="hi m-2 mt-5">
                    <h5 class="m-1 mb-1"><mark>BOOTSTRAP</h5>
                    <p class="m-1">intermediate in BOOTSTRAP coding</p>
                    
                </div>
                <div class="hi m-2 mt-5">
                    <h5 class="m-1 mb-1"><mark>C</h5>
                    <p class="m-1">intermediate in C coding</p>
                    
                </div>
                <div class="hi m-2 mt-5">
                    <h5 class="m-1 mb-1"><mark>C++</h5>
                    <p class="m-1">intermediate in C++ coding</p>
                    
                </div>
                <div class="hi m-2 mt-4">
                    <h5 class="m-1 mb-1"><mark>Core PHP</h5>
                    <p class="m-1">intermediate in Core PHP coding</p>
                    
                </div>
                <div class="hi m-2 mt-4">
                    <h5 class="m-1  mb-1"><mark>Wordpress</h5>
                    <p class="m-1">intermediate in Wordpress </p>
                    
                </div>
            </div>
            <div class=" col-12 text-center">
                <div class="box1 ">
                    <img id="imi" src="./imsgrs/ankit.jpg" class="img-fluid" height="150" width="150" alt="">

                    <h3 class="mt-5">Hello i'm Ankit </h3>
                    <h5>A passionate Web Designer</h5>
                    <p class="mb-5"> this is my webpage im happy you visisted on my site dont forget to login yourself </p>

                    <a href="https://www.facebook.com/ankit.tisawer?mibextid=ZbWKwL" target="_blank"><img src="./imsgrs/5296499_fb_facebook_facebook logo_icon.png" class="img-fluid m-2" height="40" width="40" alt="fb"></a>
                    <a href="www.linkedin.com/in/ankit-tisawar-5266a9211" target="_blank"><img src="./imsgrs/5296501_linkedin_network_linkedin logo_icon.png" class="img-fluid m-2" height="40" width="40" alt="fb"></a>
                    <a href="#" target="_blank"><img src="./imsgrs/5296516_tweet_twitter_twitter logo_icon.png" class="img-fluid m-2" height="40" width="40" alt="fb"></a>
                    <a href="https://www.instagram.com/ankittisawar_/" target="_blank"><img src="./imsgrs/5296765_camera_instagram_instagram logo_icon.png" class="img-fluid m-2" height="40" width="40" alt="fb"></a>
                </div>

            </div>
            </div>
    </section>

    <hr>
    <footer class="text-center">
        @copyrightwww.ankittisawar.com
    </footer>
    </div>



</body>
<script>
    let = prompt("Welcome to my website", "guest");
</script>

</html>
