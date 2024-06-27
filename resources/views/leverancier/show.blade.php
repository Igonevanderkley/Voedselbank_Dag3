<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Leveranciers</title>
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
        .form-container {
            margin: 20px 0;
        }
        .form-container select, .form-container button {
            padding: 8px;
            margin: 5px 0;
        }
        .form-container button {
            background-color: #6c757d;
            color: white;
            border: none;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #5a6268;
        }
        .button-container {
            text-align: right;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Overzicht Leveranciers</h1>

    <!-- Formulier voor het selecteren van leverancierstype -->
    <div class="form-container">
        <form method="GET" action="{{ route('leveranciers.show') }}">
            <label for="leverancier_type">Selecteer leverancierstype:</label>
            <select name="leverancier_type" id="leverancier_type">
                <option value="Selecteer LeverancierType">Selecteer LeverancierType</option>
                <option value="bedrijf">Bedrijf</option>
                <option value="instelling">Instelling</option>
                <option value="overheid">Overheid</option>
                <option value="particulier">Particulier</option>
                <option value="Donor">Donor</option>
            </select>
            <button type="submit">Toon Leveranciers</button>
        </form>
    </div>

    <!-- Melding als er geen leveranciers zijn -->
    @if (!$hasLeveranciers && isset($leverancierType))
        <div class="alert">
            <p>Er zijn geen leveranciers bekend met het leverancierstype "{{ $leverancierType }}".</p>
        </div>
    @else
        <!-- Tabel met leveranciers -->
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Contactpersoon</th>
                    <th>Email</th>
                    <th>Mobiel</th>
                    <th>Leveranciernummer</th>
                    <th>LeverancierType</th>
                    <th>Product Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leveranciers as $leverancier)
                    <tr>
                        <td>{{ $leverancier->naam }}</td>
                        <td>{{ $leverancier->contact_persoon }}</td>
                        <td>{{ $leverancier->email }}</td>
                        <td>{{ $leverancier->mobiel }}</td>
                        <td>{{ $leverancier->leverancier_nummer }}</td>
                        <td>{{ $leverancier->leverancier_type }}</td>
                        <td>
                            <a href="{{ route('leveranciers.details', ['id' => $leverancier->idd]) }}">Info</a>
                        </td>
                        <!-- Voeg andere relevante kolommen toe -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <!-- Navigatieknoppen -->
    <div class="button-container">
        <a href="{{ route('leveranciers.show') }}" class="btn">Terug </a>
        <a href="{{ route('dashboard') }}" class="btn btn-home">Home</a>
    </div>
</div>
</body>
</html>
