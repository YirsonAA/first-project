@extends('layouts.app')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>create Option</h2>
            <form action="{{ route('opciones.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="option">Option</label>
                    <input type="text" class="form-control" id="option" name="option" required>
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" id="category_id" name="category_id" required>
                        <option value="" disabled selected>Select a category</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->description }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>

