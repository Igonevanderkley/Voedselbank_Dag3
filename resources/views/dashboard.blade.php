<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Homepage voedselbank maaskantje') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-9 bg-white overflow-hidden shadow-sm sm:rounded-lg *:text-lg">
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link class="text-lg text-blue-600 underline" :href="route('leveranciers.show')" :active="request()->routeIs('leveranciers.show')">
                        {{ __('Overzicht Leveranciers') }}
                        <u><a href="{{ 'klanten' }}" style="color: blue;">Overzicht Klanten</a></u>
                        <a class="text-blue-600 underline" href="{{ route('gezinnen') }}">Overzicht gezinsallergieen</a>
                    </x-nav-link>
                </div>
            </div>
        </div>
</x-app-layout>