<?php include('header.php'); ?>
 <html>
      <head>
           <title>PHP OOP Basic register dummy</title>
      </head>
      <body>
           <div class="container" >
						 <form class="form-horizontal" action="./logic/register-logic.php" method="POST">
		 <h1>User Registration</h1>
		 <div class="form-group">
			 <label class="control-label col-sm-2" for="firstname">First Name:</label>
			 <div class="col-sm-6">
				 <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname" required>
			 </div>
		 </div>
		 <div class="form-group">
			 <label class="control-label col-sm-2" for="lastname">Last Name:</label>
			 <div class="col-sm-6">
				 <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname" required>
			 </div>
		 </div>
		 <div class="form-group">
			 <label class="control-label col-sm-2" for="email">Email:</label>
			 <div class="col-sm-6">
				 <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
			 </div>
		 </div>
		 <div class="form-group">
			 <label class="control-label col-sm-2" for="pwd">Password:</label>
			 <div class="col-sm-6">
				 <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" required>
			 </div>
		 </div>
		 <div class="form-group">
			 <div class="col-sm-offset-2 col-sm-10">
				 <button type="submit" name="create" class="btn btn-primary">Submit</button><br>
					 <a href="login.php">Already have an account? Sign in now</a>
			 </div>
		 </div>
	 </form>
           </div>
      </body>
 </html>
