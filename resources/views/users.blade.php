<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
    <!-- マテリアルアイコン -->
	<link  rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!-- bootstrap -->
	<link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{{ asset('css/users.css') }}">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$('.delete-user').on('click', function(){
				if(!confirm('Are you sure you want to delete the user?')) {
					return false;
				} else {
					location.href = 'delete_user?user_id='
										+ $(this).closest('tr').find('td').first().text();
				}
				//console.log('Hello');
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="header">
			<h2>Users Management DashBorad</h2>
			<hr>
		</div>
		<div>
			<table class="table table-striped table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Password</th>
						<th>Email</th>
						<th>
							Edit<br>
							Profile
						</th>
						<th>Delete</th>
					</tr>
				</thead>
				@foreach ($records as $record)
				<tr>
					<td>{{ $record-> user_id}}</td>
					<td>{{ $record-> name}}</td>
					<td>{{ $record-> password}}</td>
					<td>{{ $record-> email}}</td>
					<td align="center">
						<a href="edit_user?user_id={{ $record-> user_id}}">
							Edit<br>
							Profile
						</a>
					</td>
					<td align="center"><a href="#" class="delete-user">
							<i class="material-icons">close</i>
						</a>
					</td>
				</tr>
				@endforeach
			</table>	
		</div>
		<div>
			<a href="create_user">Create New User</a>
		</div>
	</div>
</body>
</html>
