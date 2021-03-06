@extends('components/layout')

@section('title', 'Catalogue')
@section('css', 'table')

@section('content')
<h1>Mes livres</h1>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Genre</th>
                    <th>Publication</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>
                        <a href="/books/{{ $book->id }}">{{ $book->title }}</a> 
                    </td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->genre }}</td>
                    <td>{{ $book->date }}</td>
                    <td><button>Modifier</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection