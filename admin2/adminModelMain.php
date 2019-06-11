<?php
    include_once 'adminModelClass.php';
    
    $user= new UserLogin();
    
     
    if($_POST['action']=='login12')
        $user->login($_POST);
                         
    
    if($_POST['action']=='resetpswd')
        $user->reset($_POST);
    
    if($_POST['action']=='delPic')
            $user->deletePicture($_POST);
    
    if($_POST['action']=='addcustomer')
            $user->addCustomer($_POST);
    
    
    if($_POST['action']=='changeimg')
    {
        $path='../img/';
        $imgid = trim($_POST['picName']); 
        if(!file_exists($path))
        {
            mkdir($path,0777);
        }
        $user->changeImage($_POST);
        if(move_uploaded_file($_FILES['pic']['tmp_name'],$path . $imgid))
                echo "File Successfully Moved";
        else
            echo "File Didnt move";
    }
    
    if($_POST['action']=='uploadworkpic')
    {
        $user->uploadWorkImage($_POST);
        $path='../assets/';
        $imgid = trim($_POST['picName']); 
        if(!file_exists($path))
        {
            mkdir($path,0777);
        }
        
        if(move_uploaded_file($_FILES['pic']['tmp_name'],$path . $imgid))
                echo "File Successfully Moved";
        else
            echo "File Didnt move";
    }
    
    
     if($_POST['action']=='uploadcustomerpic')
    {
        $user->uploadCustomerPic($_POST);
        $path='../customer_pics/';
        $imgid = trim($_POST['picName']); 
        if(!file_exists($path))
        {
            mkdir($path,0777);
        }
        
        if(move_uploaded_file($_FILES['pic']['tmp_name'],$path . $imgid))
                echo "File Successfully Moved";
        else
            echo "File Didnt move";
    }
    
    if($_POST['action']=='forgotadminpassword')
            $user->forgotAdminPassword($_POST);
?>


