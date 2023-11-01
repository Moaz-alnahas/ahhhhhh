<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO MOTHER FUCKER</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>

                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label>qty</label>
            <input type="text" name="qty" placeholder="qty">
        </div>
        <div>
            <label>price</label>
            <input type="text" name="price" placeholder="price">
        </div>
        <div>
            <label>description</label>
            <input type="text" name="des" placeholder="des">
        </div>
        <div>
            <input type="submit" value="save new product">
        </div>
    </form>

</body>
</html>