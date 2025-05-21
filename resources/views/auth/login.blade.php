@extends('layouts.app')

@section('content')
    <h1>Pieslēgšanās</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" placeholder="E-pasts" required>
        <input type="password" name="password" placeholder="Parole" required>
        <button type="submit">Pieslēgties</button>
    </form>
@endsection
