@extends('app')



@section('content')
        
        <img src="{{ asset('images/saina.jpg') }}" alt="Drapeau MDG">
        <h3>Hello from Madagascar!</h3>

        <p>It's actually {{ date('h:i A') }}.</p>
@endsection
