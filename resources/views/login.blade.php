<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="{{url('Login')}}" method="POST" role="form">
					<legend>Login</legend>
					@if($errors->has('errorLogin'))
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>		{{$errors->first('errorLogin')}}
						</div>
					@endif
				
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" id="email" placeholder="Input email" name="email" value="{{old('email')}}">
						@if($errors->has('email'))
							<p style="color:red">{{$errors->first('email')}}</p>
						@endif
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Input password" name="password">
						@if($errors->has('password'))
							<p style="color:red">{{$errors->first('password')}}</p>
						@endif
					</div>
					{!! csrf_field() !!}
				
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>