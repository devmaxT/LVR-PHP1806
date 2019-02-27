<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Loginnnn</title>
	<link rel="stylesheet" href="{{ asset('css/demo/bootstrap.min.css') }}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 offset-lg-3 offset-md-3">
				<div class="col-md-12 col-lg-12 mt-4">
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
				</div>	
				<form action="{{ route('admin.handle-login') }}" method="POST" class="mt-4">
					 @csrf
				    <div class="form-group">
					    <label for="user">Username</label>
					    <input type="text" name="user" id="user" class="form-control">
					    <label for="pass">Password</label>
					    <input type="password" name="pass" id="pass" class="form-control">
					    <button type="submit" name="btnLogin" class="btn btn-primary mt-2">Login</button>
				    </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>