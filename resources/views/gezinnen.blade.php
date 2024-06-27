<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="font-semibold text-xl text-green-600 leading-tight underline">Overzicht gezinnen met
                            allergiën</h2>

                        <form action="{{ route('filter') }}" method="POST" class="flex items-center">
                            @csrf
                            <select name="allergieId" id="allergieId"
                                class="w-80 my-2 border-gray-300 focus:ring-blue-500 focus:border-blue-500 rounded-md shadow-sm h-10 px-2">
                                <option value="0">Selecteer allergie</option>
                                @foreach ($allergienOpties as $allergie)
                                    <option value="{{ $allergie->id }}">{{ $allergie->naam }}</option>
                                @endforeach
                            </select>

                            <button
                                class="inline-block ml-2 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-2"
                                type="submit">Toon gezinnen</button>
                        </form>
                    </div>


                    <table class="w-full">
                        @if (session('status'))
                            <div id="status-message"
                                class="bg-yellow-100 border-yellow-500 text-yellow-700 p-4 mb-4 text-center"
                                role="alert">
                                {{ session('status') }}
                            </div>
                        @else
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
                                            {{ $gezin->vertegenwoordigerVoornaam }}
                                            {{ $gezin->vertegenwoordigerTussenvoegsel }}
                                            {{ $gezin->vertegenwoordigerAchternaam }}
                                        </td>
                                        <td>
                                            <a href="{{ route('allergie_details', $gezin->id) }}">Zie</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>

                        @endif



                        {{-- {{ $vertegenwoordigers }} --}}

                    </table>


                    <div class="flex justify-end">
                        <a class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 ml-2"
                            href="{{ route('dashboard') }}">terug</a>

                        <a class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 ml-2"
                            href="{{ route('dashboard') }}">home</a>
                    </div>


                </div>
            </div>


        </div>
</x-app-layout>
