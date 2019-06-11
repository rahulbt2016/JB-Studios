<?php
    session_start();
    $un5=$_SESSION['uname'];
?>
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
    <link href="../css/lightbox.css" rel="stylesheet" type="text/css" />
    

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
        <li><a href="contact.php">Contact</a></li>
        <li><a href="changePassword.php">Change Password</a></li>
        <li><a href="signin.php">Logout</a></li>
        
        
      </ul>
      <a class="navmenu-brand" href="#"><img src="../img/logo.jpg" width="160"></a>
     
      <div class="copyright-text">©Copyright <a href="#"> JB Studios</a> 2015 </div>
    </div>

    <div class="canvas gallery"><br>
        <h1 class="blog-post-title text-center">Your Pictures</h1>
        <span class="title-divider"></span>

      <div id="container" class="container">
        <div id="gallery">
        <div id="gallery-content">
          <div id="gallery-content-center">

            <?php
                
                $uname=$un5;                                                      //Need to change here
                
                include_once './connection.php';
                
                $res=mysql_query("select Customer_ID from customerinfo where User_Name='$uname'");
                while($rw=mysql_fetch_array($res))
                {
                    $cid=$rw['Customer_ID'];
                }
            
                $res2=mysql_query("select * from customerpics where Customer_ID=$cid");
                while($rw2=mysql_fetch_array($res2))
                {
                    echo "<a href='../customer_pics/".$rw2['Pic']."' data-lightbox='studio1'><img src='../customer_pics/".$rw2['Pic']."' class='all'/></a>";
                }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-1.10.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="../js/isotope.js"></script>
    <script type="text/javascript" src="../js/animated-masonry-gallery.js"></script>
    <script src="../dist/js/jasny-bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/lightbox.js"></script>
  </body>
</html>

    