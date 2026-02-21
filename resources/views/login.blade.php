@extends('layouts.app')
@section('title', 'Página de Login')

@section('content')
    <form method="POST" action="{{ route('login') }}">
    @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password">
        
        <button type="submit">Entrar</button>
    </form>
@endsection