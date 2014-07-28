<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LifeQUOTES</title>
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
                    }else{
                        echo "<a href='/users/index' class='btn btn-info'>Log in</a>";
                        redirect("/users/index");
                    } 
                ?>
            </div><!-- end of user -->
        </div><!-- end of title -->
		<div id="body">
			<div id="upper">
				<div class = "column">
				</div>
				<div class = "column">
				</div>
			</div>
			<div id="lower">
			</div>
		</div><!-- end of body -->
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
</body>
</html>