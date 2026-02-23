@extends('layouts.app')
@section('title', 'Página de logout')

@section('content')
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Sair</button>
    </form>
@endsection