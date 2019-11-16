<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
    <!-- マテリアルアイコン -->
	<link  rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!-- bootstrap -->
	<link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{ asset('css/users.css') }}">
</head>
<body>
	<div class="container">
		<div class="header">
			<h2>Users Management DashBorad</h2>
			<hr>
		</div>
		<div class="card">
			<div class="card-header">Create User</div>
			<div class="card-body">
				<form action="" method="POST" class="form-horizontal">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="user_id" class="control-label">Id：</label>
						<input type="text" id="user_id" name="user_id" placeholder="userid" class="form-control">
					</div>
					<div class="form-group">
						<label for="id" class="control-label">Password：</label>
						<input type="text" id="password" name="password" placeholder="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="name" class="control-label">Name：</label>
						<input type="text" id="name" name="name" placeholder="name" class="form-control">
					</div>
					<div class="form-group">
						<label for="name" class="control-label">Email：</label>
						<input type="text" id="email" name="email" placeholder="email" class="form-control">
					</div>
					<div>
						<button type="submit" class="btn btn-success">submit</button>
					</div>
				</form>
			</div>
		</div>
		
		<div>
			<a href="/">View All User</a>
		</div>
	</div>
</body>
</html>