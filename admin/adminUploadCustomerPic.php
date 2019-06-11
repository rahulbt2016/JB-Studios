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
    <div id="adminForm" style="width:950px">
        <form>
            <table>
                <tr>
                    <td style="font-size: 18px; color:white">Customer User-Name:</td>
                    <td>
                        <select id="customeruname">
                            <option>Select</option>
                            <?php
                                mysql_connect('localhost','root','');
                                mysql_select_db('jbstudios');
                                $result=mysql_query("select User_Name from customerinfo");
                                while($row=mysql_fetch_array($result))
                                {
                                    echo "<option>".$row['User_Name']."</option>";
                                }
                                
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 18px; color:white">Pic:</td>
                    <td><input type="file" id="cmpic" style="color:white"></td>
                </tr>
                <tr>
                        <td colspan="2"><center><input type="button" id="b6" value="Upload"></center></td>
                </tr>
            </table>
        </form>
    </div>
    
    <div id="adminForm2" style="width:950px">
        <h1 style='color:white'><center>List of Customers</center></h1>
        <tr><tr><tr>
        <?php
            $result2=mysql_query("select * from customerinfo");
            echo"<table>";
                echo "<tr style='color:white; font-size:20px; text-decoration:underline'>
                        <td>Customer-ID</td>
                        <td>Name</td>
                        <td>Contact No.</td>
                        <td>Email</td>
                        <td>User-Name</td>
                        <td>Password</td>
                      </tr>";
            while($row2=mysql_fetch_array($result2))
            {
                echo "<tr style='color:white; font-size:20px;'>
                        <td>".$row2['Customer_ID']."</td>
                        <td>".$row2['Name']."</td>
                        <td>".$row2['Contact_Number']."</td>
                        <td>".$row2['Email_ID']."</td>
                        <td>".$row2['User_Name']."</td>
                        <td>".$row2['Password']."</td>
                      </tr>";
            }
            echo"</table>";
        ?>
    </div>
    </body>>
</html>

    
    






