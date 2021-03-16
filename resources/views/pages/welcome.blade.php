@extends('layouts/app')



@section('content')
        
        <img src="{{ asset('images/saina.jpg') }}" alt="Drapeau MDG" class="mt-12 rounded shadow-md h-32">
        <h3 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Madagascar!</h3>

        <p class="text-lg text-gray-500">It's actually {{ date('h:i A') }}.</p>
@endsection
