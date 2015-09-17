<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Project DS1</title>
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1" />
<!-- css -->
{{HTML::style('packages/css/bootstrap.css')}}
{{HTML::style('packages/css/font-awesome.css')}}
{{HTML::style('packages/css/app.css')}}
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">Create your Glomindz client account</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 ">
				<h2 class="text-left help-text text-muted ">How client account will
					help you?</h2>
				<p class="how-text">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit, sed do eiusmod tempor incididunt ut labore et
					dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
					exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate
					velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
					occaecat cupidatat non proident, sunt in culpa qui officia deserunt
					mollit anim id est laborum.</p>
			</div>
			<div class="col-md-5 col-md-offset-1">
				<div class="jumbotron reg-div">

					<div class="alert alert-success" id="success">
						<button type="button" class="close" data-dismiss="alert"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						You are successfully registered!! Please login with your mobile or email and password
					</div>
					{{Form::open(array('class'=>'form','id'=>'register-form'))}}
					<div class="form-group">
						<label>Name</label> <input type="text"
							class="form-control input-lg" name="name" required="required">
					</div>
					<div class="form-group">
						<label>Email</label> <input type="email"
							class="form-control input-lg" name="email" required="required">
					</div>
					<div class="form-group">
						<label>Mobile no</label> <input type="tel"
							class="form-control input-lg" name="mobile" required="required">
					</div>
					<div class="form-group">
						<label>Password</label> <input type="password"
							class="form-control input-lg" id="password"  name="password"
							required="required">
					</div>
					<div class="form-group">
						<label></label>
						<button type="button" id="saveBtn" onclick="registerUser();" class="btn btn-primary btn-lg btn-block">Register</button>
					</div>
					{{Form::close() }}
				</div>
			</div>
		</div>
	</div>


	<!-- script js -->
	{{HTML::script('packages/js/jquery.min.js');}}
	{{HTML::script('packages/js/bootstrap.js');}}
	{{HTML::script('packages/js/bootstrap-show-password.min.js');}}
	{{HTML::script('packages/script/register.js');}}
</body>
</html>