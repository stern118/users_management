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
		<div>
			<table class="table">
				@foreach ($records as $record)
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Password</th>
					<th>Email</th>
					<th>Profile</th>
					<th>Destroy</th>
				</tr>
				<tr>
					<td>{{ $record-> user_id}}</td>
					<td>{{ $record-> name}}</td>
					<td>{{ $record-> password}}</td>
					<td>{{ $record-> email}}</td>
					<td><a href>View<br>Profile</a></td>
					<td><a href>
							<i class="material-icons">close</i>
						</a>
					</td>
				</tr>
				@endforeach
			</table>	
		</div>
		<div>
			<a href="">Create New User</a>
		</div>
	</div>
</body>
</html>