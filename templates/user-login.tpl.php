
<div class="container">  

  
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title"><center>Login Aplikasi Mahasiswa</center></div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px">
						<!-- <a href="#">Forgot password? --> </a>
						</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
					
                       
                        <!--    
                        <form id="loginform" class="form-horizontal" role="form" method="post">
                        --> 
					
                           <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="name" value="" placeholder="username..." required/>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="pass" placeholder="password">
                                    </div>
									
						
									
									
	<?php
    print drupal_render($form['form_build_id']);
    print drupal_render($form['form_id']);
    print drupal_render($form['actions']);
    ?>
<br>
</br>
                                     <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:0px; font-size:85%" >
                                            Jika anda belum punya user hubungi Admin! 
                                           </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>

    </div>
	
	
<div id="footer">
  <div class="container" align="center">
    <p class="text-muted">Aplikasi UT <a href="http://ut.ac.id">Universitas Terbuka</a></p>
  </div>
</div>



  