<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wijzig Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: green;
        }

        .container {
            width: 50%;
            margin: 20px auto;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="date"] {
            padding: 8px;
            width: calc(100% - 20px);
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 10px;
        }

        .btn-green {
            background-color: darkgreen;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
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

        .btn-blue {
            background-color: blue;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        .button-container {
            text-align: right;
            margin-top: 20px;
        }

        .error-message {
            color: red;
            background-color: lightcoral;
            padding: 10px;
            margin-bottom: 10px;
            display: none; /* Verberg melding standaard */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Wijzig Product</h1>
        @if (isset($error))
            <div class="error-message">{{ $error }}</div>
        @endif

        @foreach ($query_date as $date)
        <form id="wijzigForm" action="{{ route('product.edit', $date->id) }}">
            @csrf
            
            <label for="houdbaarheidsdatum">Huidige Houdbaarheidsdatum:</label>
                <input type="date" id="verlenging-info" name="houdbaarheidsdatum" value="{{ $date->houdbaarheidsdatum }}">
        @endforeach
                <p>De houdbaarheidsdatum mag met maximaal 7 dagen verlengd worden</p>

                <button type="submit" class="btn-green" onclick="showMessage()">Wijzig houdbaarheidsdatum</button>
            </form>

        <div class="button-container">
            <a href="{{ route('leveranciers.show') }}" class="btn">Terug</a>
            <a href="{{ route('dashboard') }}" class="btn btn-home">Home</a>
        </div>
    </div>

    <script>
        function showMessage() {
            var messageDiv = document.createElement('div');
            messageDiv.className = 'error-message';
            messageDiv.textContent = 'Melding met rode achtergrond en rode letters.';
            document.body.appendChild(messageDiv);

            setTimeout(function() {
                messageDiv.style.display = 'block'; // Toon de melding na toevoegen
                setTimeout(function() {
                    messageDiv.style.display = 'none'; // Verberg de melding na 3 seconden
                }, 10000);
            }, 10000);
        }
    </script>
</body>
</html>
