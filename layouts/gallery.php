<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../img/logo.jpeg">

    <title>JB Studios</title>

    <!-- Bootstrap core CSS -->
   
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="../dist/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/navmenu-reveal.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/full-slider.css" rel="stylesheet">
    <link href="../css/Icomoon/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/animated-masonry-gallery.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../css/component.css" />
    <link href="../css/lightbox.css" rel="stylesheet" type="text/css" />
    <script type="text/javaScript" src="../js/modernizr.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <div class="bar">
    <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-recalc="false" data-target=".navmenu" data-canvas=".canvas">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
    </button>
  </div>
    <div class="navmenu navmenu-default navmenu-fixed-left">
      <ul class="nav navmenu-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="works.php">Works</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="signin.php">Sign In</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <a class="navmenu-brand" href="#"><img src="../img/logo.jpg" width="160"></a>
   
      <div class="copyright-text">©Copyright <a href="#"> JB Studios</a> 2015 </div>
    </div>

    <div class="canvas gallery"><br>
        <h1 class="blog-post-title text-center">Gallery of Images</h1>
        <span class="title-divider"></span>
        </section>
            <section id="photostack-3" class="photostack">
                <div>
            <!--             <figure>
                   <a href="../img/a.jpg"  data-lightbox="studio2" class="photostack-img"><img src="../img/a.jpg" height="250px" width="250px" alt="img05"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Speed Racer</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="../img/b.jpg"  data-lightbox="studio2" class="photostack-img"><img src="../img/b1.jpg" alt="img02"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Happy Days</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="../img/c.jpg"  data-lightbox="studio2" class="photostack-img"><img src="../img/c1.jpg" alt="img03"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Beautywood</h2>
                        </figcaption>
                    </figure>
                    <figure>
                       <a href="../img/d.jpg"  data-lightbox="studio2" class="photostack-img"><img src="../img/d1.jpg" alt="img01"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Serenity Beach</h>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="../img/e.jpg"  data-lightbox="studio2" class="photostack-img"><img src="../img/e1.jpg" alt="img04"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Heaven of time</h2>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="../img/f.jpg"  data-lightbox="studio2" class="photostack-img"><img src="../img/f1.jpg" alt="img06"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Forever this</h2>
                        </figcaption>
                    </figure>        -->
            
                   <?php
                        mysql_connect('localhost','root','');
                        mysql_select_db('jbstudios');
                        $result=mysql_query('select * from gallery');
                        while($row=mysql_fetch_array($result))
                        {
                            echo " <figure>
                                        <a href='../img/".$row['imageName']."' data-lightbox='studio2' class='photostack-img'><img src='../img/".$row['imageName']."'  height='250px' width='250px'/></a>
                                        <figcaption>
                                            <h2 class='photostack-title'>".$row['imageCaption']."</h2>
                                        </figcaption>
                                    </figure>";
                        }
                    ?>     
               
              
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="../img/jb4.jpg" height='250px' width='250px' alt="img07"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Swaggy</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="../img/jb5.jpg" height='250px' width='250px' alt="img08"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Wonderful</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="../img/jb6.jpg" height='250px' width='250px' alt="img09"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Shades of Black</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="../img/jb8.jpg" height='250px' width='250px' alt="img10"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Gentleman</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="../img/jb7.jpg" height='250px' width='250px' alt="img11"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Summer Look</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="../img/jb10.jpg" height='250px' width='250px' alt="img12"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Pure White</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="../img/jb11.jpg" height='250px' width='250px' alt="img13"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Love for Music</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="../img/jb14.jpg" height='250px' width='250px' alt="img14"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Innocence</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="../img/jb15.jpg" height='250px' width='250px' alt="img15"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Be You Forever</h2>
                        </figcaption>
                    </figure>
                    <figure data-dummy>
                        <a href="#" class="photostack-img"><img src="../img/jb16.jpg" height='250px' width='250px' alt="img16"/></a>
                        <figcaption>
                            <h2 class="photostack-title">Lightness</h2>
                        </figcaption>
                    </figure>
                </div>
            </section>
        </div>
      
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-1.10.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/isotope.js"></script>
    <script type="text/javascript" src="../js/animated-masonry-gallery.js"></script>
    <script src="../dist/js/jasny-bootstrap.min.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/photostack.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/lightbox.js"></script>
  </body>
</html>
