<!DOCTYPE html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="adminControl.js"></script>
        <link rel="shortcut icon" href="../img/logo.jpeg">
        <link rel="stylesheet" href="adminCSS.css">
    </head>
    <body>
    <div  id='adminTitle'><p><pre  id="adminTitleText">
        JB 
        Studios 
        Admin<pre></p>
    </div>
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

