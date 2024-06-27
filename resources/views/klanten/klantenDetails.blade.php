<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('klant Details') }}
        </h2>
    </x-slot>
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="voornaam">Naam:</label>
            <input type="text" name="voornaam" id="voornaam" value="" required>
        </div>
        <div>
            <label for="tussenvoegsel">Tussenvoegsel:</label>
            <input type="text" name="tussenvoegsel" id="tussenvoegsel" value="" required>
        </div>
        <div>
            <label for="achternaam">Achternaam:</label>
            <input type="text" name="achternaam" id="achternaam" value="" required>
        </div>
        <div>
            <label for="geboortedatum">Geboortedatum:</label>
            <input type="text" name="geboortedatum" id="geboortedatum" value="" required>
        </div>
        <div>
            <label for="type_persoon">TypePersoon:</label>
            <input type="text" name="type_persoon" id="type_persoon" value="" required>
        </div>
        <div>
            <label for="vertegenwoordiger">Vertegenwoordiger:</label>
            <input type="text" name="vertegenwoordiger" id="vertegenwoordiger" value="" required>
        </div>

        <div>
            <label for="straatnaam">Straatnaam:</label>
            <input type="text" name="straatnaam" id="straatnaam" value="" required>
        </div>
        <div>
            <label for="huisnummer">Huisnummer:</label>
            <input type="text" name="huisnummer" id="huisnummer" value="" required>
        </div>
        <div>
            <label for="toevoeging">Toevoeging:</label>
            <input type="text" name="toevoeging" id="toevoeging" value="" required>
        </div>

        <div>
            <label for="postcode">Postcode:</label>
            <input type="text" name="postcode" id="postcode" value="" required>
        </div>
        <div>
            <label for="woonplaats">Woonplaats:</label>
            <input type="text" name="woonplaats" id="woonplaats" value="" required>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" value="" required>
        </div>

        <div>
            <label for="mobiel">Mobiel:</label>
            <input type="text" name="mobiel" id="mobiel" value="" required>
        </div>
        <div>
            <a href=""
                style="background-color: #3490dc; color: white; padding: 10px 24px; margin: 20px 0; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; text-decoration: none; display: inline-block;">
                Wijzig
            </a>
        </div>
        <div>
            <a href="{{ route('klantenOverzicht') }}"
                style="background-color: #3490dc; color: white; padding: 10px 24px; margin: 20px 0; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; text-decoration: none; display: inline-block;">
                Terug
            </a>
        </div>
        <div>
            <a href="{{ route('dashboard') }}"
                style="background-color: #3490dc; color: white; padding: 10px 24px; margin: 20px 0; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; text-decoration: none; display: inline-block;">
                Homepage
            </a>
        </div>
    </form>
</x-app-layout>
