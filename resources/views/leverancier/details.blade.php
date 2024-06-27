<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Producten</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: green;
        }
        .container {
            border: 1px solid #ccc;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .btn {
            padding: 10px 15px;
            background-color: #6c757d;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn:hover {
            background-color: #5a6268;
        }
        .btn-home {
            margin-right: 10px;
        }
        .alert {
            background-color: yellow;
            padding: 10px;
            margin: 20px 0;
            border: 1px solid #ddd;
        }
        .button-container {
            text-align: right;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Overzicht Producten</h1>
    
    <!-- Table for Leverancier Details -->
    <table>
        <thead>
            <tr>
                <th>Naam:</th>
                <th>Leveranciernummer</th>
                <th>Leveranciertype</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query_contacts as $contact)
            <tr>
                <td>{{ $contact->naam }}</td>
                <td>{{ $contact->leverancier_nummer }}</td>
                <td>{{ $contact->leverancier_type }}</td>
            </tr>     
            @endforeach
        </tbody>
    </table>
    
    <!-- Table for Product Details -->
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Soort Allergie</th>
                <th>Barcode</th>
                <th>Houdbaarheidsdatum</th>
                <th>Wijzig Product</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($query_products as $product)
            <tr>
                <td>{{ $product->naam }}</td>
                <td>{{ $product->soort_allergie }}</td>
                <td>{{ $product->barcode }}</td>
                <td>{{ $product->houdbaarheidsdatum }}</td>
                <td>
                    <a href="{{ route('product.edit', ['id' => $product->id]) }}">Wijzig Product</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Navigation Buttons -->
    <div class="button-container">
        <a href="{{ route('leveranciers.show') }}" class="btn">Terug</a>
        <a href="{{ route('dashboard') }}" class="btn btn-home">Home</a>
    </div>
</div>
</body>
</html>
