<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Klanten Overzicht') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-2">
        <u style="color: green;">Overzicht Klanten</u>
        <div class="flex justify-end mb-4">
            <form action="" method="GET" class="flex items-center">
                <select name="postcode" id="postcode" class="mr-2 text-sm py-1">
                    <option value="">Selecteer Postcode</option>
                    <option value="1000AA">5217TH</option>
                    <option value="1001AB">1001AB</option>
                </select>
                <button type="submit" class="bg-gray-500 text-white px-4 py-1 text-sm ml-2">Toon klanten</button>
            </form>
        </div>
        @if (session('message'))
            <div class="alert alert-info mt-3">{{ session('message') }}</div>
        @endif

        @if (isset($klanten) && $klanten->count() > 0)
            <table class="min-w-full divide-y divide-gray-200 border-collapse">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-2 py-1 border border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Naam Gezin</th>
                        <th scope="col"
                            class="px-2 py-1 border border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vertegenwoordiger</th>
                        <th scope="col"
                            class="px-2 py-1 border border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            E-mailadres</th>
                        <th scope="col"
                            class="px-2 py-1 border border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Mobiel</th>
                        <th scope="col"
                            class="px-2 py-1 border border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Adres</th>
                        <th scope="col"
                            class="px-2 py-1 border border-gray-300 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Klant Details</th>
                    </tr>
                </thead>

                {{-- {{ $klanten }} --}}
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($klanten as $klant)
                        <tr>
                            <td class="hidden">{{ $klant->id }}</td>
                            <td class="px-2 py-1 border border-gray-300 text-sm">{{ $klant->gezin_naam }}</td>
                            <td class="px-2 py-1 border border-gray-300 text-sm">{{ $klant->is_vertegenwoordiger }}</td>
                            <td class="px-2 py-1 border border-gray-300 text-sm">{{ $klant->email }}</td>
                            <td class="px-2 py-1 border border-gray-300 text-sm">{{ $klant->mobiel }}</td>
                            <td class="px-2 py-1 border border-gray-300 text-sm">{{ $klant->adres }}</td>

                            <td>
                                {{-- <a href="{{ route('klanten.klantenDetails', $klant->id) }}">Bekijk Details</a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        @else
            <p>Geen klanten gevonden.</p>
        @endif
        <a href="{{ route('dashboard') }}"
            style="background-color: #3490dc; color: white; padding: 8px 16px; border-radius: 4px; text-decoration: none; font-weight: bold;">
            Home
        </a>
</x-app-layout>
