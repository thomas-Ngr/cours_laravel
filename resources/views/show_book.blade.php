@extends('components.layout')

@section('title', $book->title)
@section('css', 'show_book')

@section('content')
<h2>{{ $book->author }}</h2>
<p>Publié en : {{ $book->date }}</p>
<p>Genre : {{ $book->genre }}</p>

<div class="card">
    <h3>Résumé</h3>
    <p>
        {{ $book->synopsis }}
    </p>
<div>
@endsection