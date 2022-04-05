<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<?php
    require('db.php');
    if (isset($_POST['username'])) {
        $username = stripslashes($_POST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users` (username, password)
                     VALUES ('$username', '" . md5($password) . "')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div>
                  <h3>You are registered successfully.</h3><br/>
                  <p>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div>
                  <h3>User Name already exist</h3><br/>
                  <p>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div class="container">
	    <div class="d-flex justify-content-center h-100">
		    <div class="card">
			    <div class="card-header">
			    	<h3>Regestration</h3>
		    	</div>
			    <div class="card-body">
		    		<form action="" method="post">
	    				<div class="input-group form-group">
    						<div class="input-group-prepend">
							    <span class="input-group-text"><i class="fas fa-user"></i></span>
						    </div>
						    <input type="text" class="form-control" name="username" placeholder="Username" required >						
					    </div>
					    <div class="input-group form-group">
				    		<div class="input-group-prepend">
							    <span class="input-group-text"><i class="fas fa-key"></i></span>
						    </div>
						    <input type="password" class="form-control" name="password" placeholder="Password">
					    </div>
					    <div class="form-group">
				    		<input type="submit" value="Register" class="btn float-right login_btn">
			    		</div>
		    		</form>
	    		</div>
    			<div class="card-footer">
				    <div class="d-flex justify-content-center links">
                        Already have an account?<a href="login.php">Login</a>
				    </div>
			    </div>
		    </div>
	    </div>
    </div>
<?php
    }
?>
</body>
</html>
