<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/product.css">
</head>

<body>
    <div>
        <h1>Ваша корзина</h1>

        @foreach ($pro as $input)
        <div class="card">
            <h2>Название: {{$input->product->name}}</h2>
            <p>Кол-во: {{ $input['quantity'] }}</p>
            <p>Сумма: {{$input['sum']}} ₽</p>
        </div>
        @endforeach
    </div>
</body>

</html>
