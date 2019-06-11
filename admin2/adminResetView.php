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
    </head>
    <body>
                     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="../layouts/home.php">JB Studios</a>
    </div>
    <ul class="nav navbar-nav">
        <!--<li><a href="adminView2.php">Home</a></li>-->
      <li><a href="adminGalleryView.php">Gallery</a></li>
      <li><a href="adminWorksView.php">Works</a></li>
      <li><a href="adminNewCustomerView.php">Add Customer</a></li>
      <li><a href="adminUploadCustomerPic.php">Upload Customers' Pics</a></li>
      <li class="active"><a href="adminResetView.php">Reset Password</a></li>
      <li><a href="adminView1.php">Logout</a></li>
    </ul>
  </div>
</nav>
<!--    <div  id='adminTitle'><p><pre  id="adminTitleText">
        JB 
        Studios 
        Admin<pre></p>
    </div>-->
    <div id="adminForm">
        <form>
            <table>
                <tr>
                    <td style="font-size: 18px; color:white">User: </td>
                    <td><input type="text" id="user" placeholder="Enter User name"></td>
                </tr>
                <tr>
                    <td style="font-size: 18px; color:white">Old Password:</td>
                    <td><input type="password" id="pswd" placeholder="Enter Old Password"></td>
                </tr>
                 <tr>
                    <td style="font-size: 18px; color:white">New Password:</td>
                    <td><input type="password" id="newpswd" placeholder="Enter New Password"></td>
                </tr>
                <tr>
                    <td style="font-size: 18px; color:white">New Password:</td>
                    <td><input type="password" id="cnfmpswd" placeholder="Confirm New Password"></td>
                </tr>
                <tr>
                        <td colspan="2"><center><input type="button" id="b2" value="Change Password" ></center></td>
                </tr>
            </table>
        </form>
    </div>
        </body>
</html>

