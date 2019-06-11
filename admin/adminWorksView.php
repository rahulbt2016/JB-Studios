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
        </body>
</html>

    
    




