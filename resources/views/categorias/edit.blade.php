@extends('layouts.app')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Editid Category</h2>
            <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $categoria->description }}" required>
                </div>
                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
</div>

