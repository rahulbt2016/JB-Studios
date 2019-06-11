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
        <center><h2 style="text-decoration:underline; color:white">New Customer Entry</h2></center>
        <form>
            <table>
                <tr>
                    <td style="font-size: 18px; color:white">Customer Name: </td>
                    <td><input type="text" id="cmname" placeholder="Enter Customer Name"></td>
                </tr>
                <tr>
                    <td style="font-size: 18px; color:white">Contact Number:</td>
                    <td><input type="text" id="cmnumber" placeholder="Enter Contact Number"></td>
                </tr>
                 <tr>
                    <td style="font-size: 18px; color:white">Email ID:</td>
                    <td><input type="text" id="cmemail" placeholder="Enter Email ID"></td>
                </tr>
                <tr>
                    <td style="font-size: 18px; color:white">User-name:</td>
                    <td><input type="text" id="cmuname" placeholder="Enter User-name"></td>
                </tr>
                <tr>
                    <td style="font-size: 18px; color:white">Password:</td>
                    <td><input type="password" id="cmpw" placeholder="Enter Password"></td>
                </tr>
                <tr>
                        <td colspan="2"><center><input type="button" id="b5" value="Submit" ></center></td>
                </tr>
            </table>
        </form>
    </div>
        </body>
</html>


