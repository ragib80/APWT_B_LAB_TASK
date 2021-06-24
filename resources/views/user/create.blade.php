<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
</head>

<body>

    <a href="/home"> Back</a> |
    <a href="/logout"> Logout </a>

    <h2>Create New User</h2>

    <form method="post" enctype="multipart/form-data">
        @csrf
        <table>

            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Full name</td>
                <td><input type="text" name="full_name"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Confrim Password</td>
                <td><input type="password" name="cpassword"></td>
            </tr>
           
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>company</td>
                <td><input type="text" name="company"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>city</td>
                <td><input type="text" name="city"></td>
            </tr>
            <tr>
                <td>country</td>
                <td><input type="text" name="country"></td>
            </tr>
            <tr>
                <td>type</td>
                <td><input type="text" name="type"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
                <td>
                </td>
            </tr>
        </table>
    </form>
</body>



</html>