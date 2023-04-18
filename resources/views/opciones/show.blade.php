@extends('layouts.app')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Detalles de la Opción</h2>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $opcion->id }}</td>
                </tr>
                <tr>
                    <th>Option</th>
                    <td>{{ $opcion->option }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{ $opcion->categoria->description }}</td>
                </tr>
                <tr>
                    <th>Created</th>
                    <td>{{ $opcion->created_at }}</td>
                </tr>
                <tr>
                    <th>Updated</th>
                    <td>{{ $opcion->updated_at }}</td>
                </tr>
            </table>
            <a href="{{ route('opciones.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
