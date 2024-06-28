@extends('layouts.app')

@section('content')
    <h1>Liste des événements</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Thème</th>
                <th>Date début</th>
                <th>Date fin</th>
                <th>Description</th>
                <th>Coût journalier</th>
                <th>Expert</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($evenements as $evenement)
                <tr>
                    <td>{{ $evenement->thème }}</td>
                    <td>{{ $evenement->date_debut }}</td>
                    <td>{{ $evenement->date_fin }}</td>
                    <td>{{ $evenement->description }}</td>
                    <td>{{ $evenement->cout_joumalier }}</td>
                    <td>{{ $evenement->expert_id }}</td>
                    <td>
                        <a href="{{ route('evenements.show', $evenement->id) }}" >Consulter</a>
                        <a href="{{ route('evenements.edit', $evenement->id) }}" >Modifier</a>
                        <form action="{{ route('evenements.destroy', $evenement->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
