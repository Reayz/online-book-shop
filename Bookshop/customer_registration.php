<html>
	<?php session_start();?>
	<?php require_once('connection.php');?>
	<?php require_once('header.php');?>
	
	<?php
			if(!empty($_POST['submit'])){
                
				$name=trim($_POST['name']);
				$email=trim($_POST['email']);
				$password=trim($_POST['password']);
				$phone=trim($_POST['phone']);
				$address=trim($_POST['address']);
				$zip_code=trim($_POST['zip_code']);
				$city=trim($_POST['city']);
				$division=trim($_POST['division']);
					
					$sql=mysql_query("insert into customer values(
								'',
								'$name',
								'$email',
								'$password',
								'$phone',
								'$address',
								'$zip_code',
								'$city',
								'$division'
					)");
					
					if(!$sql){					
						echo"error".mysql_error();			
							}			
					else{	
					echo"<script>alert('Entry successfully')</script>";
					echo"<script>location.href='login.php'</script>";
						}
											
					}
	?>
	
	<body>
	<div class='container form'>
            <form  method='post' action='' id='register' enctype='multipart/form-data'>
                <fieldset>
                    <h3>Registration</h3>
                        <div class='middle'>
                            <div class="form-group">
                                <label class="label_design">Name</label>
                                <input type="text" class="form-control" name='name' id='name' placeholder="Name" required >
                            </div>
                            
                            <div class="form-group">
                                <label class='label_design'>Email</label>
                                <input type="email" class="form-control" name='email' id='email' placeholder="Email" required >					
                            </div>
                            <div class="form-group">
                                <label class='label_design'>Password</label>
                                <input type="password" class="form-control" name='password' id='password' placeholder="Password" required >					
                            </div>
                            

                            <div class="form-group">
                                <label class='label_design'>Phone</label>
                                <input  type='text' name='phone' class="form-control" placeholder="Phone" required>
                            </div>
                            <div class="form-group">
                                <label class='label_design'>Adress</label>
                                <input type='text' name='address' class="form-control" placeholder="Address" required>
                            </div>			
					        
                            <div class="form-group">
                                <label class='label_design'>Zip code</label>
                                <input type='text' name='zip_code' id='zip_code' class="form-control" placeholder="Zip code" required>
                            </div>
                            <div class="form-group">
                                <label class='label_design'>City</label>
                                <input type='text' name='city' id='city' class="form-control" placeholder="City" required>
                            </div>
                            <div class="form-group">
                                <label class='label_design'>division</label>
                                <input type='text' name='division' id='division' class="form-control" placeholder="Division" required>
                            </div>
																		
                             <input type="submit" value='Submit' name='submit' class="form-group btn-lg btn-default" required>
                                       
			</div>
                </fieldset>
            </form>    
        </div>
	
	
	<?php require_once('footer.php');?>
	</body>
	<script src="../js/jquery-3.1.0.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</html>

