@extends('layouts.app')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Option</h2>
            <form action="{{ route('opciones.update', $opcion->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="option">Option</label>
                    <input type="text" class="form-control" id="option" name="option" value="{{ $opcion->option }}" required>
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" id="category_id" name="category_id" required>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ $opcion->category_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->description }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
</div>
