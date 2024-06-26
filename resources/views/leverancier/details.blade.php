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
        <!-- @foreach ($query_contacts as $contact)
            <tr>
                <td>{{ $contact->naam }}</td>
                <td>{{ $contact->leverancier_nummer }}</td>
                <td>{{ $contact->leverancier_type }}</td>
            </tr>     
        @endforeach -->
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
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->naam }}</td>
                <td>{{ $product->soort_allergie }}</td>
                <td>{{ $product->barcode }}</td>
                <td>{{ $product->houdbaarheidsdatum }}</td>
                <td>
                    <a href="{{ route('leveranciers.details', ['product' => $product->id]) }}">
                        <img src="https://www.flaticon.com/svg/static/icons/svg/860/860786.svg" alt="Potlood" width="20" height="20">
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('leveranciers.show') }}" class="btn">Terug naar Leveranciers</a>
</body>
</html>
