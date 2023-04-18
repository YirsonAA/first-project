@extends('layouts.app')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Options</h2>
            <a href="{{ route('opciones.create') }}" class="btn btn-primary">Create Option</a>
            <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Option</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($opciones as $opcion)
                        <tr>
                            <td>{{ $opcion->id }}</td>
                            <td>{{ $opcion->option }}</td>
                            <td>{{ $opcion->categoria->description }}</td>
                            <td>
                                <a href="{{ route('opciones.show', $opcion->id) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('opciones.edit', $opcion->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('opciones.destroy', $opcion->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Are you shure what to delete option?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
