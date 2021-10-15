@extends('components.layout')

@section('title', 'Nouveau livre')
@section('css', 'form')

@section('content')
<h1>Informations</h1>
<form action="/books" method="POST">

    @csrf

    <div class="form_row">
        <label for="title">Titre</label>
        <input id="title" name="title" type="text">
    </div>
    <div class="form_row">
        <label for="author">Auteur</label>
        <input id="author" name="author" type="text">
    </div>
    <div class="form_row">
        <label for="year">Année de publication</label>
        <input id="year" name="year"type="text">
    </div>
    <div class="form_row">
        <label for="genre">Genre</label>
        <input id="genre" name="genre"type="text">
    </div>
    <div class="form_row">
        <label for="synopsis">Résumé</label>
        <textarea id="synopsis" name="synopsis" rows="5" cols="43"></textarea>
    </div>
    <div class="form_row">
        <input type="submit" value="Enregistrer">
    </div>
</form>
@endsection