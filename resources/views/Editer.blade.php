@extends("layouts.app")
@section('title', 'Editer un livre')
@section('content')
<form method="post" action="{{ route('livres.modifier', ['livre' => $livre->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="titre">Titre:</label>
            <input type="text" id="titre" name="titre" value="{{ $livre->titre }}">
        </div>
        <div>
            <label for="at_pub">Année de publication:</label>
            <input type="number" id="at_pub" name="at_pub" value="{{ $livre->at_pub }}">
        </div>
        <div>
            <label for="nb_pages">Nombre de pages:</label>
            <input type="number" id="nb_pages" name="nb_pages" value="{{ $livre->nb_pages }}">
        </div>
        <div>
            <label for="id_auteur">Auteur:</label>
            <select name="id_auteur" id="id_auteur">
                @foreach($auteurs as $auteur)
                    <option value="{{ $auteur->id }}" {{ $livre->id_auteur == $auteur->id ? 'selected' : '' }}>
                        {{ $auteur->nom }} {{ $auteur->prenom }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Modifier</button>
    </form>
@endsection
