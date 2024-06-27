<x-app-layout>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h2 class="py-4 font-semibold text-xl text-green-600 leading-tight underline">Allergiën in het gezin</h2>

                    @if (session('status'))
                        <div id="status-message" class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4"
                            role="alert">
                            {{ session('status') }}
                        </div>
                        <script>
                            setTimeout(function() {
                                document.getElementById('status-message').style.display = 'none';
                            }, 3000);
                        </script>
                    @endif


                    <table>
                        <tr class="	*:font-extrabold *:border *:border-neutral-900 *:p-2 ">
                            <th>Gezinsnaam:</th>
                            <td>{{ $gezinData->naam }}</td>
                        </tr>

                        <tr class="	*:font-extrabold *:border *:border-neutral-900 *:p-2 ">
                            <th>Omschrijving:</th>
                            <td>{{ $gezinData->omschrijving }}</td>
                        </tr>

                        <tr class="	*:font-extrabold *:border *:border-neutral-900 *:p-2 ">
                            <th>Totaal aantal personen:</th>
                            <td>{{ $gezinData->totaal_aantal_personen }}</td>
                        </tr>

                    </table>

                    <br><br>

                    <table class="w-full">
                        <thead class="">
                            <tr class="	*:font-extrabold *:border *:border-neutral-900 *:p-2 ">
                                <th>Naam</th>
                                <th>Type Persoon</th>
                                <th>Gezinsrol</th>
                                <th>Allergie</th>
                                <th>Wijzig allergie</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ $allergieenPerPersonen  }} --}}

                            @foreach ($allergieenPerPersonen as $persoon)
                                <tr class="*:p-3 *:border *:border-neutral-900 text-center">
                                    <td>{{ $persoon->voornaam }} {{ $persoon->tussenvoegsel }}
                                        {{ $persoon->achternaam }}</td>
                                    <td>{{ $persoon->type_persoon }}</td>
                                    @if ($persoon->is_vertegenwoordiger == 1)
                                        @php $rol = 'Verantwoordelijke' @endphp
                                    @else
                                        @php $rol = 'Gezinslid' @endphp
                                    @endif
                                    <td>{{ $rol }}</td>
                                    <td>{{ $persoon->naam }}</td>
                                    <td>

                                        {{-- {{ $persoon->allergie_id }}
                                        {{ $persoon->persoon_id }} --}}
                                        <a class=""
                                            href="{{ route('wijzig_allergie', ['allergieId' => $persoon->allergie_id, 'persoonId' => $persoon->persoon_id]) }}">Wijzig</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <div class="flex justify-end">
                        <a class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 ml-2"
                            href="{{ route('gezinnen') }}">terug</a>

                        <a class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 ml-2"
                            href="{{ route('dashboard') }}">home</a>
                    </div>



                    <div class="flex justify-end">

                    </div>



                </div>
            </div>

        </div>
</x-app-layout>
