<?php
  
    
    include_once 'adminConnection.php';
    
    Class UserLogin
    {
        function login($post)
        {
            $user=trim($post['user']);
            $pswd=trim($post['pswd']);
            
            $result1=mysql_query("select id from login where srNo='1'");
            
            while($row1=mysql_fetch_array($result1))
            {
                $realUser=$row1['id'];
            }
           
            $result2=mysql_query("select password from login where srNo='1'");
              while($row2=mysql_fetch_array($result2))
            {
                $realPswd=$row2['password'];
            }
            
            
            if($user==$realUser &&  $pswd==$realPswd)
                echo true;
            else
                echo false;
               
        }
        
        
        function reset($post)
        {
            $qTest=0;
            
            $user=trim($post['user']);
            $pswd=trim($post['pswd']);
            $newpswd=trim($post['newpswd']);
            $cnfpswd=trim($post['cnfpswd']);
            
            $result1=mysql_query("select id from login where srNo='1'");
            
            while($row1=mysql_fetch_array($result1))
            {
                $realUser=$row1['id'];
            }
           
            $result2=mysql_query("select password from login where srNo='1'");
              while($row2=mysql_fetch_array($result2))
            {
                $realPswd=$row2['password'];
            }
            
            
            if($user==$realUser &&  $pswd==$realPswd)
            {
                if($newpswd==$cnfpswd)
                {
                    $qTest=mysql_query("update login set password='$newpswd' where srNo=1;");
                }
            }
          
            if($qTest)
                echo true;
            else
                echo false;
                
               
        }
        
        
        function changeImage($post)
        {
            $picName=trim($post['picName']);
            $picCaption=trim($post['picCaption']);
            $sr=trim($post['srNo']);
            
            
            if($picName=="")
            {
                $r1=mysql_query("select imageName from gallery where srNo=$sr");
                while($rw1=mysql_fetch_array($r1))
                {
                    $picName=$rw1['imageName'];
                }
            }
            
           mysql_query("update gallery set imageName='$picName',imageCaption='$picCaption' where srNo=$sr");
        }
        
        function deletePicture($post)
        {
            echo "Hello";
            $srNo=trim($post['srNo']);
            
            
            $testQuery=mysql_query("delete from works where srNo=$srNo");
        }
        
        function uploadWorkImage($post)
        {
            
            $picName=trim($post['picName']);
            $picType=trim($post['picType']);
            
            $result=mysql_query("select MAX(srNo) as maxSrNo from works");
            while($row=mysql_fetch_array($result))
            {
                $i=$row['maxSrNo'];
            }
            
            mysql_query("insert into works values($i+1,'$picName','$picType')");
        }
        
        
        function addCustomer($post)
        {
            $name=trim($post['name']);
            $number=trim($post['number']);
            $email=trim($post['email']);
            $uname=trim($post['uname']);
            $pw=trim($post['pw']);
            
            mysql_query("insert into customerinfo values('','$name',$number,'$email','$uname','$pw')");
               
        }
        
        function uploadCustomerPic($post)
        {
            $uname=trim($post['cmuname']);
            $picName=trim($post['picName']);
            
            $result=mysql_query("select Customer_ID from customerinfo where User_Name='$uname'");
            while($row=mysql_fetch_array($result))
            {
                $id=$row['Customer_ID'];
            }
            
            mysql_query("insert into customerpics values($id,'$picName')");
            
        }
        
        
        function forgotAdminPassword($post)
         {
            $uname=trim($post['urname']);
        
           
            $result1=mysql_query("select password from login where id='$uname'");
            
            while($row1=mysql_fetch_array($result1))
            {
                $pswd=$row1['password'];
            }
            
         
            
         
            $message="Your Password is: $pswd . Try to login again and change password as per your convenience if u want.";
            $sub="Forgot Password Request";
          if(mail('jbstudios94@gmail.com',$sub,$message,'From:abc@xyz.com'))
              echo true;
          else
              echo false;
         } 
    }
?>

