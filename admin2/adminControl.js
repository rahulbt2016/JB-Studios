$(document).ready(function()
{
    $(document).on('click','#b1',function()
    {
        $uname=$('#user').val();
        $pw=$('#pswd').val();
   
    
    $.ajax({
            url:"http://localhost/CubexInfo/mainProject/admin/adminModelMain.php",
        
            data:
                {
                    user:$uname,
                    pswd:$pw,
                    action:'login12'
                },
                
            type: 'POST',
            datatype:'HTML',
            
            success: function(data){
                if(data==1)
                    window.location='adminGalleryView.php';
                else
                {
                    alert("Incorrect user-name/password. Retry.");
                    location.reload();
                }
            }
        
        });
    });
    
    $(document).on('click','#b2',function()
    {
        $uname=$('#user').val();
        $pw=$('#pswd').val();
        $npw=$('#newpswd').val();
        $cpw=$('#cnfmpswd').val();
   
    
    $.ajax({
            url:"http://localhost/CubexInfo/mainProject/admin/adminModelMain.php",
        
            data:
                {
                    user:$uname,
                    pswd:$pw,
                    newpswd:$npw,
                    cnfpswd:$cpw,
                    action:'resetpswd'
                },
                
            type: 'POST',
            datatype:'HTML',
            
            success: function(data)
            {
                if(data==1)
                {
                    alert("Password SuccessfullyChanged!");
                    window.location='adminView1.php';
                }
                else
                {
                    alert("Incorrect Information. Retry.");
                    location.reload();
                }
            }
        
        
        });
    });
    
     $(document).on('click','#b3',function()
    {
        
        $picName=$(this).parent('td').siblings('td').find('#picfile').val().replace("C:\\fakepath\\","");
        $picCaption=$(this).parent('td').siblings('td').find('#picCaption').val();
        $srNo=$(this).parent('td').siblings('#srNo').html();
       
      
        var n1= new FormData();
        n1.append('pic',$(this).parent('td').siblings('td').find('#picfile').prop("files")[0]);
        n1.append('action','changeimg');
        n1.append('picName',$picName);
        n1.append('picCaption',$picCaption.trim());
        n1.append('srNo',$srNo.trim());
        
   
    
    $.ajax({
            url:"http://localhost/CubexInfo/mainProject/admin/adminModelMain.php",
        
            data: n1,
            
            processData: false,
            contentType: false,
            type: 'POST',
            datatype:'HTML',
            success: function(data)
            {
                alert("Image/Caption Changed Successfully!");
                location.reload();
            }
        
        });
    });
    
    $(document).on('click','#workDel',function()
    {
        $sr=$(this).parent('td').siblings('#srNo').html();
        $conf=confirm("Delete Pic?");
        
        if($conf)
        {
         $.ajax({
            url:"http://localhost/CubexInfo/mainProject/admin/adminModelMain.php",
        
            data:
                {
                    srNo:$sr,
                    action:'delPic'
                },
                
            type: 'POST',
            datatype:'HTML',
            
            success: function(data)
            {
                location.reload();
            }
            
        
        });
    }
    else
        exit;
    });
    
    $(document).on('click','#b4',function()
    {
        $picType=$("input[name='wpictype']:checked").val();
        
        var n2 = new FormData();
        n2.append('pic',$('#wpic').prop("files")[0]);
        n2.append('action','uploadworkpic');
        n2.append('picName',$('#wpic').val().replace("C:\\fakepath\\",""));
        n2.append('picType',$picType.trim());
        
        $.ajax({
            
            url:"http://localhost/CubexInfo/mainProject/admin/adminModelMain.php",
            data: n2,
            processData: false,
            contentType: false,
            type: 'POST',
            datatype: 'HTML',
            
            success: function(data)
            {
                alert("Image uploaded successfully!");
                location.reload();
            }
            
        });
    });
    
    
    
    $(document).on('click','#b5',function()
    {
       $name=$('#cmname').val();
       $number=$('#cmnumber').val();
       $email=$('#cmemail').val();
       $uname=$('#cmuname').val();
       $pw=$('#cmpw').val();
   
    
    $.ajax({
            url:"http://localhost/CubexInfo/mainProject/admin/adminModelMain.php",
        
            data:
                {
                    name:$name,
                    number:$number,
                    email:$email,
                    uname:$uname,
                    pw:$pw,
                    action:'addcustomer'
                },
                
            type: 'POST',
            datatype:'HTML',
            success: function(data){
                alert("New Customer Added Successfully");
                location.reload();
            }
            
        
        });
    });
    
    
    
    $(document).on('click','#b6',function()
    {
        var n3 = new FormData();
        n3.append('pic',$('#cmpic').prop("files")[0]);
        n3.append('action','uploadcustomerpic');
        n3.append('picName',$('#cmpic').val().replace("C:\\fakepath\\",""));
        n3.append('cmuname',$('#customeruname').val().trim());
        
        $.ajax({
            
            url:"http://localhost/CubexInfo/mainProject/admin/adminModelMain.php",
            data: n3,
            processData: false,
            contentType: false,
            type: 'POST',
            datatype: 'HTML',
            
            success: function(data)
            {
                alert("Customer's Pic uploaded successfully!");
                location.reload();
            }
            
        });
    });
    
    
    
    
    $(document).on('click','#forgot-admin-password',function()
    {
        $urname=$('#user').val();
       
   
    
    $.ajax({
            url:"http://localhost/CubexInfo/mainProject/admin/adminModelMain.php",
        
            data:
                {
                    urname: $urname,
                    action:'forgotadminpassword'
                },
                
            type: 'POST',
            datatype:'HTML',
            success: function(data)
            {
                if(data==1)
                {
                    alert("Your password has been sent to your email id. Check your inbox and try to login again.");
                    location.reload();
                }
                else
                {
                    alert("Incorrect username. Tryagain");
                    location.reload();
                }
            }
        
        });
    });
    
});


