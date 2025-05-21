@extends('layouts.app')

@section('content')
    <h1>Reģistrācija</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" placeholder="Vārds" required>
        <input type="email" name="email" placeholder="E-pasts" required>
        <input type="password" name="password" placeholder="Parole" required>
        <input type="password" name="password_confirmation" placeholder="Paroles apstiprinājums" required>
        <button type="submit">Reģistrēties</button>
    </form>
@endsection
