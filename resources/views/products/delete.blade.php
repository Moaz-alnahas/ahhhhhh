<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('product.del')}}">
        @csrf
        @method('post')
        <input type="text" name="id" placeholder="id"/><br>
        <input type="submit" vlaue="delete">
    </form>
</body>
</html>