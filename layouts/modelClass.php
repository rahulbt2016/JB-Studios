<?php
    
    session_start();
    
    include_once './connection.php';
    
    Class Customer
    {
        function customerLogin($post)
        {
            $un=trim($post['un']);
            $pw=trim($post['pw']);
            $flag=0;
            
            $_SESSION['uname']=$un;
            
            
            $result=mysql_query("select User_Name,Password from customerinfo");
            while($row=mysql_fetch_array($result))
            {
                if($row['User_Name']==$un && $row['Password']==$pw)
                    $flag=1;
            }
            
            
            if($flag==1)
                echo true;
            else
                echo false;
        }
        
        
         function changePassword($post)
         {
            $user=trim($post['user']);
            $pswd=trim($post['pswd']);
            $newpswd=trim($post['newpswd']);
            $cnfpswd=trim($post['cnfpswd']);
            
            $flag1=0;
            $flag2=0;
            $test=0;
           
            $result1=mysql_query("select User_Name from customerinfo");
            
            while($row1=mysql_fetch_array($result1))
            {
                if($user==$row1['User_Name'])
                    $flag1=1;
            }
           
            if($flag1==1)
            {
                $result2=mysql_query("select Password from customerinfo where User_Name='$user'");
                while($row2=mysql_fetch_array($result2))
                {
                    if($pswd==$row2['Password'])
                            $flag2=1;
                }
            }
          
            
            
            if($flag1 &&  $flag2)
            {
                if($newpswd==$cnfpswd)
                {
                    $test=mysql_query("update customerinfo set Password='$newpswd' where User_Name='$user';");
                }
            }
            
            if($test)
                echo true;
            else
                echo false;
         }
         
         
         
          function contactUs($post)
        {
            $name=trim($post['name']);
            $email=trim($post['email']);
            $message=trim($post['message']);
            
            $subject="Inquiry @JB-studios by $name , Email ID: $email";
            
            if(mail('jbstudios94@gmail.com',$subject,$message,'From:abc@xyz.com'))
                echo true;
            else 
                echo false;
            
            mail($email,'feedback','Thankyou for visiting our website.','From:abc@xyz.com');
        }
        
        
        function forgotPassword($post)
         {
            $uname=trim($post['urname']);
        
           
            $result1=mysql_query("select Password from customerinfo where User_Name='$uname'");
            
            while($row1=mysql_fetch_array($result1))
            {
                $pswd=$row1['Password'];
            }
            
            
             $result2=mysql_query("select Email_ID from customerinfo where User_Name='$uname'");
            
            while($row2=mysql_fetch_array($result2))
            {
                $email=$row2['Email_ID'];
            }
            
         
            $message="Your Password is: $pswd . Try to login again and change password as per your convenience if u want.";
            $sub="Forgot Password Request";
          if(mail($email,$sub,$message,'From:abc@xyz.com'))
              echo true;
          else
              echo false;
         }  
    }
?>

