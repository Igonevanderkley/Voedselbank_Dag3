<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h2 class="py-4 font-semibold text-xl text-green-600 leading-tight underline">Wijzig allergie</h2>

                    <form action="{{ route('edit') }}" method="POST">
                        @csrf
                        <input type="hidden" name="huidigAllergieId" value="{{ $allergieId}}">
                        <input type="hidden" name="persoonId" value="{{ $persoonId }}">

                        <select name="allergieId" id="allergieId" class="w-full" value="">

                            @foreach ($allergienOpties as $allergie)
                                <option value="{{ $allergie->id }}"
                                    {{ $allergie->id == $allergieId ? 'selected' : '' }}>
                                    {{ $allergie->naam }}
                                </option>
                            @endforeach

                        </select>

                        @if (session('status'))
                            <div id="status-message" class="bg-green-100 border-l-4 text-green-700 p-4 mb-4"
                                role="alert">
                                {{ session('status') }}
                            </div>

                            <script>
                                setTimeout(function() {
                                    window.location.href = "{{ route('allergie_details', ['gezinId' => session('gezinId')]) }}";
                                }, 3000);
                            </script>
                        @endif


                        <button
                            class="inline-block bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-2"
                            type="submit">Wijzig allergie</button>
                    </form>


                    <div class="flex justify-end">
                        <a class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 ml-2"
                            href="{{ route('allergie_details', $gezinId->gezin_id) }}">Terug</a>

                        <a class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 ml-2"
                            href="{{ route('dashboard') }}">home</a>
                    </div>


                </div>
            </div>


        </div>
</x-app-layout>
