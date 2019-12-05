<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
    <!-- マテリアルアイコン -->
	<link  rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!-- bootstrap -->
	<link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{ asset('css/create_user.css') }}">
</head>
<body>
	<div class="container">
		<div class="header">
			<h2>Users Management DashBorad</h2>
			<hr>
		</div>
		<div class="card content">
			<div class="card-header bg-dark text-white">Create User</div>
			<div class="card-body">
				<form action="" method="POST" class="form-horizontal">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="user_id" class="control-label">Id：</label>
						<input type="text" id="user_id" name="user_id" class="form-control"
							value="{{ $record->user_id }}">
					</div>
					<div class="form-group">
						<label for="id" class="control-label">Password：</label>
						<input type="text" id="password" name="password" class="form-control"
							placeholder="password">
					</div>
					<div class="form-group">
						<label for="name" class="control-label">Name：</label>
						<input type="text" id="name" name="name" class="form-control"
							value="{{ $record->name }}">
					</div>
					<div class="form-group">
						<label for="name" class="control-label">Email：</label>
						<input type="text" id="email" name="email" class="form-control"
							value="{{ $record->email }}">
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