<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="./imsgrs/1-2-php-logo-free-download-png.png">
    <title>Blogs</title>
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
        
        .html {
            scroll-behavior: smooth;
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
        
        .modal-backdrop {
            z-index: -1;
        }
        
        .body {
            font-size: 30px;
        }
        
        h3 {
            margin-top: 50px;
            color: rgb(94, 84, 84);
        }
        
        p {
            font-size: 20px;
        }
        
        img.gif1 {
            margin-left: 200px;
        }
        
        img.gif11 {
            margin-left: 200px;
        }
        
        .ak {
            margin-top: 70px;
        }
        
        .ak1 {
            margin-top: 70px;
        }
        
        .ak2 {
            margin-top: 70px;
        }
        
        .ak3 {
            margin-top: 70px;
        }
        
        .ak4 {
            margin-top: 70px;
        }
        
        .ak5 {
            margin-top: 70px;
        }
        
        .ak6 {
            margin-top: 70px;
        }
        
        .ak7 {
            margin-top: 70px;
        }
        
        .ak8 {
            margin-top: 70px;
        }
        
        @media screen and (max-width: 1400px) {
            img.gif1 {
                margin-left: 0px;
                margin: auto;
            }
            img.gif11 {
                margin-left: 0px;
                margin: auto;
            }
            img.gif22 {
                margin: auto;
            }
            ul {
                background-color: white;
                opacity: 0.95;
            }
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
                        <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">BLOGS</a></li>
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
                                    <form onsubmit="value()" class="dropdown-menu p-4">
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
                                            <form onsubmit="value()">
                                                <div class="mb-3">
                                                    <label for="Formname" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="Formname" placeholder="Enter Your Name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Formnumber" class="form-label">Number</label>
                                                    <input type="number" class="form-control" id="Formnumber" placeholder="Enter Your Number">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="FormEmail2" class="form-label">Email address</label>
                                                    <input type="email" class="form-control" id="FormEmail2" placeholder="email@example.com">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="FormPassword2" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="FormPassword2" placeholder="Password">
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


        <section class="blogs">
            <div class="container-fluid">

                <div class="row mt-5">
                    <div class="col-12 ">
                        <h3 class="text-center link-info">
                            List of Programming Blogs and Websites to Improve Your Coding Skills
                        </h3>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4><a class="link-info" target="_blank" href="https://betterprogramming.pub/">1. Better Programming</a></h4>
                        <p>Better Programming is a programming-oriented blog on Medium. They publish multiple articles every day from several authors, all curated and edited to ensure excellent. They cover a range of subjects and languages for programming,
                            with content for both beginners and very advanced readers. If you want to develop programming skills, it’s a must-have on your daily reading list. So, before you plan to start your own programming blog, it is best to be a regular
                            reader of Better Programming blogs!</p>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="./imsgrs/gif3.gif" alt="img" height="400px" width="600" class="gif1 img-fluid">
                    </div>
                </div>
                <hr>
                <div class="row ">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="./imsgrs/gif7.gif" class="img-fluid gif22" alt="" height="400px" width="600">
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 ak">
                        <h4 class="gif2"><a class="link-info" target="_blank" href="https://www.linkedin.com/learning/?trk=lynda_redirect_learning">2. Lynda</a></h4>

                        <p>Lynda is one of the best online learning programming websites for most people worldwide, with over 6000 courses ranging from WordPress to PHP. Lynda also lets you evaluate your performance through quizzes. You must be wondering
                            about the subjects that are covered on this programming blog. Well, Lynda has a wide variety of subjects, but a few of the courses that you can find on this website related to web development are:</p>

                        <ul>
                            <li><a>WordPress</a></li>
                            <li><a>CSS and HTML</a></li>
                            <li><a>PHP</a></li>
                            <li><a>JavaScript</a></li>
                            <li><a>Angular</a></li>
                            <li><a>Node.js and React.js</a></li>
                        </ul>
                        <p>Want to know the attributes that make this tool special when it comes to learning codes? Well, Lynda is a premium site for online learning that teaches you everything from 3D automation to coding to web creation. It has many video
                            courses that you can use and learn better coding from your computer or tablet.</p>

                    </div>

                </div>
                <hr>
                <div class="row ak1">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4><a class="link-info" target="_blank" href="https://erikbern.com/">3. Erik Bernhardsson</a></h4>

                        <p>Erik Bernhardsson is an outstanding blogger and coder with a programming blog. He discusses topics concerning all coders, such as Git repository, IDEs, naming conventions, and Windows support problems.</p>
                        <p>You can check out this minimalist, well-written coding blog if you’re interested in coding from a business perspective or if you want to pick up some short tips for your next project. Bernhardsson also tackles problems in the wider
                            context that concern programmers, such as conversion rates or SaaS (Software as a Service).</p>
                        <p>This blog includes posts on tips, techniques, and shortcuts regarding programming. It includes C, Java, PHP, Python, and Ruby on Rails tutorials. Established in 2011, the blog is intended to help individuals explore tools for programming
                            and development.</p>
                        <p>The blog founder began the site with some simple notes and questions he gathered in his college class. The posts were evidently in high demand by the audience, and eventually, his personal blog became the one-stop destination for
                            programming reviews, snippets, and tutorials.</p>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="./imsgrs/gif14.gif" class="gif11 img-fluid" height="400px" width="600" alt="">
                    </div>
                </div>
                <hr>
                <div class="row ak2">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="./imsgrs/gig9.gif" class="img-fluid gif22" height="400px" width="600" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4><a class="link-info" target="_blank" href="https://myprogrammingblog.com/">4. My Programming Blog</a></h4>
                        <p>This blog includes posts on tips, techniques, and shortcuts regarding programming. It includes C, Java, PHP, Python, and Ruby on Rails tutorials. Established in 2011, the blog is intended to help individuals explore tools for programming
                            and development.</p>
                        <p>The blog founder began the site with some simple notes and questions he gathered in his college class. The posts were evidently in high demand by the audience, and eventually, his personal blog became the one-stop destination for
                            programming reviews, snippets, and tutorials.</p>
                    </div>

                </div>
                <hr>
                <div class="row ak3">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4><a class="link-info" target="_blank" href="https://davidwalsh.name/">5. David Walsh Blog</a></h4>
                        <p>David Walsh is a viral blogger in the world of developers. Basically, he’s a software developer who works for Mozilla, the tech giant. If you’ve ever wanted to learn about web creation, then you must have come across the Mozilla
                            Developer Network (MDN) step-by-step documentation</p>


                        <p>David Walsh played a huge role in strengthening that website. So, given his expertise and experience in the field of web creation, you can certainly learn a lot from his blog.</p>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="./imsgrs/gif10.gif" class="gif11 img-fluid" height="400px" width="600" alt="">
                    </div>
                </div>
                <hr>
                <div class="row ak4">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="./imsgrs/gif2.gif" class="img-fluid gif22" height="400px" width="600" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4><a class="link-info" target="_blank" href="https://www.sololearn.com/?v=2">6. SoloLearn</a></h4>
                        <p>SoloLearn is the fastest-growing online community dedicated to coding and has over 22 million learners worldwide learning how to code using their website.</p>
                        <p>What are the subjects that this programming blog covers? Using this platform, you can learn over 10 programming languages for free. Posts related to Python, HTML, CSS, JavaScript, C++, Java, PHP, SQL, Ruby, JQuery, C#, Swift, and
                            more are included in the collection!</p>
                        <p>What are the characteristics that render coding special to this site? This site’s main use is that it blends the best user-generated top-notch content with support in real-time. To hone your coding skills, you can also use their
                            forum to connect with other programmers.</p>

                    </div>

                </div>
                <hr>
                <div class="row ak5">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4><a class="link-info" target="_blank" href="https://www.webdesignerdepot.com/">7. Web Designer Depot</a></h4>
                        <p>If you are interested in web creation and web design, then you should deem this blog a must-read. The Web Designer Depot encompasses subjects ranging from server-side backend coding to functionality and layout for the frontend.</p>

                        <p>To help developers and programmers better understand the programming that makes the web work, several software papers and tutorials are available on this website. This blog discusses subjects such as requirements for web hosting
                            and the design and development of elements.</p>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12"><img src="./imsgrs/gif17.gif" class="gif11 img-fluid" height="400px" width="600" alt=""></div>

                </div>
                <hr>
                <div class="row ak6">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12"><img src="./imsgrs/gif6.gif" class="img-fluid gif22" height="400px" width="600" alt=""></div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4><a class="link-info" target="_blank" href="https://blog.codinghorror.com/">8. Coding Horror</a></h4>

                        <p>This blog is heartily enjoyed by a lot of readers. This blog is included in this list since it’s a frank, humorous blog that discusses the challenges and ironies of software creation, its ecosystem, and how it interacts (or doesn’t)
                            with the business world.</p>
                        <p>Since 2004, it has been around us. The blog is written by Jeff Atwood, the creator of Stack Overflow. Jeff has a brilliant way of looking at coding, and he can give you a stimulating view of the tech world when you need some inspiration.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row ak7">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4><a class="link-info" target="_blank" href="https://realpython.com/">9. Real Python</a></h4>
                        <p>Python is definitely a language of all seasons, which means you can use Python to create smartphone apps, games, blogs, embedded software, and even machine learning projects.</p>
                        <p>Real Python, as the name suggests, is a programming website solely focused on offering high-quality Python programming language tutorials and courses. These days, in various schools around the world, Python is also taught as the
                            first programming language. If you are just beginning, we will strongly suggest that you visit this website and follow their step-by-step directions.</p>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12"><img src="./imsgrs/gif4.gif" class="gif11 img-fluid" height="400px" width="600" alt=""></div>
                </div>
                <hr>
                <div class="row ak8">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12"><img src="./imsgrs/gif15.gif" class="img-fluid gif22" height="400px" width="600" alt=""></div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4><a class="link-info" target="_blank" href="https://css-tricks.com/">10. CSS Tricks</a></h4>
                        <p>Another highly known programming and web development teaching blog developed, written, and maintained by Chris Coyier in 2007 is CSS Tricks. When it was launched, this programming blog solely focused on the central principle of
                            CSS. It now covers everything related to web creation and web design.</p>
                        <p>Here are some of the things you’d find on this blog:</p>
                        <ul>
                            <li><a>CSS</a></li>
                            <li><a>JavaScript
                        </a></li>
                            <li><a>Frontend</a></li>
                            <li><a>Backend</a></li>
                        </ul>
                        <p>What are the characteristics that make this blog special for coding? The greatest advantage of this programming website is that you can also find programming and coding jobs through their career page. You can also have access to
                            their online site, where you can connect and share your talents with others.</p>
                    </div>
                </div>


        </section>
        <hr>
        <footer class="text-center">
            @copyrightwww.ankittisawar.com
        </footer>
</body>

</html>