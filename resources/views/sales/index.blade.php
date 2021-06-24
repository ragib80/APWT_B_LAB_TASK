<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Page</title>
</head>

<body>
    <a href="/home"> Home</a> |
    <a href="/logout"> Logout </a>
    <div>{{session('msg')}}</div>
    <h1>Welcome To Sales, {{session('uname')}}</h1>
    <a href="{{route('sales.physical')}}"> Physical Shop </a> |
    <a href="{{route('sales.social')}}"> Social Media </a> |
    <a href="{{route('sales.ecommerce')}}"> Ecommerce</a>

    <h2>Product Registration</h2>

    <form method="post" enctype="multipart/form-data">
        @csrf
        <table>

            <tr>
                <td>Customer name</td>
                <td><input type="text" name="fullname"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>Product Id</td>
                <td><input type="text" name="productid"></td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td><input type="text" name="productname"></td>
            </tr>
            <tr>
                <td>Unit Price</td>
                <td><input type="text" name="unitprice"></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="text" name="quantity"></td>
            </tr>
            <tr>
                <td>Total Price</td>
                <td><input type="text" name="totalprice"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
                <td>
                </td>
            </tr>
        </table>
    </form>
    @foreach ($errors->all() as $err)
    {{$err}} <br>
    @endforeach
</body>


</html>