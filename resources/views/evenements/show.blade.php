@extends('layouts.app')

@section('content')
    <div>
        <h2>Détails de l'événement : {{ $evenement->id }}</h2>
        <table border="1">
            <tr>
                <td><strong>Thème</strong></td>
                <td>{{ $evenement->thème }}</td>
            </tr>
            <tr>
                <td><strong>Date début</strong></td>
                <td>{{ $evenement->date_debut }}</td>
            </tr>
            <tr>
                <td><strong>Date fin</strong></td>
                <td>{{ $evenement->date_fin }}</td>
            </tr>
            <tr>
                <td><strong>Description</strong></td>
                <td>{{ $evenement->description }}</td>
            </tr>
            <tr>
                <td><strong>Coût journalier</strong></td>
                <td>{{ $evenement->cout_joumalier }}</td>
            </tr>
            <tr>
                <td><strong>Nom de l'expert</strong></td>
                <td>{{ $evenement->expert->nomExp }} {{ $evenement->expert->prénomExp }}</td>
            </tr>
        </table>

        <h3>Liste des ateliers :</h3>
        @if ($evenement->ateliers->count() > 0)
            <table border="1">
                <tr>
                    <th>Nom de l'atelier</th>
                    <th>Description de l'atelier</th>
                </tr>
                @foreach ($evenement->ateliers as $atelier)
                    <tr>
                        <td>{{ $atelier->nomAtelier }}</td> 
                        <td>{{ $atelier->descriptionAtelier }}</td> 
                    </tr>
                @endforeach
            </table>
        @else
            <p>Aucun atelier n'est associé à cet événement.</p>
        @endif

        <a href="{{route('evenements.index')}}">retour</a>
    </div>
@endsection
