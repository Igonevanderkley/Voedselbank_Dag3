<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Producten</title>
</head>
<body>
<h1>Overzicht Producten van </h1>

@if (session('success'))
    <div class="alert">{{ session('success') }}</div>
@endif
<table>
    <thead>
        <tr>
            <th>Naam:</th>
            <th>Leveranciernummer</th>
            <th>Leveranciertype</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
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
    </tbody>
</table>

<a href="{{ route('leveranciers.show') }}" class="btn">Terug naar Leveranciers</a>
</body>
</html