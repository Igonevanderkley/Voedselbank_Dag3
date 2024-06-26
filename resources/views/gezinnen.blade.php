<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-600 leading-tight underline">
            {{ __('Overzicht gezinnen met allergiën') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- {{ $vertegenwoordigers }} --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('filter') }}" method="POST">
                        @csrf
                        <select name="allergieId" id="allergieId" class="w-full my-2">
                            @foreach ($allergienOpties as $allergie)
                                <option value="{{ $allergie->id }}">{{ $allergie->naam }}</option>
                            @endforeach
                        </select>

                        <button
                            class="inline-block my-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-2"
                            type="submit">Filter</button>
                    </form>

                    <table class="w-full">

                        {{-- {{ $vertegenwoordigers }} --}}

                        @foreach ($vertegenwoordigers as $vertegenwoordiger)
                           {{ $vertegenwoordiger->naam }}

                        @endforeach
                        <thead class="">
                            <tr class="	*:font-bold *:border *:border-neutral-900 *:p-2 ">
                                <th>Naam</th>
                                <th>Omschrijving</th>
                                <th>Volwassenen</th>
                                <th>Kinderen</th>
                                <th>Babys</th>
                                <th>Vertegewoordiger</th>
                                <th>Allergie Details</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($gezinnen as $gezin)
                                <tr class="*:p-3 *:border *:border-neutral-900 text-center">
                                    <td>{{ $gezin->gezinsNaam }}</td>
                                    <td>{{ $gezin->gezinsOmschrijving }}</td>
                                    <td>{{ $gezin->aantal_volwassenen }}</td>
                                    <td>{{ $gezin->aantal_kinderen }}</td>
                                    <td>{{ $gezin->aantal_babys }}</td>
                                    <td>                                        
                                     
                                </td>
                                <td>
                                    <a href="{{ route('allergie_details', $gezin->id) }}">Zie</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <a class= "inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2"
                    href="{{ route('dashboard') }}">home</a>


            </div>
        </div>


    </div>
</x-app-layout>
