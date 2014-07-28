<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to LifeQUOTES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script>
  		$(function() {
    		$( "#accordion" ).accordion(
	    			<?php 
	    				if($this->session->flashdata('add_user') == 'error' || $this->session->flashdata('errors')!==false){
	    					echo "{active: 1}";
	    				}
	    			?>
    			);
  		});
  		$(function() {
			$('#datepicker').datepicker({
				showButtonPanel: true,
				maxDate: 0,
			});
		});
	</script>
</head>
<body>
<div id="container">
	<div id="wrapper">
		<div id="title">
            <h1>Life<span class="turq">Quotes</span></h1>
            <div id="user">
            	<!-- display user name if logged in and log off or log-in if not logged in -->
	            <?php
                    if($this->session->userdata("userinfo")!==false){
                    	$userinfo = $this->session->userdata("userinfo");
                        echo "<h6>Welcome " . $userinfo['first_name'] . "!  </h6>";
                        echo "<a href='/users/logoff' class='btn btn-info'>Log off</a>";
                        redirect("/users/home");
                    }else{
                        echo "<a href='/users/index' class='btn btn-info'>Log in</a>";
                    } 
                ?>
            </div><!-- end of user -->
        </div><!-- end of title -->
		<div id="body">
			<?php
				if($this->session->flashdata('add_user')=='success'){
					echo "<h3 class='success'>Congratulations, your account has been created please login.</h3>";
				}
				if($this->session->flashdata('add_user')=='error'){
					echo "<h3 class='fail'>Error!!! Your account was not created please try again.</h3>";
				}
				if($this->session->flashdata('errors')!==false){
					echo "<h3 class='fail'>" . $this->session->flashdata('errors') . "</h3>";
				}
				if($this->session->flashdata('login')=='email'){
            			echo "<h3 class='fail'>There was an error verifying your e-mail, please try to log-in again or create a new account.</h3>";
            		}
            	if($this->session->flashdata('login')=='password'){
            			echo "<h3 class='fail'>There was an error verifying your password, please try to log-in again.</h3>";
            		}
			?>
			<div id="accordion">
				<h3>Log in</h3>
				<div>
					<div id="login">
		            	<form action="/users/login" method="post" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-3" for='email'>E-mail:</label>
						        <div class="col-sm-9">
						        	<input type="email" name="email" class="form-control">
						        </div>
					    	</div>
					    	<div class="form-group">
						        <label class="control-label col-sm-3" for='password'>Password:</label>
						        <div class="col-sm-9">
						        	<input type="password" name="password" class="form-control">
								</div>
							</div>
							<input type="submit" value="Log in" class="btn btn-info pull-right">
						</form>
					</div><!-- end of login -->
				</div>
				<h3>Register</h3>
				<div>
					<div id="register">
						<form action='/users/register' method='post' class="form-horizontal">
							<div class="form-group">
			        			<label class="control-label col-sm-4">First Name:</label>
			        			<div class="col-sm-8">
			        				<input type="text" name="first_name" class="form-control">
			        			</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-4">Last Name:</label>
						        <div class="col-sm-8">
						        	<input type="text" name="last_name" class="form-control">
						        </div>
					    	</div>
					    	<div class="form-group">
								<label class="control-label col-sm-4">User Name:</label>
						        <div class="col-sm-8">
						        	<input type="text" name="user_name" class="form-control">
						        </div>
					    	</div>
					    	<div class="form-group">
					        	<label class="control-label col-sm-4">E-mail:</label>
					        	<div class="col-sm-8">
						        	<input type="email" name="email" class="form-control">
								</div>
					        </div>
					        <div class="form-group">
					        	<label class="control-label col-sm-4">Password:</label>
					        	<div class="col-sm-8">
						        	<input type="password" name="password" class="form-control">
						        </div>
				        	</div>
				        	<div class="form-group">
					        	<label class="control-label col-sm-4">Password Confirmation:</label>
				        		<div class="col-sm-8">
				        			<input type="password" name="passwordconf" class="form-control">
				        		</div>
				        	</div>
				        	<div class="form-group">
					        	<label class="control-label col-sm-4">Date of Birth:</label>
				        		<div class="col-sm-8">
				        			<input type='text' name='date_of_birth' id='datepicker' class='form-control'>
				        		</div>
				        	</div>
							<input type="submit" value="Create Account" class="btn btn-info pull-right">
		        		</form>
					</div><!-- end of register -->
				</div>
			</div><!-- end of accordion -->
		</div><!-- end of body -->
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	</div><!-- end of wrapper -->
</div><!-- end of container -->
</body>
</html>