@extends('layouts.app')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Categorias</h2>
            <a href="{{ route('categorias.create') }}" class="btn btn-primary">Create category</a>
            <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->description }}</td>
                            <td>
                                <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Are you shure you whant to delete this category?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

