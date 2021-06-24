<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <title>Home Page</title>
</head>

<body>
  <br><br>
    <a class="btn btn-info" href="/home"> Home</a> |
    <a class="btn btn-danger" href="/logout"> Logout </a>
    <div >{{session('msg')}}</div>
    <div class="main">
    <h1>Welcome home, {{session('email')}}</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="navbar-brand" href="/user/create">Create New <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="/user/list">User List</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="/system/sales">Sales</a>
      </li>
      
      
    </ul>
  </div>
  </div>
</nav>
    
</body>


</html>