<!DOCTYPE html>
    <head>
        <title>JB Studios Admin</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="adminControl.js"></script>
        <link rel="shortcut icon" href="../img/logo.jpeg">
        <link rel="stylesheet" href="adminCSS.css">
        <style>
            th{
                color:white;
                text-decoration: underline;
                text-decoration: bold;
                font-size:28px;
            }
        </style>
    </head>
    <body>
         <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../layouts/home.php">JB Studios</a>
    </div>
    <ul class="nav navbar-nav">
        <!--<li><a href="adminView2.php">Home</a></li>-->
      <li class="active"><a href="adminGalleryView.php">Gallery</a></li>
      <li><a href="adminWorksView.php">Works</a></li>
      <li><a href="adminNewCustomerView.php">Add Customer</a></li>
      <li><a href="adminUploadCustomerPic.php">Upload Customers' Pics</a></li>
      <li><a href="adminResetView.php">Reset Password</a></li>
      <li><a href="adminView1.php">Logout</a></li>
    </ul>
  </div>
</nav>
        
<!--    <div  id='adminTitle'><p><pre  id="adminTitleText">
        JB 
        Studios 
        Admin<pre></p>
    </div>-->
   
    <div id="adminForm"  style="width: 950px; ">
        <br>
         <center><i><h1 style="color:white; text-decoration:underline">List of Gallery Pics</h1></i></center>
        <form>
            <table>
<!--                <tr>
                    <td style="font-size: 18px; color:white">Pic1:</td>
                    <td></td>
                    <td><input type="file" id="pic1"></td>
                    <td><input type="button" id="b21" value="Change"></td>
                    
                </tr>
                
                 <tr>
                    <td style="font-size: 18px; color:white">Pic2:</td>
                    <td><input type="file" id="pic2"></td>
                    <td><input type="button" id="b22" value="Change"></td>
                    
                </tr>
                
                 <tr>
                    <td style="font-size: 18px; color:white">Pic3:</td>
                    <td><input type="file" id="pic3"></td>
                    <td><input type="button" id="b23" value="Change"></td>
                    
                </tr>
                
                 <tr>
                    <td style="font-size: 18px; color:white">Pic4:</td>
                    <td><input type="file" id="pic4"></td>
                    <td><input type="button" id="b24" value="Change"></td>
                    
                </tr>
                
                 <tr>
                    <td style="font-size: 18px; color:white">Pic5:</td>
                    <td><input type="file" id="pic5"></td>
                    <td><input type="button" id="b25" value="Change"></td>
                    
                </tr>
                
                 <tr>
                    <td style="font-size: 18px; color:white">Pic6:</td>
                    <td><input type="file" id="pic6"></td>
                    <td><input type="button" id="b26" value="Change"></td>
                    
                </tr>   -->
                <tr>
                    <th></th>
                    <th>Current Pic</th>
                    <th>Change Image</th>
                    <th>Caption</th>
                </tr>
                <?php
                     mysql_connect('localhost','root','');
                     mysql_select_db('jbstudios');
                     $result=mysql_query('select * from gallery');
                     while($row=mysql_fetch_array($result))
                    {
                        echo"<tr><td style='font-size: 18px; color:white' id='srNo'>".$row['srNo']."</td>
                             <td><a href='../img/".$row['imageName']."' data-lightbox='studio2' class='photostack-img'><img src='../img/".$row['imageName']."' style='opacity:1;'  height='200px' width='200px'/></a></td>
                             <td><input type='file' id='picfile' style='color:white'></td>
                             <td><textarea rows='5' cols='20' id='picCaption'>".$row['imageCaption']."</textarea></td>
                             <td><input type='button' id='b3' value='Change'></td></tr>";
                    
                    }
                ?>
            </table>
        </form>
    </div>
        </body>
</html>

    
    



