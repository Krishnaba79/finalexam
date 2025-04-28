<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		>
	</head>

	<body>
	<a style="text-decoration: none;color:black;" href="/">Home Page</a>
		<div class="wrapper">
			
		<img src="/assets/images/image-1.png">
			<div class="inner">
		
				<form action="/register-create" method="post">
					<?php 
						if(isset($validation))
						{?>
							<div class="alert alert-danger" role="alert">
								<?=$validation->listErrors();?>
							</div>
							<?php }?>

						<div>
							<?php echo session()->getFlashdata('message');?>
						</div>
					<h3>New Account?</h3>
					<div class="form-holder">
						
						<input name="username" type="text" class="form-control" placeholder="Username">
					</div>
				
					<div class="form-holder">
						
						<input name="email" type="text" class="form-control" placeholder="E-mail">
					</div>
					<div class="form-holder">
						
						<input name="password" type="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-holder">
					
						<input name="createdAt" type="datetime-local" class="form-control" placeholder="createdAt">
					</div>
					<button type="submit">
						<span>Register</span>
					</button>

					<span>Already have An Account</span>
					<a href="/login">Login</a>
				</form>
				
			</div>
			
		</div>
		
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>