<!DOCTYPE html>
<html>

<head>
    <title>Delete Page</title>
</head>

<body>
    <h1>Delete User</h1>
    <h2>Are you sure want to Delete User {{$user['name']}}?</h2>
    <form method="post">
        @csrf <tr>
        <table border="1">
		<p>User Info: </p>
		
			    <td>ID</td>
			    <td>{{$user['id']}}</td>
		    </tr>

		    <tr>
			    <td>Username</td>
			    <td>{{$user['user_name']}}</td>
		    </tr>
		
		    <tr>
			    <td>Email</td>
			    <td>{{$user['email']}}</td>
		    </tr>
		
            <input type="submit" name="Submit" value="Delete">
        <a href="/home"> cancel</a>
    </form>

</body>