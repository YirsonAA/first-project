@extends('layouts.app')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Detalles de la Categoria</h2>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $categoria->id }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $categoria->description }}</td>
                </tr>
                <tr>
                    <th>created</th>
                    <td>{{ $categoria->created_at }}</td>
                </tr>
                <tr>
                    <th>Updated</th>
                    <td>{{ $categoria->updated_at }}</td>
                </tr>
            </table>
            <a href="{{ route('categorias.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
