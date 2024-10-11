<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/product.css">
    <title>Document</title>
</head>
<body>
    <section class="cards">
        @foreach($products as $product)
            <div class="{{$product->amount === 0 ? 'card none' : 'card'}}">
                <p>{{$product->name}}</p>
                <p>{{$product->cost}}</p>
                <p>{{$product->amount}}</p>
                <a href="{{ url('/products/' . $product->id) }}">Купыть</a>
            </div>
        @endforeach
    </section>
</body>
</html>
