<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div><h1>WELCOME PHP</h1></div>

<div>
    <table border=1>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->des}}</td>
            </tr>
        @endforeach
    </table>
</div>
<br><br><br>
<div>
    <form action="{{route('product.store')}}">
        <input type="submit" value="click me please">
    </form>
    <form action="{{route('product.delete')}}">
        <input type="submit" value="delete"/>
    </form>
</div>
</body>
</html>