
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
    
    
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="adminControl.js"></script>
        <link rel="shortcut icon" href="../img/logo.jpeg">
        <link rel="stylesheet" href="../admin/adminCSS.css">
    
    
  
    

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

      <div class="canvas" ><br>
<!--          <div  id='adminTitle'><p><pre  id="adminTitleText">
        JB 
        Studios 
        Admin<pre></p>
    </div>-->
    <div id="adminForm" style="width:950px">
        <form>
            <table>
                <tr>
                    <td style="font-size: 18px; color:white">Pic:</td>
                    <td><input type="file" id="wpic" style="color:white"></td>
                </tr>
                <tr>
                    <td style="font-size: 18px; color:white">Pic Type:</td>
                    <td style="color:white">
                        Studio<input type="radio" name="wpictype" id="wpictype" value="studio">
                        &nbsp;   &nbsp;    &nbsp;    &nbsp; 
                        Landscape<input type="radio" name="wpictype" id="wpictype" value="landscape">
                    </td>
                </tr>
                <tr>
                        <td colspan="2"><center><input type="button" id="b4" value="Upload"></center></td>
                </tr>
            </table>
        </form>
    </div>
    
    <div id="adminForm2" style="width:950px">
        <h1 style='color:white'><center>List of Work Pics</center></h1>
        <tr><tr><tr>
        <?php
            mysql_connect('localhost','root','');
            mysql_select_db('jbstudios');
            $result=mysql_query("select * from works");
            $i=1;
            echo"<table>";
                echo "<tr style='color:white; font-size:20px; text-decoration:underline'>
                        <td>No.</td>
                        <td><center>Pic</center></td>
                        <td><center>Pic Type</center></td>
                        <td></td>
                      </tr>";
            while($row=mysql_fetch_array($result))
            {
                echo "<tr style='color:white; font-size:20px;'>
                        <td id='srNo'>$i</td>
                        <td><a href='../assets/".$row['imageName']."'><img src='../assets/".$row['imageName']."' style='height:250px ;width:250px'/></a></td>
                        <td><center>".$row['imageType']."</center></td>
                        <td><a href='#' style='color:pink;text-decoration:underline' id='workDel'>delete</a></td>
                      </tr>";
                 $i=$i+1;
            }
            echo"</table>";
        ?>
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


