<?php
    include_once './modelClass.php';
    
    $customer = new Customer();
    
    if($_POST['action']=='customerLogin')
        $customer->customerLogin($_POST);
    
    if($_POST['action']=='changepswd')
        $customer->changePassword($_POST);
    
     if($_POST['action']=='contactus')
        $customer->contactUs($_POST);
     
     if($_POST['action']=='forgotpassword')
        $customer->forgotPassword($_POST);     
    
?>