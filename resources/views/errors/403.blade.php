<x-guest-layout>
    <img class="w-48 block mx-auto" src="{{ asset('assets/img/403.svg') }}" alt="Not found">
    <h1>Vous tentez d'accéder à une ressource à laquelle vous n'êtes pas autorisé, contactez votre administrateur pour plus
        d'information</h1>
        <x-nav-link href="{{ url()->previous() }}">Retour</x-nav-link>
</x-guest-layout>
