<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wijzig Product</title>
</head>
<body>
    @foreach ( $query_products as $product )
    <h1>Wijzig Houdbaarheidsdatum van {{ $product->naam }}</h1>
    
    @endforeach

