$("document").ready(function()
{
    $(document).on('click','#b7',function()
    {
        $un=$("#un").val();
        $pw=$("#pw").val();
        
        $.ajax({
            url: "http://localhost/CubexInfo/mainProject/layouts/modelMain.php",
            
            data:
                    {
                        un:$un,
                        pw:$pw,
                        action:'customerLogin'
                    },
                    
            type: 'POST',
            datatype:'HTML',
            
            success: function(data){
                if(data==1)
                {
                    window.location='customerPics.php';
                   
                   
                }
                else
                {
                    alert("Incorrect user-name/password. Retry.");
                    location.reload();
                }
                   
                    
            }
            
        });
    });
    
    
    $(document).on('click','#b8',function()
    {
        $un2=$('#un2').val();
        $opw=$('#opw').val();
        $npw=$('#npw').val();
        $cpw=$('#cpw').val();
   
    
    $.ajax({
            url:"http://localhost/CubexInfo/mainProject/layouts/modelMain.php",
        
            data:
                {
                    user:$un2,
                    pswd:$opw,
                    newpswd:$npw,
                    cnfpswd:$cpw,
                    action:'changepswd'
                },
                
            type: 'POST',
            datatype:'HTML',
            success: function(data)
            {
                if(data==1)
                {
                    alert("Password SuccessfullyChanged!");
                    window.location='signin.php';
                }
                else
                {
                    alert("Incorrect Information. Retry.");
                    location.reload();
                }
            }
        
        });
    });
    
    
    
     $(document).on('click','#contact-submit',function()
    {
        $name=$('#name').val();
        $email=$('#email').val();
        $message=$('#message').val();
   
    
    $.ajax({
            url:"http://localhost/CubexInfo/mainProject/layouts/modelMain.php",
        
            data:
                {
                    name: $name,
                    email: $email,
                    message: $message,
                    action:'contactus'
                },
                
            type: 'POST',
            datatype:'HTML',
            success: function(data)
            {
                if(data==1)
                {
                    alert("Mail Sent Successfully");
                    location.reload();
                }
                else
                {
                    alert("Incorrect Information. Retry.");
                    location.reload();
                }
            }
        
        });
    });
    
    $(document).on('click','#forgot-password',function()
    {
        $urname=$('#un').val();
       
   
    
    $.ajax({
            url:"http://localhost/CubexInfo/mainProject/layouts/modelMain.php",
        
            data:
                {
                    urname: $urname,
                    action:'forgotpassword'
                },
                
            type: 'POST',
            datatype:'HTML',
            success: function(data)
            {
                if(data==1)
                {
                    alert("Your password has been sent to your registered email id. Check your inbox and try yo login again.");
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
