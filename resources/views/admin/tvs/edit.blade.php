@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit: {{ $tv->name }}</h1>

        <form action="{{ route('admin.tvs.store') }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $tv->name) }}">
                    </div>
        
                    <div class="mb-3">
                        <label for="description" class="form-label">Description*</label>
                        <textarea class="form-control" name="description" id="description" rows="6">{{ old('description', $tv->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="inch" class="form-label">Inch*</label>
                        <input type="number" name="inch" id="inch" class="form-control" value="{{ old('inch', $tv->inch) }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price*</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $tv->price) }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Create new TV</button>
                </div>
            </div>
        </form>
    </div>
@endsection