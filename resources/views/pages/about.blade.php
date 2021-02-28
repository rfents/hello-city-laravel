@extends('app')

@section('title', config('app.name') . ' | About us')
    



@section('content')
        <img src="/images/seaux.png" alt="Sceau">
        <p>Exercices de test &hearts;</p>

        <h4><a href=" {{ route('home') }} ">Revenir à la page d'accueil</a></h4>

@endsection