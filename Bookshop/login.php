    <html>                  
		<?php session_start();?>
		<?php require_once('connection.php');?>
		<?php require_once('header.php');?>					
		<div class='container login_form'>
                            <?php
							    if(!empty($_POST['login'])){
								  
								  $email=trim($_POST['email']);
								  $password=trim($_POST['password']);
								  $sql=mysql_query("select * from customer where email='$email' and password='$password'");
								  $count=mysql_num_rows($sql);
								  if($count==0){
									  
									  echo"<font color='#aa0000'><script>alert('email and password does not exist')</script></font>";
									  
								  }
								  else{
									  $data=mysql_fetch_array($sql);
									  $_SESSION['customer_id']=$data['customer_id'];
									  echo"<script>location.href='customer/index.php'</script>";
									  echo "<meta http-equiv='refresh' content='0'>";
									  
								  }

							  }
							  
							  
							  ?> 
							 
       
                    <form action="" id='login' method='post'>

                        <div class="login-wrap">
                            <h3>Login</h3>
                            <div class="form-group">
                                <label class='label_design'>Email</label>
                                <input type='text' name='email' class="form-control" placeholder="Enter Email" >

                            </div>
                            <div class="form-group">
                                <label class='label_design'>Password</label>
                                <input  type='password' name='password'  class="form-control" placeholder="Enter Password " >
                            </div>	

                            <input class="btn btn-primary btn-lg" name='login' type="submit" value='LOGIN'>
                            <h4>New member? <a href='customer_registration.php'>Register</a> please</h4>
                        </div>

                    </form>
		</div>
                <?php require_once('footer.php');?>
		<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
                <script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>		
