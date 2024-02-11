@extends("layouts.app")
@section('title', 'Liste des livres')
@section('content')
    <h2>Rechercher des livres :</h2>
    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif
    <div>
        <h2>Liste des livres</h2>
        <form method="get" action="{{ route('livres.recherche', request('id_auteur')) }}">
            <div>
                <input type="text" name="id_auteur" value="{{ request('id_auteur') }}" placeholder="Chercher id auteur">
                <button type="submit">Rechercher</button>
            </div>
        </form>
        @foreach($livres as $livre)
            <p>{{ $livre->titre }}</p>
            <!-- Afficher d'autres informations si nécessaire -->
        @endforeach
        {{ $livres->links() }}
    </div>
@endsection
