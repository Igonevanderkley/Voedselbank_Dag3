<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-600 leading-tight underline">
            {{ __('Wijzig allergie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- {{ $vertegenwoordigers }} --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('edit') }}" method="POST">
                        @csrf

                        <input type="hidden" name="persoonId" value="{{ $persoonId }}">

                        <select name="allergieId" id="allergieId" class="w-full">
                            @foreach ($allergienOpties as $allergie)
                                <option value="{{ $allergie->id }}">{{ $allergie->naam }}</option>
                            @endforeach

                            <option value=""></option>
                        </select>

                        <button
                            class="inline-block bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mt-2"
                            type="submit">Wijzig</button>
                    </form>

                    {{-- <a class="bg-blue-500 hover:bg-blue-700 text-white my-10 font-bold py-2 px-4 rounded mt-2" href="{{ route('allergie_details') }}">terug</a> --}}
                    <a class="inline-block bg-blue-500 hover:bg-blue-700 text-white my-10 font-bold py-2 px-4 rounded mt-2"
                        href="{{ route('dashboard') }}">home</a>

                    <a class="inline-block bg-blue-500 hover:bg-blue-700 text-white my-10 font-bold py-2 px-4 rounded mt-2"
                        href="{{ route('dashboard') }}">Terug</a>

                </div>
            </div>


        </div>
</x-app-layout>
