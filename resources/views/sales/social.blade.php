<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <a href="/home"> Home</a> |
    <a href="/logout"> Logout </a>
    <div>{{session('msg')}}</div>
    <h1>Welcome To Social Shop, {{session('uname')}}</h1>
    <a href="{{route('sales.index')}}"> Sales </a> |
    <a href="{{route('sales.physical')}}"> Physical Shop </a> |
    <a href="{{route('sales.social')}}"> Social Media </a> |
    <a href="{{route('sales.ecommerce')}}"> Ecommerce</a> |
    <table border="1">
        <tr>
            <td> ID </td>
            <td>ProductName </td>
            <td> Quantity </td>
            <td>Date Sold </td>
        </tr>

        @foreach ($productList as $product)
        <tr>

            <td>{{$product->product_id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->date_sold}}</td>

        </tr>
        @endforeach

    </table>

</body>


</html>