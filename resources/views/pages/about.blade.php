@extends('app')

@section('title', config('app.name') . ' | About us')
    



@section('content')
        <img src="{{ asset('images/seaux.png') }}" alt="Sceau" class="my-12 rounded shadow-md">
        <h2 class="mb-5 text-gray-700">
                Exercices de test <span class="text-pink-500">&hearts;</span>
        </h2>

        <p>
                <a href=" {{ route('home') }} " class="text-indigo-500 hover:text-indigo-900 underline">Revenir à la page d'accueil</a>
        </p>

@endsection